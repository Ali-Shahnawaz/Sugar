<?php
// created: 2017-07-26 19:30:16
$dictionary["ALI_Students"]["fields"]["shan_courses_ali_students"] = array (
  'name' => 'shan_courses_ali_students',
  'type' => 'link',
  'relationship' => 'shan_courses_ali_students',
  'source' => 'non-db',
  'module' => 'shan_Courses',
  'bean_name' => 'shan_Courses',
  'side' => 'right',
  'vname' => 'LBL_SHAN_COURSES_ALI_STUDENTS_FROM_ALI_STUDENTS_TITLE',
  'id_name' => 'shan_courses_ali_studentsshan_courses_ida',
  'link-type' => 'one',
);
$dictionary["ALI_Students"]["fields"]["shan_courses_ali_students_name"] = array (
  'name' => 'shan_courses_ali_students_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SHAN_COURSES_ALI_STUDENTS_FROM_SHAN_COURSES_TITLE',
  'save' => true,
  'id_name' => 'shan_courses_ali_studentsshan_courses_ida',
  'link' => 'shan_courses_ali_students',
  'table' => 'shan_courses',
  'module' => 'shan_Courses',
  'rname' => 'name',
);
$dictionary["ALI_Students"]["fields"]["shan_courses_ali_studentsshan_courses_ida"] = array (
  'name' => 'shan_courses_ali_studentsshan_courses_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_SHAN_COURSES_ALI_STUDENTS_FROM_ALI_STUDENTS_TITLE_ID',
  'id_name' => 'shan_courses_ali_studentsshan_courses_ida',
  'link' => 'shan_courses_ali_students',
  'table' => 'shan_courses',
  'module' => 'shan_Courses',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
