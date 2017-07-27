<?php
// created: 2017-07-26 19:30:16
$dictionary["shan_Students"]["fields"]["shan_students_shan_courses"] = array (
  'name' => 'shan_students_shan_courses',
  'type' => 'link',
  'relationship' => 'shan_students_shan_courses',
  'source' => 'non-db',
  'module' => 'shan_Courses',
  'bean_name' => 'shan_Courses',
  'vname' => 'LBL_SHAN_STUDENTS_SHAN_COURSES_FROM_SHAN_COURSES_TITLE',
  'id_name' => 'shan_students_shan_coursesshan_courses_idb',
);
$dictionary["shan_Students"]["fields"]["shan_students_shan_courses_name"] = array (
  'name' => 'shan_students_shan_courses_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SHAN_STUDENTS_SHAN_COURSES_FROM_SHAN_COURSES_TITLE',
  'save' => true,
  'id_name' => 'shan_students_shan_coursesshan_courses_idb',
  'link' => 'shan_students_shan_courses',
  'table' => 'shan_courses',
  'module' => 'shan_Courses',
  'rname' => 'name',
);
$dictionary["shan_Students"]["fields"]["shan_students_shan_coursesshan_courses_idb"] = array (
  'name' => 'shan_students_shan_coursesshan_courses_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_SHAN_STUDENTS_SHAN_COURSES_FROM_SHAN_COURSES_TITLE_ID',
  'id_name' => 'shan_students_shan_coursesshan_courses_idb',
  'link' => 'shan_students_shan_courses',
  'table' => 'shan_courses',
  'module' => 'shan_Courses',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
