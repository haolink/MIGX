<?php
$xpdo_meta_map['migxElement']= array (
  'package' => 'migx',
  'version' => '1.1',
  'table' => 'migx_elements',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'type' => '',
    'content' => '',
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
  ),
  'fieldMeta' => 
  array (
    'type' => 
    array (
      'dbtype' => 'nvarchar',
      'phptype' => 'string',
      'precision' => '100',
      'null' => false,
      'default' => '',
    ),
    'content' => 
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
      'null' => false,
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
      'null' => false,
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
      'null' => false,
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
      'null' => false,
    ),
    'publishedby' => 
    array (
      'dbtype' => 'int',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
  ),
  'aggregates' => 
  array (
    'Configs' => 
    array (
      'class' => 'migxConfigElement',
      'local' => 'id',
      'foreign' => 'element_id',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
  ),
);
