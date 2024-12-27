<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_member.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		
             <div class="alert alert-info">Tambah Member</div>
			<p><a href="member.php" class="btn btn-info"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a></p>
	<div class="addstudent">
	<div class="details">Form Tambah Member</div>		
	<form class="form-horizontal" method="POST" action="member_save.php" enctype="multipart/form-data">
			
		<div class="control-group">
			<label class="control-label" for="inputEmail">Nama Depan:</label>
			<div class="controls">
			<input type="text" id="inputEmail" name="firstname"  placeholder="Nama depan" required>

			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">nama Belakang:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="Nama belakang"  placeholder="Lastname" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Jenis Kelamin:</label>
			<div class="controls">
			<select name="gender" required>
				<option></option>
				<option>Laki-laki</option>
				<option>Perempuan</option>
			</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Alamat:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="address"  placeholder="Alamat" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">No Hp:</label>
			<div class="controls">
			<input type='tel' pattern="[0-9]{12,12}" class="search" name="contact"  placeholder="No hp"  autocomplete="off"  maxlength="15" >
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Tipe:</label>
			<div class="controls">
			<select name="type" required>
			
			
			
									<option></option>
									<option>Pelajar</option>
									<option>Guru</option>
									<option>Mahasiswa/i</option>
									<option>Pegawai</option>
									<option>Lainya</option>
									<option></option>
									
				</select>
			</div>
		</div>
			
		<div class="control-group">
			<label class="control-label" for="inputPassword">Level:</label>
			<div class="controls">
				<select name="year_level" >
					

									<option> </option>
									<option>Member Baru</option>
									<option>Member Lama</option>
								
				</select>
			</div>
		</div>
		
		
				
		
		
		
		<div class="control-group">
			<div class="controls">
			<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Simpan</button>
			</div>
		</div>
    </form>					
			</div>		
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>