<?php
// created: 2017-07-26 19:30:16
$dictionary["shan_courses_ali_students"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'shan_courses_ali_students' => 
    array (
      'lhs_module' => 'shan_Courses',
      'lhs_table' => 'shan_courses',
      'lhs_key' => 'id',
      'rhs_module' => 'ALI_Students',
      'rhs_table' => 'ali_students',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'shan_courses_ali_students_c',
      'join_key_lhs' => 'shan_courses_ali_studentsshan_courses_ida',
      'join_key_rhs' => 'shan_courses_ali_studentsali_students_idb',
    ),
  ),
  'table' => 'shan_courses_ali_students_c',
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
    'shan_courses_ali_studentsshan_courses_ida' => 
    array (
      'name' => 'shan_courses_ali_studentsshan_courses_ida',
      'type' => 'id',
    ),
    'shan_courses_ali_studentsali_students_idb' => 
    array (
      'name' => 'shan_courses_ali_studentsali_students_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'shan_courses_ali_studentsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'shan_courses_ali_students_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'shan_courses_ali_studentsshan_courses_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'shan_courses_ali_students_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'shan_courses_ali_studentsali_students_idb',
      ),
    ),
  ),
);