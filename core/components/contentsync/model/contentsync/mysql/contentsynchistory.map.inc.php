<?php
$xpdo_meta_map['ContentsyncHistory']= array (
  'package' => 'contentsync',
  'version' => '1.1',
  'table' => 'contentsync_history',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'profile_id' => NULL,
    'action' => NULL,
    'file_type' => 'xml',
    'count_resources' => NULL,
    'count_templates' => NULL,
    'count_tvs' => NULL,
    'complete' => 0,
    'started_at' => NULL,
    'finished_at' => NULL,
    'log' => NULL,
  ),
  'fieldMeta' => 
  array (
    'profile_id' => 
    array (
      'dbtype' => 'int',
      'precision' => '11',
      'phptype' => 'integer',
      'null' => false,
      'index' => 'index',
    ),
    'action' => 
    array (
      'dbtype' => 'set',
      'precision' => '\'import\',\'export\'',
      'phptype' => 'string',
      'null' => true,
    ),
    'file_type' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '4',
      'phptype' => 'string',
      'null' => true,
      'default' => 'xml',
    ),
    'count_resources' => 
    array (
      'dbtype' => 'int',
      'precision' => '11',
      'phptype' => 'integer',
      'null' => true,
    ),
    'count_templates' => 
    array (
      'dbtype' => 'int',
      'precision' => '11',
      'phptype' => 'integer',
      'null' => true,
    ),
    'count_tvs' => 
    array (
      'dbtype' => 'int',
      'precision' => '11',
      'phptype' => 'integer',
      'null' => true,
    ),
    'complete' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '1',
      'phptype' => 'integer',
      'null' => true,
      'default' => 0,
    ),
    'started_at' => 
    array (
      'dbtype' => 'datetime',
      'phptype' => 'datetime',
      'null' => true,
    ),
    'finished_at' => 
    array (
      'dbtype' => 'datetime',
      'phptype' => 'datetime',
      'null' => true,
    ),
    'log' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'string',
      'null' => true,
    ),
  ),
  'indexes' => 
  array (
    'Join' => 
    array (
      'alias' => 'Join',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'profile_id' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
  ),
  'composites' => 
  array (
    'Resources' => 
    array (
      'class' => 'ContentsyncResources',
      'local' => 'id',
      'foreign' => 'history_id',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
    'Templates' => 
    array (
      'class' => 'ContentsyncTemplates',
      'local' => 'id',
      'foreign' => 'history_id',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
    'Tvs' => 
    array (
      'class' => 'ContentsyncTvs',
      'local' => 'id',
      'foreign' => 'history_id',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
  ),
  'aggregates' => 
  array (
    'Profile' => 
    array (
      'class' => 'ContentsyncProfile',
      'local' => 'profile_id',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
  ),
);
