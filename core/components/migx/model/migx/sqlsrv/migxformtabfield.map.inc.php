<?php
$xpdo_meta_map['migxFormtabField']= array (
  'package' => 'migx',
  'version' => '1.1',
  'table' => 'migx_formtab_fields',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'config_id' => 0,
    'formtab_id' => 0,
    'field' => '',
    'caption' => '',
    'description' => '',
    'pos' => 0,
    'description_is_code' => 0,
    'inputTV' => '',
    'inputTVtype' => '',
    'validation' => '',
    'configs' => '',
    'restrictive_condition' => '',
    'display' => '',
    'sourceFrom' => '',
    'sources' => '',
    'inputOptionValues' => '',
    'default' => '',
    'extended' => '',
  ),
  'fieldMeta' => 
  array (
    'config_id' => 
    array (
      'dbtype' => 'int',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
      'index' => 'index',
    ),
    'formtab_id' => 
    array (
      'dbtype' => 'int',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
      'index' => 'index',
    ),
    'field' => 
    array (
      'dbtype' => 'nvarchar',
      'phptype' => 'string',
      'precision' => '255',
      'null' => false,
      'default' => '',
      'index' => 'index',
    ),
    'caption' => 
    array (
      'dbtype' => 'nvarchar',
      'phptype' => 'string',
      'precision' => '255',
      'null' => false,
      'default' => '',
    ),
    'description' => 
    array (
      'dbtype' => 'nvarchar',
      'precision' => 'max',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'pos' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
      'index' => 'index',
    ),
    'description_is_code' => 
    array (
      'dbtype' => 'bit',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'inputTV' => 
    array (
      'dbtype' => 'nvarchar',
      'phptype' => 'string',
      'precision' => '255',
      'null' => false,
      'default' => '',
    ),
    'inputTVtype' => 
    array (
      'dbtype' => 'nvarchar',
      'phptype' => 'string',
      'precision' => '255',
      'null' => false,
      'default' => '',
    ),
    'validation' => 
    array (
      'dbtype' => 'nvarchar',
      'precision' => 'max',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'configs' => 
    array (
      'dbtype' => 'nvarchar',
      'phptype' => 'string',
      'precision' => '255',
      'null' => false,
      'default' => '',
    ),
    'restrictive_condition' => 
    array (
      'dbtype' => 'nvarchar',
      'precision' => 'max',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'display' => 
    array (
      'dbtype' => 'nvarchar',
      'phptype' => 'string',
      'precision' => '255',
      'null' => false,
      'default' => '',
    ),
    'sourceFrom' => 
    array (
      'dbtype' => 'nvarchar',
      'phptype' => 'string',
      'precision' => '255',
      'null' => false,
      'default' => '',
    ),
    'sources' => 
    array (
      'dbtype' => 'nvarchar',
      'phptype' => 'string',
      'precision' => '255',
      'null' => false,
      'default' => '',
    ),
    'inputOptionValues' => 
    array (
      'dbtype' => 'nvarchar',
      'precision' => 'max',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'default' => 
    array (
      'dbtype' => 'nvarchar',
      'precision' => 'max',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'extended' => 
    array (
      'dbtype' => 'nvarchar',
      'precision' => 'max',
      'phptype' => 'json',
      'null' => false,
      'default' => '',
    ),
  ),
  'aggregates' => 
  array (
    'Config' => 
    array (
      'class' => 'migxConfig',
      'local' => 'config_id',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
    'Formtab' => 
    array (
      'class' => 'migxFormtab',
      'local' => 'formtab_id',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
  ),
);
