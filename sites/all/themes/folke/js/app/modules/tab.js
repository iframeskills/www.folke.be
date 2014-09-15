//
// scans DOM for toggle-controllers and loops over their linked element ( by id )
//
define(["jquery"], function($) {

	//'use strict';

	var tabModule = {};
	tabModule.init = function (){

		//console.log("tab-loaded");

		$('.js-tab-selector').on( "click", function (e){
			//set tab-selector active
			$('.js-tab-selector').removeClass('isActive');
			$(this).addClass('isActive');

			//set tab active
			$('.js-tab').hide();
			var select = $(this).attr('data-target');
			$("."+select).show();

			e.preventDefault();
		});
	};

	return tabModule;

});