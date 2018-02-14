jQuery.noConflict();
		(function( $ ) {
			//nav collapse and animate tabs
			$(function() {
				$("#nav_collapse").click(toggleNav);
				
				//Animate tabs (per Zach Dunn's blog)
				//When mouse rolls over
			    $("#main_menu li").mouseover(function(){
			        $(this).stop().animate({top:"16px"},{queue:false, duration:150, easing: 'easeInQuad'})
			    });
			 
			    //When mouse is removed
			    $("#main_menu li").mouseout(function(){
			    	var menuItemClass = $(this).attr("class");
			    	if(menuItemClass != "current-menu-item"){
			          $(this).stop().animate({top:"30px"},{queue:false, duration:150, easing: 'easeInQuad'})
			    	}
			    });
			});
			
			//Animate donate button
			$(document).ready(function(){
			    //When mouse rolls over
			    $("#donate li").mouseover(function(){
			        $(this).stop().animate({top:'1px'},{queue:false, duration:100, easing: 'easeOutQuad'})
			    });
			 
			    //When mouse is removed
			    $("#donate li").mouseout(function(){
			        $(this).stop().animate({top:'20px'},{queue:false, duration:100, easing: 'easeOutQuad'})
			    });			    
			});
			
			//ajax
			$(function(){
				$(".submenu li a").click(showChildContent);
				$(".submenu li a").click(showActivePage);
			});
			
			function showChildContent()
			{	
				var pageLink = $(this).attr("href");               	
                $("#main_page_content").load(pageLink + " #stuff");
  			
				return false;
			}
			
			function showActivePage()
			{
				$(".submenu li a").css({color: "#FFFFFF", fontWeight: "400", textDecoration: "none"});
				$(this).css({color: "#FFFFFF", fontWeight: "700", textDecoration: "underline"});
			}
			
			function toggleNav()
			{
				var menu_bar = $(this).attr("href");
				$(menu_bar).slideToggle();
				return false;
			}
			
			$(function(){
				changeColors();
			});
			
			function changeColors()
			{
				var pagePathName= window.location.pathname;
				if(pagePathName == "/visit-us/") /*&& $(#nav_collapse).not(":visible"))*/
				{
					$("#spotlight").addClass("dkblue");
					$("#main_menu li.current-menu-item").css({backgroundColor: "#46656c"});
				}
				else if(pagePathName == "/exhibits/")
				{
					$("#spotlight").addClass("dusty-blue");
					$("#main_menu li.current-menu-item").css({backgroundColor: "#5d8690"});
				}
				else if(pagePathName == "/education/")
				{
					$("#spotlight").addClass("cocoa");
					$("#main_menu li.current-menu-item").css({backgroundColor: "#736247"});
				}
				else if(pagePathName == "/news-2/")
				{
					$("#spotlight").addClass("peagreen");
					$("#main_menu li.current-menu-item").css({backgroundColor: "#9cc8b8" });
				}
				else if(pagePathName == "/join-us/" || pagePathName == "/join-us/membership/")
				{
					$("#spotlight").addClass("forest");
					$("#main_menu li.current-menu-item").css({backgroundColor: "#628c7d"});
				}
				else
				{
					$("#spotlight").addClass("brown");
					$("#main_menu li.current-menu-item").addClass("brown");
				}
 		    }
			
})(jQuery);



















