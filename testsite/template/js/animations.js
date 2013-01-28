//Product Buttons Animation

	$(document).ready(function () { 
     
	    $('.home_buttons a').hover(
	        function () {
	            //show its Title
	            $('div', this).stop().slideDown(200);
	 
	        }, 
	        function () {
	            //hide its Title
	            $('div', this).stop().slideUp(200);          
	        }
	    );
     
    });
    
//Shadow Animation
/*
$(document).ready(function () { 
     
	    $('.banner img').hover(
	        function () {
	            //show its Title
	            $(this).stop().animate({boxShadow: '0 0 30px #ffffff'});
	 
	        }, 
	        function () {
	            //hide its Title
	            $(this).stop().animate({boxShadow: '0 0 0px #ffffff'});          
	        }
	    );
     
    });
*/

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
    
    

