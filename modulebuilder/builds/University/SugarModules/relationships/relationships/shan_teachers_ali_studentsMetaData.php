<?php
// created: 2017-07-26 11:48:15
$dictionary["shan_teachers_ali_students"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'shan_teachers_ali_students' => 
    array (
      'lhs_module' => 'shan_Teachers',
      'lhs_table' => 'shan_teachers',
      'lhs_key' => 'id',
      'rhs_module' => 'ALI_Students',
      'rhs_table' => 'ali_students',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'shan_teachers_ali_students_c',
      'join_key_lhs' => 'shan_teachers_ali_studentsshan_teachers_ida',
      'join_key_rhs' => 'shan_teachers_ali_studentsali_students_idb',
    ),
  ),
  'table' => 'shan_teachers_ali_students_c',
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
    'shan_teachers_ali_studentsshan_teachers_ida' => 
    array (
      'name' => 'shan_teachers_ali_studentsshan_teachers_ida',
      'type' => 'id',
    ),
    'shan_teachers_ali_studentsali_students_idb' => 
    array (
      'name' => 'shan_teachers_ali_studentsali_students_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'shan_teachers_ali_studentsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'shan_teachers_ali_students_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'shan_teachers_ali_studentsshan_teachers_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'shan_teachers_ali_students_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'shan_teachers_ali_studentsali_students_idb',
      ),
    ),
  ),
);