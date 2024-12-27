<br>
<table align="center">
    <tr>
    	<td><h1><p align="center">Katalog Buku</p></h1></td>
    </tr>
	<tr>
		<td>
<ul id="da-thumbs" class="da-thumbs">
 <?php require_once 'Gallery/dbconfig.php'; ?>
           <?php
  
  $stmt = $DB_con->prepare('SELECT gid, gname, gdesc, gpic FROM gallery ORDER BY gid DESC');
  $stmt->execute();
  
  if($stmt->rowCount() > 0)
  {
    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
    {
      extract($row);
      ?>

	<li>
		<a href="">
			<img src="Gallery/user_images/<?php echo $row['gpic']; ?>" class="img-rounded" width="230px" height="300px" />
			<div><span><?php echo $row['gname']; ?>
     <br> 
     Penulis : <?php echo $row['gdesc']; ?>  
      </span></div>
		</a>
	</li>
      <?php
    }
  }
  else
  {
    ?>
    
      <?php } ?>	
</ul>
</td>
	</tr>
</table>









                  


    <!-- FACULTY SECTION END-->