<?php
// created: 2017-07-27 12:43:26
$dictionary["shan_courses_shan_teachers_1"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'shan_courses_shan_teachers_1' => 
    array (
      'lhs_module' => 'shan_Courses',
      'lhs_table' => 'shan_courses',
      'lhs_key' => 'id',
      'rhs_module' => 'shan_Teachers',
      'rhs_table' => 'shan_teachers',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'shan_courses_shan_teachers_1_c',
      'join_key_lhs' => 'shan_courses_shan_teachers_1shan_courses_ida',
      'join_key_rhs' => 'shan_courses_shan_teachers_1shan_teachers_idb',
    ),
  ),
  'table' => 'shan_courses_shan_teachers_1_c',
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'type' => 'id',
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'default' => 0,
    ),
    'shan_courses_shan_teachers_1shan_courses_ida' => 
    array (
      'name' => 'shan_courses_shan_teachers_1shan_courses_ida',
      'type' => 'id',
    ),
    'shan_courses_shan_teachers_1shan_teachers_idb' => 
    array (
      'name' => 'shan_courses_shan_teachers_1shan_teachers_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'shan_courses_shan_teachers_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'shan_courses_shan_teachers_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'shan_courses_shan_teachers_1shan_courses_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'shan_courses_shan_teachers_1_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'shan_courses_shan_teachers_1shan_teachers_idb',
      ),
    ),
  ),
);