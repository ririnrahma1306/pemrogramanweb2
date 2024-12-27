
<?php
//Start session
session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['id']) || (trim($_SESSION['id']) == '')) {
    header("location: index.php");
    exit();
}
$session_id=$_SESSION['id'];
?>
<?php

	
	$DB_HOST = 'localhost';
	$DB_USER = 'root';
	$DB_PASS = '';
	$DB_NAME = 'eb_lms';
	
	try{
		$DB_con = new PDO("mysql:host={$DB_HOST};dbname={$DB_NAME}",$DB_USER,$DB_PASS);
		$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
	
	
	if(isset($_GET['delete_id']))
	{
		// select image from db to delete
		$stmt_select = $DB_con->prepare('SELECT gambar FROM denda WHERE id =:uid');
		$stmt_select->execute(array(':uid'=>$_GET['delete_id']));
		$imgRow=$stmt_select->fetch(PDO::FETCH_ASSOC);
		unlink("images/".$imgRow['gambar']);
		
		// it will delete an actual record from db
		$stmt_delete = $DB_con->prepare('DELETE FROM denda WHERE id =:uid');
		$stmt_delete->bindParam(':uid',$_GET['delete_id']);
		$stmt_delete->execute();
		
		header("Location: denda_home.php");
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
<title>Denda</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
</head>

<body>
<div class="container">

	<div class="page-header">
    	<h3 class="text-center">Halaman Kelola Denda Keterlambatan Pengembalian Buku Pinjaman <br /><a class="btn btn-info" href="denda_add.php"> <span class="">Tambah </a> 
    	</h3> 
    </div>
    
<br />

<div class="row col-md-12">
<table class="table table-striped">
				<tr class="active">
					<td width="20%"><b>GAMBAR</b></td>
					<td width="30%"><b>NAMA</b></td>
					<td width="30%"><b>DENDA</b></td>
					<td width="20%"><b>AKSI</b></td>

				</tr>
			</table>
<?php
	
	$stmt = $DB_con->prepare('SELECT id, nama, denda, gambar FROM denda ORDER BY id DESC');
	$stmt->execute();
	
	if($stmt->rowCount() > 0)
	{
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);
			?>
			<table class="table table-condensed">
				<tr>
					<td width="20%"><img src="images/<?php echo $row['gambar']; ?>" class="img-rounded" width="100px" height="70px" /></td>
					<td width="30%"><?php echo $row['nama']; ?></td>
					<td width="30%"><?php echo $row['denda']; ?></td>
					<td width="20%"><a class="btn btn-info" href="denda_edit.php?edit_id=<?php echo $row['id']; ?>" title="click for edit" onclick="return confirm('sure to edit ?')">Edit</a> 
				<a class="btn btn-danger" href="?delete_id=<?php echo $row['id']; ?>" title="click for delete" onclick="return confirm('sure to delete ?')">Hapus</a></td>

				</tr>
			</table>
			
			<?php
		}
	}
	else
	{
		?>
        <div class="col-xs-12">
        	<div class="alert alert-warning">
            	<span class="glyphicon glyphicon-info-sign"></span> &nbsp; No Data Found ...
            </div>
        </div>
        <?php
	}
	
?>
</div>	

</div>


<!-- Latest compiled and minified JavaScript -->
<script src="bootstrap/js/bootstrap.min.js"></script>


</body>
</html>