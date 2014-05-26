<?php

 /**
 * Example Application

 * @package Example-application
 */

require 'libs/smarty/Smarty.class.php';

$tpl = new Smarty;

//$smarty->force_compile = true;
$tpl->debugging = false;
$tpl->caching = true;
$tpl->cache_lifetime = 120;