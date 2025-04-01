<?php

require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php';

$APPLICATION->SetTitle('Test');
?>
<?php $APPLICATION->IncludeComponent('tai:main.page', 'test', [
	'CACHE_TYPE' => 'A',
	'CACHE_TIME' => '36000000',
	],
false); ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'; ?>