<?php
$xpdo_meta_map['ContentsyncProfile']= array (
  'package' => 'contentsync',
  'version' => '1.1',
  'table' => 'contentsync_profile',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'name' => NULL,
    'description' => NULL,
    'type' => 'MODX',
    'sync_content' => 1,
    'sync_field' => 'id',
    'show_import' => 1,
    'show_export' => 1,
    'export_resources' => 'All',
    'export_resources_list' => NULL,
    'export_allow_override' => 1,
    'import_assets' => 1,
    'site_url' => NULL,
    'media_source' => NULL,
    'assets_sub_dirs' => 1,
    'assets_sub_dirs_map' => NULL,
    'server_offset' => NULL,
    'default_template' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  'fieldMeta' => 
  array (
    'name' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '64',
      'phptype' => 'string',
      'null' => false,
      'index' => 'index',
    ),
    'description' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'string',
      'null' => true,
    ),
    'type' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '16',
      'phptype' => 'string',
      'null' => true,
      'default' => 'MODX',
    ),
    'sync_content' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '1',
      'phptype' => 'integer',
      'null' => true,
      'default' => 1,
    ),
    'sync_field' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '64',
      'phptype' => 'string',
      'null' => true,
      'default' => 'id',
    ),
    'show_import' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '1',
      'phptype' => 'integer',
      'null' => true,
      'default' => 1,
    ),
    'show_export' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '1',
      'phptype' => 'integer',
      'null' => true,
      'default' => 1,
    ),
    'export_resources' => 
    array (
      'dbtype' => 'set',
      'precision' => '\'All\',\'Select\'',
      'phptype' => 'string',
      'null' => true,
      'default' => 'All',
    ),
    'export_resources_list' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'string',
      'null' => true,
    ),
    'export_allow_override' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '1',
      'phptype' => 'integer',
      'null' => true,
      'default' => 1,
    ),
    'import_assets' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '1',
      'phptype' => 'integer',
      'null' => true,
      'default' => 1,
    ),
    'site_url' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => true,
    ),
    'media_source' => 
    array (
      'dbtype' => 'int',
      'precision' => '11',
      'phptype' => 'integer',
      'null' => true,
    ),
    'assets_sub_dirs' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '1',
      'phptype' => 'integer',
      'null' => true,
      'default' => 1,
    ),
    'assets_sub_dirs_map' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'string',
      'null' => true,
    ),
    'server_offset' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '4',
      'phptype' => 'string',
      'null' => true,
    ),
    'default_template' => 
    array (
      'dbtype' => 'int',
      'precision' => '11',
      'phptype' => 'integer',
      'null' => true,
    ),
    'created_at' => 
    array (
      'dbtype' => 'datetime',
      'phptype' => 'datetime',
      'null' => true,
    ),
    'updated_at' => 
    array (
      'dbtype' => 'datetime',
      'phptype' => 'datetime',
      'null' => true,
    ),
  ),
  'indexes' => 
  array (
    'Name' => 
    array (
      'alias' => 'Name',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'name' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
        'type' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => true,
        ),
      ),
    ),
  ),
  'composites' => 
  array (
    'TemplateMaps' => 
    array (
      'class' => 'ContentsyncTemplateMaps',
      'local' => 'id',
      'foreign' => 'profile_id',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
    'History' => 
    array (
      'class' => 'ContentsyncHistory',
      'local' => 'id',
      'foreign' => 'history_id',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
  ),
);
