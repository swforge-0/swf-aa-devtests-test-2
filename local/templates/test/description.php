<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

IncludeTemplateLangFile(__FILE__);

$arTemplate = [
    'NAME' => GetMessage('T_TEST_TEMPLATE_NAME'),
    'DESCRIPTION' => GetMessage('T_TEST_TEMPLATE_DESC')
];
