<?php
// Bootstrap the framework DO NOT edit this
require COREPATH.'bootstrap.php';


Autoloader::add_classes(array(
	// Add classes you want to override here
	// Example: 'View' => APPPATH.'classes/view.php',
	
'OAuth2\\Exception'  			=> __DIR__.'/classes/exception.php',

'OAuth2\\Model_Server'  		=> __DIR__.'/classes/model/server.php',
'OAuth2\\Model_Server_Db'  		=> __DIR__.'/classes/model/server/db.php',
'OAuth2\\Model_Server_Mongo'  	=> __DIR__.'/classes/model/server/mongo.php',

'OAuth2\\Provider'  			=> __DIR__.'/classes/provider.php',
'OAuth2\\Provider_Blooie'  		=> __DIR__.'/classes/provider/facebook.php',
'OAuth2\\Provider_Facebook'  	=> __DIR__.'/classes/provider/facebook.php',
'OAuth2\\Provider_Foursquare'  	=> __DIR__.'/classes/provider/foursquare.php',
'OAuth2\\Provider_Google'  		=> __DIR__.'/classes/provider/google.php',
'OAuth2\\Provider_Github'  		=> __DIR__.'/classes/provider/github.php',
'OAuth2\\Provider_Instagram'  	=> __DIR__.'/classes/provider/instagram.php',
'OAuth2\\Provider_Paypal'	  	=> __DIR__.'/classes/provider/paypal.php',
'OAuth2\\Provider_Soundcloud'  	=> __DIR__.'/classes/provider/soundcloud.php',
'OAuth2\\Provider_Windowslive'  => __DIR__.'/classes/provider/windowslive.php',

'OAuth2\\Request'  				=> __DIR__.'/classes/request.php',
'OAuth2\\Server'  				=> __DIR__.'/classes/server.php',

'OAuth2\\Token'  				=> __DIR__.'/classes/token.php',
'OAuth2\\Token_Access'  		=> __DIR__.'/classes/token/access.php',
'OAuth2\\Token_Authorize'		=> __DIR__.'/classes/token/authorize.php',
'OAuth2\\Token_Refresh'			=> __DIR__.'/classes/token/refresh.php',

));

// Register the autoloader
Autoloader::register();

/**
 * Your environment.  Can be set to any of the following:
 *
 * Fuel::DEVELOPMENT
 * Fuel::TEST
 * Fuel::STAGING
 * Fuel::PRODUCTION
 */
Fuel::$env = (isset($_SERVER['FUEL_ENV']) ? $_SERVER['FUEL_ENV'] : Fuel::DEVELOPMENT);

// Initialize the framework with the config file.
Fuel::init('config.php');
