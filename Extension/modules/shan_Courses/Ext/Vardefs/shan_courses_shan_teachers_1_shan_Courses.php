<?php
// created: 2017-07-27 12:43:26
$dictionary["shan_Courses"]["fields"]["shan_courses_shan_teachers_1"] = array (
  'name' => 'shan_courses_shan_teachers_1',
  'type' => 'link',
  'relationship' => 'shan_courses_shan_teachers_1',
  'source' => 'non-db',
  'module' => 'shan_Teachers',
  'bean_name' => 'shan_Teachers',
  'vname' => 'LBL_SHAN_COURSES_SHAN_TEACHERS_1_FROM_SHAN_TEACHERS_TITLE',
  'id_name' => 'shan_courses_shan_teachers_1shan_teachers_idb',
);
$dictionary["shan_Courses"]["fields"]["shan_courses_shan_teachers_1_name"] = array (
  'name' => 'shan_courses_shan_teachers_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SHAN_COURSES_SHAN_TEACHERS_1_FROM_SHAN_TEACHERS_TITLE',
  'save' => true,
  'id_name' => 'shan_courses_shan_teachers_1shan_teachers_idb',
  'link' => 'shan_courses_shan_teachers_1',
  'table' => 'shan_teachers',
  'module' => 'shan_Teachers',
  'rname' => 'name',
);
$dictionary["shan_Courses"]["fields"]["shan_courses_shan_teachers_1shan_teachers_idb"] = array (
  'name' => 'shan_courses_shan_teachers_1shan_teachers_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_SHAN_COURSES_SHAN_TEACHERS_1_FROM_SHAN_TEACHERS_TITLE_ID',
  'id_name' => 'shan_courses_shan_teachers_1shan_teachers_idb',
  'link' => 'shan_courses_shan_teachers_1',
  'table' => 'shan_teachers',
  'module' => 'shan_Teachers',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
