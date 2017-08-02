<?php
// created: 2017-07-27 12:43:26
$dictionary["shan_Teachers"]["fields"]["shan_courses_shan_teachers_1"] = array (
  'name' => 'shan_courses_shan_teachers_1',
  'type' => 'link',
  'relationship' => 'shan_courses_shan_teachers_1',
  'source' => 'non-db',
  'module' => 'shan_Courses',
  'bean_name' => 'shan_Courses',
  'vname' => 'LBL_SHAN_COURSES_SHAN_TEACHERS_1_FROM_SHAN_COURSES_TITLE',
  'id_name' => 'shan_courses_shan_teachers_1shan_courses_ida',
);
$dictionary["shan_Teachers"]["fields"]["shan_courses_shan_teachers_1_name"] = array (
  'name' => 'shan_courses_shan_teachers_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SHAN_COURSES_SHAN_TEACHERS_1_FROM_SHAN_COURSES_TITLE',
  'save' => true,
  'id_name' => 'shan_courses_shan_teachers_1shan_courses_ida',
  'link' => 'shan_courses_shan_teachers_1',
  'table' => 'shan_courses',
  'module' => 'shan_Courses',
  'rname' => 'name',
);
$dictionary["shan_Teachers"]["fields"]["shan_courses_shan_teachers_1shan_courses_ida"] = array (
  'name' => 'shan_courses_shan_teachers_1shan_courses_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_SHAN_COURSES_SHAN_TEACHERS_1_FROM_SHAN_COURSES_TITLE_ID',
  'id_name' => 'shan_courses_shan_teachers_1shan_courses_ida',
  'link' => 'shan_courses_shan_teachers_1',
  'table' => 'shan_courses',
  'module' => 'shan_Courses',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
