//Product Buttons Animation

	$(document).ready(function () { 
     
	    $('.home_buttons a').hover(
	        function () {
	            //show its submenu
	            $('div', this).stop().slideDown(200);
	 
	        }, 
	        function () {
	            //hide its submenu
	            $('div', this).stop().slideUp(200);          
	        }
	    );
     
    });
    
    
//Navigation Dropdown Animation

	$(document).ready(function () { 
     
	    $('.main_nav li').hover(
	        function () {
	            //show its submenu
	            $('ul', this).stop().slideDown(100);
	 
	        }, 
	        function () {
	            //hide its submenu
	            $('ul', this).stop().slideUp(100);          
	        }
	    );
     
    });
    
    

