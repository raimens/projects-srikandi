<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sistem Informasi Kesenian Daerah Indonesia</title>
    <link rel="shortcut icon" href="../img/icon.png"/>
    <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
  </head>
  <body>
    <?php
	include ("headermember.php");
	include ("../function/loginfirst.php");
	?>
	
	<div class="container-fluid">
	  <div class="row-fluid">
		<div class="span3">
		<?php
		include ("../search.php");
		?>
		</div>
	  
		<div class="span9">
		  <div class="control-group">
			<label class="control-label" for="textarea2">Textarea WYSIWYG</label>
			<div class="controls">
			   <textarea class="cleditor" id="textarea2" rows="3"></textarea>
			</div>
		  </div>
		</div>
	  </div>
	</div>
	<script src="../js/jquery.autogrow-textarea.js"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>