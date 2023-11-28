<?php
$arUrlRewrite=array (
  7 => 
  array (
    'CONDITION' => '#^/catalog/([0-9a-zA-Z\\%\\_\\-]+)/([0-9a-zA-Z\\%\\_\\-]+)/([0-9a-zA-Z\\%\\_\\-]+)/([0-9a-zA-Z\\%\\_\\-]+)/([0-9a-zA-Z\\%\\_\\-]+)/(.*)#',
    'RULE' => 'PROPROPROPARENT_SECTION_CODE=$1&PROPROPARENT_SECTION_CODE=$2&PROPARENT_SECTION_CODE=$3&PARENT_SECTION_CODE=$4&SECTION_CODE=$5',
    'ID' => '',
    'PATH' => '/catalog/list.php',
    'SORT' => 100,
  ),
  6 => 
  array (
    'CONDITION' => '#^/catalog/([0-9a-zA-Z\\%\\_\\-]+)/([0-9a-zA-Z\\%\\_\\-]+)/([0-9a-zA-Z\\%\\_\\-]+)/([0-9a-zA-Z\\%\\_\\-]+)/(.*)#',
    'RULE' => 'PROPROPARENT_SECTION_CODE=$1&PROPARENT_SECTION_CODE=$2&PARENT_SECTION_CODE=$3&SECTION_CODE=$4',
    'ID' => '',
    'PATH' => '/catalog/list.php',
    'SORT' => 100,
  ),
  5 =>
  array (
    'CONDITION' => '#^/catalog/([0-9a-zA-Z\\%\\_\\-]+)/([0-9a-zA-Z\\%\\_\\-]+)/([0-9a-zA-Z\\%\\_\\-]+)/(.*)#',
    'RULE' => 'PROPARENT_SECTION_CODE=$1&PARENT_SECTION_CODE=$2&SECTION_CODE=$3',
    'ID' => '',
    'PATH' => '/catalog/list.php',
    'SORT' => 100,
  ),
  4 => 
  array (
    'CONDITION' => '#^/catalog/([0-9a-zA-Z\\%\\_\\-]+)/([0-9a-zA-Z\\%\\_\\-]+)/(.*)#',
    'RULE' => 'PARENT_SECTION_CODE=$1&SECTION_CODE=$2',
    'ID' => '',
    'PATH' => '/catalog/list.php',
    'SORT' => 100,
  ),
  2 => 
  array (
    'CONDITION' => '#^/catalog/([0-9a-zA-Z-]+)/(.*)#',
    'RULE' => 'SECTION_CODE=$1',
    'PATH' => '/catalog/list.php',
    'SORT' => 100,
    'ID' => '',
  ),
  0 => 
  array (
    'CONDITION' => '#^\\/?\\/mobileapp/jn\\/(.*)\\/.*#',
    'RULE' => 'componentName=$1',
    'ID' => NULL,
    'PATH' => '/bitrix/services/mobileapp/jn.php',
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
