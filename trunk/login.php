<html>
  <body>
	<form method="POST" action="function/fungsi-login.php">
	  <div class="control-group">
		<label class="control-label" for="usernamemember">Username</label>
		  <div class="controls">
			<span class="add-on"><i class="icon-user"></i></span>
			<input type="text" name="usernamemember" placeholder="username">
		  </div>
	  </div>
	  <div class="control-group">
		<label class="control-label" for="passwordmember">Password</label>
		  <div class="controls">
			<span class="add-on"><i class="icon-check"></i></span>
			<input type="password" name="passwordmember" placeholder="password">
		  </div>
	  </div>
	  
	  <?php
	  session_start();
	  if (isset($_SESSION['usernamemember'])) {
	  //header('Location: index.php');
	  }
	  
	  if(isset ($_SESSION['salah'])){?>
	  <i>username dan password anda salah. mohon masukkan ulang username dan password anda</i>
	  
	  <?php
	  unset ($_SESSION ['salah']);
	  }
	  ?>
				
	  <div class="control-group">
		<div class="controls">
		  <label class="checkbox">
		  <input type="checkbox">Ingatkan saya
		  </label><br>
		  <button type="submit" class="btn btn-primary">Masuk</button>
		  <button class="btn" href="tambah-anggota.php">Daftar</button><br><br>
		  <a class="btn btn-link" href="">Lupa password?</a>
		</div>
	  </div>
	</form>