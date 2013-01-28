	<?php $page_template = "normal" ?>
    <?php include('template/header.php') ?>
    <script type="text/javascript" src="template/js/css-dock-menu/js/interface.js"></script>
    <link href="template/js/css-dock-menu/style.css" rel="stylesheet" type="text/css" />
    
    <script type="text/javascript">
	   $(document).ready(
		   function()
		   {
			   $('#dock').Fisheye(
			   {
			   maxWidth: 40,
			   items: 'a',
			   itemsText: 'span',
			   container: '.dock-container',
			   itemWidth: 35,
			   proximity: 80,
			   alignment : 'left',
			   valign: 'top',
			   halign : 'center'
			   }
			   )
		   };
		   
		
	   );
   </script>

    <div class="main_bar">
        <h1 class="page_title">Ace Blade</h1>
    </div>

    <div class="main_body_left">
        <div class="dock" id="dock">
			  <div class="dock-container">
				  <a class="dock-item" href="#"><img src="images/home/btn_megasoft.png" alt="btn_megasoft"/><span>N.Design</span></a> 
				  <a class="dock-item" href="#"><img src="images/home/btn_megasoft.png" alt="btn_megasoft" /><span>Designer Wall</span></a> 
				  <a class="dock-item" href="#"><img src="images/home/btn_electrode.png" alt="btn_electrode" /><span>Design Jobs</span></a> 
				  <a class="dock-item" href="#"><img src="images/home/btn_megasoft.png" alt="btn_megasoft"/><span>Best Web Gallery</span></a> 
				  <a class="dock-item" href="#"><img src="images/home/btn_electrode.png" alt="btn_electrode"  /><span>IconDock</span></a> 
				  <a class="dock-item" href="#"><img src="images/home/btn_megasoft.png" alt="btn_megasoft"/><span>Stock Icons</span></a>
			  </div> 
		</div>
		        <h3>Adipisicing elit volupte</h3>
        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a class="bodylink" href="#">Read More</a>
    </div>

    <div class="sidebar_right">
        <a href="#" class="banner">
        	<img src="images/sample/banner1.png"/>
        </a>
        <a href="#" class="banner">
        	<img src="images/sample/banner2.png"/>
        </a>
        <h3>Consectetur adipisicing elit</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
        <h3>Fugiat nulla pariatur</h3>
        <p>magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        <h3>Consectetur adipisicing elit</h3>
        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

</body>
</html>
