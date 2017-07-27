<?php
// created: 2017-07-27 12:09:44
$dictionary["shan_students_shan_teachers_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'shan_students_shan_teachers_1' => 
    array (
      'lhs_module' => 'shan_Students',
      'lhs_table' => 'shan_students',
      'lhs_key' => 'id',
      'rhs_module' => 'shan_Teachers',
      'rhs_table' => 'shan_teachers',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'shan_students_shan_teachers_1_c',
      'join_key_lhs' => 'shan_students_shan_teachers_1shan_students_ida',
      'join_key_rhs' => 'shan_students_shan_teachers_1shan_teachers_idb',
    ),
  ),
  'table' => 'shan_students_shan_teachers_1_c',
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
    'shan_students_shan_teachers_1shan_students_ida' => 
    array (
      'name' => 'shan_students_shan_teachers_1shan_students_ida',
      'type' => 'id',
    ),
    'shan_students_shan_teachers_1shan_teachers_idb' => 
    array (
      'name' => 'shan_students_shan_teachers_1shan_teachers_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'shan_students_shan_teachers_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'shan_students_shan_teachers_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'shan_students_shan_teachers_1shan_students_ida',
        1 => 'shan_students_shan_teachers_1shan_teachers_idb',
      ),
    ),
  ),
);