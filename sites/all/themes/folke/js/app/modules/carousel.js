//
// scans DOM for toggle-controllers and loops over their linked element ( by id )
//
define(["jquery", "carousel"], function($, $cycleCarousel) {

    //'use strict';

    var  carouselModule = {};
    carouselModule.init = function() {
      //console.log("init carousel");
      $(".js-carousel").cycle({ speed: 150, manualspeed: 150, 'log': false });
    };

    return carouselModule;

});
