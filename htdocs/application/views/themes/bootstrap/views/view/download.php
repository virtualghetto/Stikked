<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php
header('Content-type: text/plain');
header('Content-disposition: attachment');
//todo: nice filename header('Content-disposition: attachment;filename=' . $title . '.' . $lang_code);
echo htmlspecialchars_decode($raw);
