<!-Page data-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link href="template/style.css" type="text/css" rel="stylesheet" />
    <meta name="viewport" content="width=1100" />
    <title>Megadyne</title>
</head>

<body>

<?php

include 'template/functions.php';
include 'template/config.php';

?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
<script src="template/js/animations.js"></script>


<!-Page Header Elements-->
<? if ($page_template == "normal"){ ?>
<div class="top_bar"></div>
<? }elseif ($page_template == "slider"){ ?>
<div class="top_bar_slider"></div>
<? }; ?>


<div class="page_container">
	<div class="header_container">
		<div class="logo">
			<img src="template/images/megadyne_logo.png"/>
		</div>
		
	<div class="nav_container">
		<div class="top_nav">
		
			<? top_navigation(); ?>
			
			<input type="text" name="q" size="38" style="font-size: 10px; background-image: url(http://www.google.com/cse/intl/en/images/google_custom_search_watermark.gif); background-color: rgb(255, 255, 255); background-position: 0% 50%; background-repeat: no-repeat no-repeat; float:right; ">
		</div>

		<? main_navigation (); ?>

	</div>
		<? secondary_navigation (); ?>
	
	</div>
