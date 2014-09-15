//
// bundles all functionality
//

define(["require", "jquery", "./ui/elements"],
    function(require, $, elements) {

        'use strict';

        //console.log("loaded main");
        
        require(['modernizr'], function(modernizr) {
            //add feature detection for mediaqueries:
            if (!window.Modernizr.mq('only all')) {
                $("html").removeClass("mq");
                $("html").addClass("no-mq");
            }
        });

        elements.onload();

        $(function(){
          if($('.js-carousel').length){
            require([ "app/modules/carousel" ], function(carouselModule){
              carouselModule.init();
            });
          }
          
          if($('.js-tab').length){
            require([ "app/modules/tab" ], function(tabModule){
              tabModule.init();
            });
          }

			var pull, menu,  menuHeight;
			pull       = $('#pull'); 
			menu        = $('nav.submenu ul');  
			menuHeight  = menu.height();  

			$(pull).on('click', function(e) {  
				e.preventDefault();  
				menu.slideToggle();  
			});  

			$(window).resize(function(){  
				var w = $(window).width();  
				if(w > 320 && menu.is(':hidden')) {  
					menu.removeAttr('style');  
				}  
			});   

        });

        return function() {};
    });
