<?php

require(dirname(__FILE__) . '/' . 'smarty.config.php');

$smarty->assign('header', array('root' => '.'));

$smarty->display('browse.tpl');

?>