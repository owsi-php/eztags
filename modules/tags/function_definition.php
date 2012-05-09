<?php

$FunctionList = array();

$FunctionList['tag'] = array( 'name'            => 'tag',
                              'operation_types' => array( 'read' ),
                              'call_method'     => array( 'class'  => 'eZTagsFunctionCollection',
                                                          'method' => 'fetchTag' ),
                              'parameter_type'  => 'standard',
                              'parameters'      => array( array( 'name'     => 'tag_id',
                                                                 'type'     => 'integer',
                                                                 'required' => true ),
                                                          array( 'name'     => 'language',
                                                                 'type'     => 'string',
                                                                 'required' => false,
                                                                 'default'  => false ) ) );

$FunctionList['tags_by_keyword'] = array( 'name'            => 'tags_by_keyword',
                                          'operation_types' => array( 'read' ),
                                          'call_method'     => array( 'class'  => 'eZTagsFunctionCollection',
                                                                      'method' => 'fetchTagsByKeyword' ),
                                          'parameter_type'  => 'standard',
                                          'parameters'      => array( array( 'name'     => 'keyword',
                                                                             'type'     => 'string',
                                                                             'required' => true ),
                                                                      array( 'name'     => 'language',
                                                                             'type'     => 'string',
                                                                             'required' => false,
                                                                             'default'  => false ) ) );

$FunctionList['tag_by_remote_id'] = array( 'name'            => 'tag_by_remote_id',
                                           'operation_types' => array( 'read' ),
                                           'call_method'     => array( 'class'  => 'eZTagsFunctionCollection',
                                                                       'method' => 'fetchTagByRemoteID' ),
                                           'parameter_type'  => 'standard',
                                           'parameters'      => array( array( 'name'     => 'remote_id',
                                                                              'type'     => 'string',
                                                                              'required' => true ),
                                                                       array( 'name'     => 'language',
                                                                              'type'     => 'string',
                                                                              'required' => false,
                                                                              'default'  => false ) ) );

$FunctionList['list'] = array( 'name'            => 'list',
                               'operation_types' => array( 'read' ),
                               'call_method'     => array( 'class'  => 'eZTagsFunctionCollection',
                                                           'method' => 'fetchTagTree' ),
                               'parameter_type'  => 'standard',
                               'parameters'      => array( array( 'name'     => 'parent_tag_id',
                                                                  'type'     => 'integer',
                                                                  'required' => true ),
                                                           array( 'name'     => 'sort_by',
                                                                  'type'     => 'array',
                                                                  'required' => false,
                                                                  'default'  => array() ),
                                                           array( 'name'     => 'offset',
                                                                  'type'     => 'integer',
                                                                  'required' => false,
                                                                  'default'  => false ),
                                                           array( 'name'     => 'limit',
                                                                  'type'     => 'integer',
                                                                  'required' => false,
                                                                  'default'  => false ),
                                                           array( 'name'     => 'depth',
                                                                  'type'     => 'integer',
                                                                  'required' => false,
                                                                  'default'  => 1 ),
                                                           array( 'name'     => 'depth_operator',
                                                                  'type'     => 'string',
                                                                  'required' => false,
                                                                  'default'  => 'le' ),
                                                           array( 'name'     => 'include_synonyms',
                                                                  'type'     => 'bool',
                                                                  'required' => false,
                                                                  'default'  => false ),
                                                           array( 'name'     => 'language',
                                                                  'type'     => 'string',
                                                                  'required' => false,
                                                                  'default'  => false ) ) );

