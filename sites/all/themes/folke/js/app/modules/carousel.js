//
// scans DOM for toggle-controllers and loops over their linked element ( by id )
//
define(["jquery", "carousel"], function($, $cycleCarousel) {
	 var  carouselModule = {};

	 carouselModule.init = function() {
	require(["carousel-center"], function(ok){

    //'use strict';

   
    
      //console.log("init carousel");
      $(".js-carousel").cycle({ speed: 150, manualspeed: 150, 'log': false});
   

    
    });
     };

    return carouselModule;

});
