<?php
/**
 * Configuration file for CSRF Protector z
 */
return array(
	"CSRFP_TOKEN" => "",
	"noJs" => false,
	"logDirectory" => "../log/",
	"failedAuthAction" => array(
		"GET" => 0,
		"POST" => 0),
	"errorRedirectionPage" => "",
	"customErrorMessage" => "No CSRF kiddo!",
	"jsPath" => "../js/csrfprotector.js",
	"jsUrl" => "http://localhost/test/csrf/js/csrfprotector.js", 	// #todo - find a mechanism to make this relative to site url, plugin direc
	"tokenLength" => 12,
	"disabledJavascriptMessage" => "Kindly enable Javascript for WP CSRF Protector to work!",
	"verifyGetFor" => array()
);
