//
// Initalise localisation
//

define([], function() {

    'use strict';

    var t,
        translationsNL;

    t = function( label ) {
        return translationsNL[ label ] || label;
    }

    //default to NL for now
    translationsNL = {

    };

    return t;

});
