<div class="span3">
  <div class="wellmess">
	<center><h4>Selamat Datang <?php echo $usernamemember; ?></h4></center><br>
  </div>
	
  <div class="sidewell" style="margin-top:0px;">
	<ul class="nav nav-tabs nav-stacked" style="color:white; background:white;">
	<li><a href="seniman.php">Seniman</a></li>
	<li><a href="berita.php">Berita</a></li>
	<li><a href="jadwal.php">Jadwal</a></li>
	<li><a href="../function/logout.php">Logout</a></li>
	<li><a href="../home.php">Back to Front End</a></li>
	</ul>
  </div>
	
  <div class="sidewell" style="margin-top:0px;">
  <?php
  include ("search.php");
  ?>
  </div>
</div>