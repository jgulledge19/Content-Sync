<?php
$xpdo_meta_map['ContentsyncResources']= array (
  'package' => 'contentsync',
  'version' => '1.1',
  'table' => 'contentsync_resources',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'history_id' => NULL,
    'local_resource_id' => NULL,
    'remote_resource_id' => NULL,
    'wordpress_guid' => NULL,
    'reprocess' => 0,
    'reprocess_fields' => NULL,
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
    'local_resource_id' => 
    array (
      'dbtype' => 'int',
      'precision' => '11',
      'phptype' => 'integer',
      'null' => true,
    ),
    'remote_resource_id' => 
    array (
      'dbtype' => 'int',
      'precision' => '11',
      'phptype' => 'integer',
      'null' => true,
    ),
    'wordpress_guid' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
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
    'reprocess_fields' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'string',
      'null' => true,
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
        'remote_resource_id' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => true,
        ),
        'wordpress_guid' => 
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