$FunctionList['list_count'] = array( 'name'            => 'list_count',
                                     'operation_types' => array( 'read' ),
                                     'call_method'     => array( 'class'  => 'eZTagsFunctionCollection',
                                                                 'method' => 'fetchTagTreeCount' ),
                                     'parameter_type'  => 'standard',
                                     'parameters'      => array( array( 'name'     => 'parent_tag_id',
                                                                        'type'     => 'integer',
                                                                        'required' => true ),
                                                                 array( 'name'     => 'depth',
                                                                        'type'     => 'integer',
                                                                        'required' => false,
                                                                        'default'  => 1 ),
                                                                 array( 'name'     => 'depth_operator',
                                                                        'type'     => 'string',
                                                                        'required' => false,
                                                                        'default'  => 'le' ),
                                                                 array( 'name'     => 'include_synonyms',
                                                                        'type'     => 'bool',
                                                                        'required' => false,
                                                                        'default'  => false ),
                                                                 array( 'name'     => 'language',
                                                                        'type'     => 'string',
                                                                        'required' => false,
                                                                        'default'  => false ) ) );

$FunctionList['tree'] = array( 'name'            => 'tree',
                               'operation_types' => array( 'read' ),
                               'call_method'     => array( 'class'  => 'eZTagsFunctionCollection',
                                                           'method' => 'fetchTagTree' ),
                               'parameter_type'  => 'standard',
                               'parameters'      => array( array( 'name'     => 'parent_tag_id',
                                                                  'type'     => 'integer',
                                                                  'required' => true ),
                                                           array( 'name'     => 'sort_by',
                                                                  'type'     => 'array',
                                                                  'required' => false,
                                                                  'default'  => array() ),
                                                           array( 'name'     => 'offset',
                                                                  'type'     => 'integer',
                                                                  'required' => false,
                                                                  'default'  => false ),
                                                           array( 'name'     => 'limit',
                                                                  'type'     => 'integer',
                                                                  'required' => false,
                                                                  'default'  => false ),
                                                           array( 'name'     => 'depth',
                                                                  'type'     => 'integer',
                                                                  'required' => false,
                                                                  'default'  => false ),
                                                           array( 'name'     => 'depth_operator',
                                                                  'type'     => 'string',
                                                                  'required' => false,
                                                                  'default'  => false ),
                                                           array( 'name'     => 'include_synonyms',
                                                                  'type'     => 'bool',
                                                                  'required' => false,
                                                                  'default'  => false ),
                                                           array( 'name'     => 'language',
                                                                  'type'     => 'string',
                                                                  'required' => false,
                                                                  'default'  => false ) ) );

$FunctionList['tree_count'] = array( 'name'            => 'tree_count',
                                     'operation_types' => array( 'read' ),
                                     'call_method'     => array( 'class'  => 'eZTagsFunctionCollection',
                                                                 'method' => 'fetchTagTreeCount' ),
                                     'parameter_type'  => 'standard',
                                     'parameters'      => array( array( 'name'     => 'parent_tag_id',
                                                                        'type'     => 'integer',
                                                                        'required' => true ),
                                                                 array( 'name'     => 'depth',
                                                                        'type'     => 'integer',
                                                                        'required' => false,
                                                                        'default'  => false ),
                                                                 array( 'name'     => 'depth_operator',
                                                                        'type'     => 'string',
                                                                        'required' => false,
                                                                        'default'  => false ),
                                                                 array( 'name'     => 'include_synonyms',
                                                                        'type'     => 'bool',
                                                                        'required' => false,
                                                                        'default'  => false ),
                                                                 array( 'name'     => 'language',
                                                                        'type'     => 'string',
                                                                        'required' => false,
                                                                        'default'  => false ) ) );

$FunctionList['latest_tags'] = array( 'name'            => 'latest_tags',
                                      'operation_types' => array( 'read' ),
                                      'call_method'     => array( 'class'  => 'eZTagsFunctionCollection',
                                                                  'method' => 'fetchLatestTags' ),
                                      'parameter_type'  => 'standard',
                                      'parameters'      => array( array( 'name'     => 'parent_tag_id',
                                                                         'type'     => 'integer',
                                                                         'required' => false,
                                                                         'default'  => false ),
                                                                  array( 'name'     => 'limit',
                                                                         'type'     => 'integer',
                                                                         'required' => false,
                                                                         'default'  => 0 ),
                                                                  array( 'name'     => 'language',
                                                                         'type'     => 'string',
                                                                         'required' => false,
                                                                         'default'  => false ) ) );

?>
