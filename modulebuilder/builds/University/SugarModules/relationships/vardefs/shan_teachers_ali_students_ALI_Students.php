<?php
// created: 2017-07-26 11:48:15
$dictionary["ALI_Students"]["fields"]["shan_teachers_ali_students"] = array (
  'name' => 'shan_teachers_ali_students',
  'type' => 'link',
  'relationship' => 'shan_teachers_ali_students',
  'source' => 'non-db',
  'module' => 'shan_Teachers',
  'bean_name' => 'shan_Teachers',
  'side' => 'right',
  'vname' => 'LBL_SHAN_TEACHERS_ALI_STUDENTS_FROM_ALI_STUDENTS_TITLE',
  'id_name' => 'shan_teachers_ali_studentsshan_teachers_ida',
  'link-type' => 'one',
);
$dictionary["ALI_Students"]["fields"]["shan_teachers_ali_students_name"] = array (
  'name' => 'shan_teachers_ali_students_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SHAN_TEACHERS_ALI_STUDENTS_FROM_SHAN_TEACHERS_TITLE',
  'save' => true,
  'id_name' => 'shan_teachers_ali_studentsshan_teachers_ida',
  'link' => 'shan_teachers_ali_students',
  'table' => 'shan_teachers',
  'module' => 'shan_Teachers',
  'rname' => 'name',
);
$dictionary["ALI_Students"]["fields"]["shan_teachers_ali_studentsshan_teachers_ida"] = array (
  'name' => 'shan_teachers_ali_studentsshan_teachers_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_SHAN_TEACHERS_ALI_STUDENTS_FROM_ALI_STUDENTS_TITLE_ID',
  'id_name' => 'shan_teachers_ali_studentsshan_teachers_ida',
  'link' => 'shan_teachers_ali_students',
  'table' => 'shan_teachers',
  'module' => 'shan_Teachers',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
