<?php
// created: 2017-07-27 12:52:36
$dictionary["shan_students_shan_courses_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'shan_students_shan_courses_1' => 
    array (
      'lhs_module' => 'shan_Students',
      'lhs_table' => 'shan_students',
      'lhs_key' => 'id',
      'rhs_module' => 'shan_Courses',
      'rhs_table' => 'shan_courses',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'shan_students_shan_courses_1_c',
      'join_key_lhs' => 'shan_students_shan_courses_1shan_students_ida',
      'join_key_rhs' => 'shan_students_shan_courses_1shan_courses_idb',
    ),
  ),
  'table' => 'shan_students_shan_courses_1_c',
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
    'shan_students_shan_courses_1shan_students_ida' => 
    array (
      'name' => 'shan_students_shan_courses_1shan_students_ida',
      'type' => 'id',
    ),
    'shan_students_shan_courses_1shan_courses_idb' => 
    array (
      'name' => 'shan_students_shan_courses_1shan_courses_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'shan_students_shan_courses_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'shan_students_shan_courses_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'shan_students_shan_courses_1shan_students_ida',
        1 => 'shan_students_shan_courses_1shan_courses_idb',
      ),
    ),
  ),
);