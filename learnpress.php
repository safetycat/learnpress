<?php
/*
Plugin Name: Learnpress
Plugin URI: https://github.com/safetycat/learnpress.git
Description: A in development project 
Version: 0.0
Author: Safetycat
Author URI: http://safetycat.co.uk
Author Email: james@ ^
ignore this
*/
// Only create an instance of the plugin if it doesn't already exists in GLOBALS
if( ! array_key_exists( 'hello-reader', $GLOBALS ) ) {
 
    class Learnpress {
          
        function __construct() {
             
        } // end constructor
       
    } // end class
     
    // Store a reference to the plugin in GLOBALS so that our unit tests can access it
    $GLOBALS['learnpress'] = new Learnpress();
     
} // end if