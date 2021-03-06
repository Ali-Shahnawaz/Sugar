<?php
// created: 2017-07-26 19:30:16
$dictionary["shan_Courses"]["fields"]["shan_students_shan_courses"] = array (
  'name' => 'shan_students_shan_courses',
  'type' => 'link',
  'relationship' => 'shan_students_shan_courses',
  'source' => 'non-db',
  'module' => 'shan_Students',
  'bean_name' => 'shan_Students',
  'vname' => 'LBL_SHAN_STUDENTS_SHAN_COURSES_FROM_SHAN_STUDENTS_TITLE',
  'id_name' => 'shan_students_shan_coursesshan_students_ida',
);
$dictionary["shan_Courses"]["fields"]["shan_students_shan_courses_name"] = array (
  'name' => 'shan_students_shan_courses_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SHAN_STUDENTS_SHAN_COURSES_FROM_SHAN_STUDENTS_TITLE',
  'save' => true,
  'id_name' => 'shan_students_shan_coursesshan_students_ida',
  'link' => 'shan_students_shan_courses',
  'table' => 'shan_students',
  'module' => 'shan_Students',
  'rname' => 'name',
);
$dictionary["shan_Courses"]["fields"]["shan_students_shan_coursesshan_students_ida"] = array (
  'name' => 'shan_students_shan_coursesshan_students_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_SHAN_STUDENTS_SHAN_COURSES_FROM_SHAN_STUDENTS_TITLE_ID',
  'id_name' => 'shan_students_shan_coursesshan_students_ida',
  'link' => 'shan_students_shan_courses',
  'table' => 'shan_students',
  'module' => 'shan_Students',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
