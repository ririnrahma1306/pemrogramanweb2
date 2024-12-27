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
<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_dashboard.php'); ?>
<br><br><br><br><br>
	<section>
		<div class="container">
	

                   
						<?php

	error_reporting( ~E_NOTICE ); // avoid notice
	
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
	
	if(isset($_POST['btnsave']))
	{
		$nama = $_POST['user_name'];// user name
		$deskripsi = $_POST['user_job'];// user email
		
		$imgFile = $_FILES['images']['name'];
		$tmp_dir = $_FILES['images']['tmp_name'];
		$imgSize = $_FILES['images']['size'];
		
		
		if(empty($nama)){
			$errMSG = "Nama belum diisi...";
		}
		else if(empty($deskripsi)){
			$errMSG = "Jumlah transfer belum diisi...";
		}
		else if(empty($imgFile)){
			$errMSG = "Gambar belum diisi...";
		}
		else
		{
			$upload_dir = 'images/'; // upload directory
	
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
		
			// valid image extensions
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
		
			// rename uploading image
			$gambar = rand(1000,1000000).".".$imgExt;
				
			// allow valid image file formats
			if(in_array($imgExt, $valid_extensions)){			
				// Check file size '5MB'
				if($imgSize < 5000000)				{
					move_uploaded_file($tmp_dir,$upload_dir.$gambar);
				}
				else{
					$errMSG = "Sorry, your file is too large.";
				}
			}
			else{
				$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";		
			}
		}
		
		
		// if no error occured, continue ....
		if(!isset($errMSG))
		{
			$stmt = $DB_con->prepare('INSERT INTO denda(nama,denda,gambar) VALUES(:uname, :ujob, :upic)');
			$stmt->bindParam(':uname',$nama);
			$stmt->bindParam(':ujob',$deskripsi);
			$stmt->bindParam(':upic',$gambar);
			
			if($stmt->execute())
			{
				$successMSG = "Bukti bayar berhasil diupload ...";
				 header("refresh:5;denda_home.php"); // redirects image view page after 5 seconds.
			}
			else
			{
				$errMSG = "error while inserting....";
			}
		}
	}
?>

<div class="col-md-12">

    

	<?php
	if(isset($errMSG)){
			?>
            <div class="alert alert-danger">
            	<span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $errMSG; ?></strong>
            </div>
            <?php
	}
	else if(isset($successMSG)){
		?>
        <div class="alert alert-success">
              <strong><span class="glyphicon glyphicon-info-sign"></span> <?php echo $successMSG; ?></strong>
        </div>
        <?php
	}
	?>   

<form method="post" enctype="multipart/form-data" class="form-horizontal">
	    
	<table class="table table-bordered table-responsive">
	<p align="center" style="color: red;">Pembayaran denda dilakukan dengan cara transfer!!!</p>
	
    <tr>
    	<td><label class="control-label">Nama</label></td>
        <td><input class="form-control" type="text" name="user_name" placeholder="(ex. Maulid)" value="<?php echo $nama; ?>"/></td>
    </tr>
    
    <tr>
    	<td><label class="control-label">Bank dan Jumlah Transfer</label></td>
        <td><input class="form-control" type="text" name="user_job" placeholder="(ex. BRI/Rp. 200.000,-)" value="<?php echo $deskripsi; ?>" /></td>
    </tr>
    
    <tr>
    	<td><label class="control-label">Bukti Pembayaran</label></td>
        <td><input class="input-group" type="file" name="images" accept="image/*" /></td>
    </tr>
    
    <tr>
        <td colspan="2"><button type="submit" name="btnsave" class="btn btn-default">
        <span class="glyphicon glyphicon-save"></span> &nbsp; Simpan
        </button>
        </td>
    </tr>
    
    </table>
    
</form>

    

</div>



		
        </div>
</div>
</div>
</div>
</section>