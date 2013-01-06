<html>
<body>
<div class="sidewell" style="margin-top:0px;">
<h4>Hai, <?php 
$sql = 'select namamember from member where usernamemember="'.$_SESSION['usernamemember'].'"';
$query = mysql_query( $sql );
$data = mysql_fetch_object ( $query );
$namamember = $data -> namamember;
echo $namamember;?>  Selamat Datang di SRIKANDI</h4><br>
<ul class="thumbnails">
  <li class="span2"><a href="#" class="thumbnail">
  <img src="../img/default.gif" alt=""></a>
  </li>
</ul>
<span class="pull-right"><a href="editprofile.php">edit profile</a></span><br>
</div>