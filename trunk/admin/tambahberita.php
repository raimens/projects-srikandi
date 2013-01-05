<!DOCTYPE html>
<html lang="en">
<head>
<title>Sistem Informasi Kesenian Daerah Indonesia</title>
<link href="../img/icon.png" rel="shortcut icon" />
<link href="../css/bootstrap.min.css" id="bs-css" rel="stylesheet">
<link href="../css/bootstrap.css" rel="stylesheet">
<link href="../css/css_002.css" rel="stylesheet" type="text/css">
<link href="../css/css.css" rel="stylesheet" type="text/css">
<link href="../css/bootstrap-responsive.css" rel="stylesheet">

<script type="text/javascript" src="../tinymce/jscripts/tiny_mce/tiny_mce.js" ></script >
<script type="text/javascript" >
tinyMCE.init({
        mode : "textareas",
        theme : "advanced",
        plugins : "emotions,spellchecker,advhr,insertdatetime,preview", 
                
        // Theme options - button# indicated the row# only
        theme_advanced_buttons1 : "newdocument,|,bold,italic,underline,|,justifyleft,justifycenter,justifyright,fontselect,fontsizeselect,formatselect",
        theme_advanced_buttons2 : "cut,copy,paste,|,bullist,numlist,|,outdent,indent,|,undo,redo,|,link,unlink,anchor,image,|,code,preview,|,forecolor,backcolor",
        theme_advanced_buttons3 : "insertdate,inserttime,|,spellchecker,advhr,,removeformat,|,sub,sup,|,charmap,emotions",      
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : "bottom",
        theme_advanced_resizing : true
});
</script >
</head>

<body class="mainblock">
  <?php
  include ("adminheader.php");
  ?>
  
  <div class="container">
	<div class="row">
	  <?php
	  include ("sidebar.php");
	  ?>

	  <div class="span9">
	  <h3>Tambah Berita</h3><br><br>
	  <form id="tambahberita" name="tambahberita" method="post" action="../function/fungsitambahberita.php">
  <table width="460">
    <tr>
      <td width="160"><label>Judul Berita</label></td>
      <td width="300"><input type="text" name="judulberital" id="judulberita" /></td>
    </tr>
  </table><br>
  <textarea name="isiberita" cols="300" rows="15" > 
        
  </textarea><br>
  <table width="460">
    <tr>
      <td width="160"><label>Jenis Berita</label>&nbsp;</td>
      <td width="300"><select type="text" name="jenis">
		  <option value="Seni Tari">Seni Tari</option>
		  <option value="Seni Musik">Seni Musik</option>
		  <option value="Seni Rupa">Seni Rupa</option>
		  <option value="Drama">Drama</option>
		</select></td>
    </tr>
  </table><br>
  <input type="submit" class="small blue button radius" name="button" value="Tambah Berita">
  <input class="small white button radius" type="reset" value="Reset">
</form>
	  </div>
    </div>
	
	<div class="container" style="padding:30px;">
	  <div class="row">
		<div class="span10"></div>
		<div class="span2"></div>
	  </div>
	</div>
  </div>

<?php
include ("../js/script.php");
?>
</body>
</html>