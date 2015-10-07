<?php
$xpdo_meta_map['ContentsyncTemplates']= array (
  'package' => 'contentsync',
  'version' => '1.1',
  'table' => 'contentsync_templates',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'history_id' => NULL,
    'local_template_id' => NULL,
    'remote_template_id' => NULL,
    'remote_template_name' => NULL,
    'reprocess' => 0,
    'log' => NULL,
    'synced_at' => NULL,
  ),
  'fieldMeta' => 
  array (
    'history_id' => 
    array (
      'dbtype' => 'int',
      'precision' => '11',
      'phptype' => 'integer',
      'null' => false,
      'index' => 'index',
    ),
    'local_template_id' => 
    array (
      'dbtype' => 'int',
      'precision' => '11',
      'phptype' => 'integer',
      'null' => true,
    ),
    'remote_template_id' => 
    array (
      'dbtype' => 'int',
      'precision' => '11',
      'phptype' => 'integer',
      'null' => true,
    ),
    'remote_template_name' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '50',
      'phptype' => 'string',
      'null' => true,
    ),
    'reprocess' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '1',
      'phptype' => 'integer',
      'null' => true,
      'default' => 0,
    ),
    'log' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'string',
      'null' => true,
    ),
    'synced_at' => 
    array (
      'dbtype' => 'datetime',
      'phptype' => 'datetime',
      'null' => true,
    ),
  ),
  'indexes' => 
  array (
    'Search' => 
    array (
      'alias' => 'Search',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'history_id' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
        'remote_template_id' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => true,
        ),
        'remote_template_name' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => true,
        ),
      ),
    ),
  ),
  'aggregates' => 
  array (
    'History' => 
    array (
      'class' => 'ContentsyncHistory',
      'local' => 'history_id',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
  ),
);
