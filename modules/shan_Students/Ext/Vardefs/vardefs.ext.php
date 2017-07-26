<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/shan_Students/Ext/Vardefs/shan_students_shan_courses_shan_Students.php

// created: 2017-07-26 15:33:12
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

?>
<?php
// Merged from custom/Extension/modules/shan_Students/Ext/Vardefs/shan_teachers_shan_students_shan_Students.php

// created: 2017-07-26 15:33:12
$dictionary["shan_Students"]["fields"]["shan_teachers_shan_students"] = array (
  'name' => 'shan_teachers_shan_students',
  'type' => 'link',
  'relationship' => 'shan_teachers_shan_students',
  'source' => 'non-db',
  'module' => 'shan_Teachers',
  'bean_name' => 'shan_Teachers',
  'side' => 'right',
  'vname' => 'LBL_SHAN_TEACHERS_SHAN_STUDENTS_FROM_SHAN_STUDENTS_TITLE',
  'id_name' => 'shan_teachers_shan_studentsshan_teachers_ida',
  'link-type' => 'one',
);
$dictionary["shan_Students"]["fields"]["shan_teachers_shan_students_name"] = array (
  'name' => 'shan_teachers_shan_students_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SHAN_TEACHERS_SHAN_STUDENTS_FROM_SHAN_TEACHERS_TITLE',
  'save' => true,
  'id_name' => 'shan_teachers_shan_studentsshan_teachers_ida',
  'link' => 'shan_teachers_shan_students',
  'table' => 'shan_teachers',
  'module' => 'shan_Teachers',
  'rname' => 'name',
);
$dictionary["shan_Students"]["fields"]["shan_teachers_shan_studentsshan_teachers_ida"] = array (
  'name' => 'shan_teachers_shan_studentsshan_teachers_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_SHAN_TEACHERS_SHAN_STUDENTS_FROM_SHAN_STUDENTS_TITLE_ID',
  'id_name' => 'shan_teachers_shan_studentsshan_teachers_ida',
  'link' => 'shan_teachers_shan_students',
  'table' => 'shan_teachers',
  'module' => 'shan_Teachers',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
