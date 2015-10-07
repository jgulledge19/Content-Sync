<?php
$xpdo_meta_map['ContentsyncTemplateMaps']= array (
  'package' => 'contentsync',
  'version' => '1.1',
  'table' => 'contentsync_template_maps',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'profile_id' => NULL,
    'local_template' => NULL,
    'create_template' => NULL,
    'import_template_name' => NULL,
    'media_source' => 0,
    'default_published' => 1,
    'default_searchable' => 1,
    'default_hidemenu' => 1,
    'default_parent' => NULL,
    'force_default_create' => 0,
    'force_default_update' => 0,
    'wordpress_post_type' => NULL,
    'wordpress_build_hierarchy' => 1,
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
    'local_template' => 
    array (
      'dbtype' => 'int',
      'precision' => '11',
      'phptype' => 'integer',
      'null' => true,
    ),
    'create_template' => 
    array (
      'dbtype' => 'int',
      'precision' => '11',
      'phptype' => 'integer',
      'null' => true,
    ),
    'import_template_name' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '128',
      'phptype' => 'string',
      'null' => true,
    ),
    'media_source' => 
    array (
      'dbtype' => 'int',
      'precision' => '11',
      'phptype' => 'integer',
      'null' => true,
      'default' => 0,
    ),
    'default_published' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '1',
      'phptype' => 'integer',
      'null' => true,
      'default' => 1,
    ),
    'default_searchable' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '1',
      'phptype' => 'integer',
      'null' => true,
      'default' => 1,
    ),
    'default_hidemenu' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '1',
      'phptype' => 'integer',
      'null' => true,
      'default' => 1,
    ),
    'default_parent' => 
    array (
      'dbtype' => 'int',
      'precision' => '11',
      'phptype' => 'integer',
      'null' => true,
    ),
    'force_default_create' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '1',
      'phptype' => 'integer',
      'null' => true,
      'default' => 0,
    ),
    'force_default_update' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '1',
      'phptype' => 'integer',
      'null' => true,
      'default' => 0,
    ),
    'wordpress_post_type' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '128',
      'phptype' => 'string',
      'null' => true,
    ),
    'wordpress_build_hierarchy' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '1',
      'phptype' => 'integer',
      'null' => true,
      'default' => 1,
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
        'profile_id' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
        'create_template' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => true,
        ),
        'import_template_name' => 
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
