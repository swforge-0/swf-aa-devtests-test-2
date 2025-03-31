<?php

require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php';

$APPLICATION->SetTitle('Форма');
?>

<?php $APPLICATION->IncludeComponent('tai:form.ajax', 'test', [
	'CACHE_TYPE' => 'A',
	'CACHE_TIME' => '36000000',
	],
	false
); ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'; ?>