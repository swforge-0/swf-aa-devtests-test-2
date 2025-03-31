<?php

use Bitrix\Main\Page\Asset;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
	die();
}

IncludeTemplateLangFile(__FILE__);

Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/script.js');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title><?php $APPLICATION->ShowTitle(); ?></title>

	<link rel="shortcut icon" type="image/x-icon" href="<?php echo SITE_TEMPLATE_PATH; ?>/favicon.ico" />
	
	<?php $APPLICATION->ShowHead(); ?>
</head>
<body>
	<div id="panel"><?php $APPLICATION->ShowPanel(); ?></div>

	<div class="header-text"><?php echo GetMessage('T_TEST_HEADER_TEXT'); ?></div>
