<?php
$arUrlRewrite=array (
  0 => 
  array (
    'CONDITION' => '#^\\/?\\/mobileapp/jn\\/(.*)\\/.*#',
    'RULE' => 'componentName=$1',
    'ID' => NULL,
    'PATH' => '/bitrix/services/mobileapp/jn.php',
    'SORT' => 100,
  ),
  2 => 
  array (
    'CONDITION' => '#^/catalog/([0-9a-zA-Z-]+)/.*#',
    'RULE' => 'SECTION_CODE=$1',
    'PATH' => '/catalog/list.php',
    'SORT' => 100,
  ),
  3 => 
  array (
    'CONDITION' => '#^/items/([0-9a-zA-Z-]+)/.*#',
    'RULE' => 'ELEMENT_CODE=$1',
    'PATH' => '/catalog/detail.php',
    'SORT' => 100,
  ),
  1 =>
  array (
    'CONDITION' => '#^/rest/#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/bitrix/services/rest/index.php',
    'SORT' => 100,
  ),
);
