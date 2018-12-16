<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php
/**
 * Class and Function List:
 * Function list:
 * Classes list:
 */
require_once (APPPATH.'/libraries/phpqrcode/qrlib.php');
$qrurl = $url;

if ($snipurl != false) 
{
	$qrurl = $snipurl;
}
QRcode::png($qrurl);
