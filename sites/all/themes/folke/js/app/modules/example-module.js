//
// scans DOM for toggle-controllers and loops over their linked element ( by id )
//

define(["jquery"], function($) {

  'use strict';

  function exampleModule(  ) {

    console.log("example module instance created");

  }

  exampleModule.prototype = {

    init: function() {

      console.log("init example module");

    }

  };

  return exampleModule;

});
