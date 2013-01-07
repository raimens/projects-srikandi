<html>
<body>
<div class="sidewell" style="margin-top:0px;">
<h4>Hai, <?php 
$sql = 'SELECT fotomember, namamember FROM member WHERE usernamemember="'.$_SESSION['usernamemember'].'"';
$query = mysql_query($sql);
$data = mysql_fetch_object ($query);
$namamember = $data -> namamember;
$fotomember = $data -> fotomember;
echo $namamember;?>  Selamat Datang di SRIKANDI</h4><br>
<ul class="thumbnails">
  <li class="span2"><a href="#" class="thumbnail">
  <img src="<?php $fotomember ?>" alt=""></a>
  </li>
</ul>
<span class="pull-right"><a href="#">Ubah Riwayat</a></span><br>
</div>