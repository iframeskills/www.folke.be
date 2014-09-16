//
// The build will inline common dependencies into this file.
// For any third party dependencies, like jQuery, place them in the lib folder.
//

requirejs.config({
  baseUrl: '/sites/all/themes/folke/js',
  paths: {
    // the left side is the module ID,
    // the right side is the path to
    // the jQuery file, relative to baseUrl.
    // Also, the path should NOT include
    // the '.js' file extension.
    'jquery' : 'lib/jquery-1.10.2.min',
    'carousel' : 'lib/jquery.cycle2',
    'carousel-center' : 'lib/jquery.cycle2.center',
    'modernizr' : 'lib/modernizr.custom'
  },
  shim: {
  },

  // The number of seconds to wait before giving up on loading a script. Setting it to 0 disables the timeout. The default is 7 seconds.
  waitSeconds: 90

});
