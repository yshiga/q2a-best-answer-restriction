<?php

/*
	Plugin Name: Best Answer Restriction
	Plugin URI:
	Plugin Description: A Best Answer selection only once.
	Plugin Version: 1.0
	Plugin Date: 2016-07-27
	Plugin Author: 38qa.net
	Plugin Author URI: http://38qa.net/
	Plugin License: GPLv2
	Plugin Minimum Question2Answer Version: 1.7
	Plugin Update Check URI:
*/

if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
	header('Location: ../../');
	exit;
}

// languages
qa_register_plugin_phrases('qa-ba-restriction-lang-*.php', 'qa_ba_restriction_lang');
// layer
qa_register_plugin_layer('qa-ba-restriction-layer.php','Best Answer Restriction Layer');
