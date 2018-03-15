<?php
$xpdo_meta_map['migxConfig']= array (
  'package' => 'migx',
  'version' => '1.1',
  'table' => 'migx_configs',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'name' => '',
    'formtabs' => '',
    'contextmenus' => '',
    'actionbuttons' => '',
    'columnbuttons' => '',
    'filters' => '',
    'extended' => '',
    'columns' => '',
    'createdby' => 0,
    'createdon' => NULL,
    'editedby' => 0,
    'editedon' => NULL,
    'deleted' => 0,
    'deletedon' => NULL,
    'deletedby' => 0,
    'published' => 0,
    'publishedon' => NULL,
    'publishedby' => 0,
    'category' => '',
  ),
  'fieldMeta' => 
  array (
    'name' => 
    array (
      'dbtype' => 'nvarchar',
      'phptype' => 'string',
      'precision' => '100',
      'null' => false,
      'default' => '',
    ),
    'formtabs' => 
    array (
      'dbtype' => 'nvarchar',
      'precision' => 'max',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'contextmenus' => 
    array (
      'dbtype' => 'nvarchar',
      'precision' => 'max',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'actionbuttons' => 
    array (
      'dbtype' => 'nvarchar',
      'precision' => 'max',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'columnbuttons' => 
    array (
      'dbtype' => 'nvarchar',
      'precision' => 'max',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'filters' => 
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
    'columns' => 
    array (
      'dbtype' => 'nvarchar',
      'precision' => 'max',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'createdby' => 
    array (
      'dbtype' => 'int',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'createdon' => 
    array (
      'dbtype' => 'datetime',
      'phptype' => 'datetime',
      'null' => true,
    ),
    'editedby' => 
    array (
      'dbtype' => 'int',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'editedon' => 
    array (
      'dbtype' => 'datetime',
      'phptype' => 'datetime',
      'null' => true,
    ),
    'deleted' => 
    array (
      'dbtype' => 'bit',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'deletedon' => 
    array (
      'dbtype' => 'datetime',
      'phptype' => 'datetime',
      'null' => true,
    ),
    'deletedby' => 
    array (
      'dbtype' => 'int',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'published' => 
    array (
      'dbtype' => 'bit',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'publishedon' => 
    array (
      'dbtype' => 'datetime',
      'phptype' => 'datetime',
      'null' => true,
    ),
    'publishedby' => 
    array (
      'dbtype' => 'int',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'category' => 
    array (
      'dbtype' => 'nvarchar',
      'phptype' => 'string',
      'precision' => '255',
      'null' => false,
      'default' => '',
      'index' => 'index',
    ),
  ),
  'composites' => 
  array (
    'Formtabs' => 
    array (
      'class' => 'migxFormtab',
      'local' => 'id',
      'foreign' => 'config_id',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
  ),
  'aggregates' => 
  array (
    'ConfigElements' => 
    array (
      'class' => 'migxConfigElement',
      'local' => 'id',
      'foreign' => 'config_id',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
  ),
);