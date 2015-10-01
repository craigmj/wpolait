<?php
/*
Plugin Name: WPOLait
Plugin URI: http://www.github.com/craigmj/wpolait
Description: Plugin that automatically does JSON RPC for Wordpress plugins.
Version: 0.1.0
Author: Lateral Alternative CC
Author URI: http://www.lateral.co.za
License: AllRightsReserved to Lateral Alternative CC
*/

require_once('class.PhpolaitLibrary.php');
require_once('class.PhpolaitClass.php');
require_once('class.PhpolaitMethod.php');
require_once('class.PhpolaitParameter.php');
require_once('class.PhpolaitJSLibrary.php');
require_once('class.PhpolaitJSClass.php');
require_once('class.PhpolaitJSMethod.php');
require_once('class.PhpolaitJSParameter.php');

require_once('class.PhpolaitES6.php');

require_once("class.JavascriptPacker.php");

require_once('class.Phpolait.php');

require_once('class.WPOLait.php');

// Include the WPOLaitTest.php to see WPOLait in action.
// require_once('class.WPOLaitTest.php');