<html>
<body>
<form method="POST" action="function/fungsi-login.php">
  <div class="control-group">
	<center><label class="control-label" for="usernamemember">Username</label></center>
	  <div class="controls">
		<span class="add-on"><i class="icon-user"></i></span>
		<input type="text" name="usernamemember" placeholder="username">
	  </div>
  </div>
  <div class="control-group">
	<center><label class="control-label" for="passwordmember">Password</label></center>
	  <div class="controls">
		<span class="add-on"><i class="icon-check"></i></span>
		<input type="password" name="passwordmember" placeholder="password">
	  </div>
  </div>
  
  <?php
  session_start();
  if (isset($_SESSION['usernamemember'])) {
	header('Location: member/index.php');
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
	  
	  <div style="text-align: center;">
	  <button type="submit" class="small blue button radius">Masuk</button>
	  <a href="tambahanggota.php" class="small green button radius">Register </a><br><br>
	  <a href="">Lupa password?</a>
	  </div>
	</div>
  </div>
</form>