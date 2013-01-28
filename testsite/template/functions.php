<?php 

function  main_navigation()
{    

$active_page = basename($_SERVER['PHP_SELF']);

?>

<div class="main_nav">
	<ul>
		<li>
			<? if ($active_page != "index.php"){?> 
			<a href='index.php'>Home</a> <? }else{ ?> 
			<div class='active'>Home</div> <? } ?>
		</li>
		
		<li>
			<? if ($active_page != "products.php"){?> 
			<a href='products.php'>Products</a> <? }else{ ?> 
			<div class='active'>Products</div> <? } ?>
				<ul>
					<li><a href="ace.php">Ace</a></li>
					<li><a href="electrodes.php">Electrodes</a></li>
				</ul>
		</li>
		<li>
			<? if ($active_page != "about.php"){ echo "<a href='about.php'>About Us</a>"; }else{ echo "<div class='active'>About Us</div>"; } ?>
		</li>
	</ul>
</div>
<?
};
   
?>


<?php

function  secondary_navigation()
{

$active_page = basename($_SERVER['PHP_SELF']);

	if($active_page == "products.php"){ ?>
	
	<div class="secondary_nav">
		<ul>
			<li><a href="#">Overview</a></li>
			<li><a href="#">Video</a></li>
			<li><a href="#">Ball</a></li>
			<li><a href="#">Needle</a></li>
			<li><a href="#">Specialty</a></li>
		</ul>
	</div>
	
	<? }; ?>
<?
};
?>


<?php
function  top_navigation()
{
   $active_page = basename($_SERVER['PHP_SELF']);
    
    /* echo $active_page; */
    
    
    $tnav = array(
	"Newsletter:newsletter.php",
	"Videos:videos.php",
	"About Us:about.php",
	"News:news.php",
	"Contact:contact.php"
	);
	
	echo '<ul>';
	foreach($tnav as $trow)
    {
        $tnav = explode(":", $trow);
        $tpage = trim($tnav[0]);
        $tlink = trim($tnav[1]);
        if($tlink == $active_page)
        {
            echo '<li  class="active">' . $tpage . '</li>';
        }
        else
        {
            echo '<li><a href="' . $tlink .  '">' . $tpage . '</a></li>';
        }
    }    echo '</ul>';
		
};

?>