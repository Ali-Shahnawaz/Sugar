<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/shan_Courses/Ext/Vardefs/sugarfield_course_id_c.php

 // created: 2017-07-27 11:18:53
$dictionary['shan_Courses']['fields']['course_id_c']['labelValue']='COURSE ID';
$dictionary['shan_Courses']['fields']['course_id_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['shan_Courses']['fields']['course_id_c']['enforced']='';
$dictionary['shan_Courses']['fields']['course_id_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/shan_Courses/Ext/Vardefs/sugarfield_creadit_hour_c.php

 // created: 2017-07-27 11:19:20
$dictionary['shan_Courses']['fields']['creadit_hour_c']['labelValue']='creadit hour';
$dictionary['shan_Courses']['fields']['creadit_hour_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['shan_Courses']['fields']['creadit_hour_c']['enforced']='';
$dictionary['shan_Courses']['fields']['creadit_hour_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/shan_Courses/Ext/Vardefs/shan_courses_shan_teachers_1_shan_Courses.php

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

?>
<?php
// Merged from custom/Extension/modules/shan_Courses/Ext/Vardefs/shan_students_shan_courses_1_shan_Courses.php

// created: 2017-07-27 12:52:36
$dictionary["shan_Courses"]["fields"]["shan_students_shan_courses_1"] = array (
  'name' => 'shan_students_shan_courses_1',
  'type' => 'link',
  'relationship' => 'shan_students_shan_courses_1',
  'source' => 'non-db',
  'module' => 'shan_Students',
  'bean_name' => 'shan_Students',
  'vname' => 'LBL_SHAN_STUDENTS_SHAN_COURSES_1_FROM_SHAN_STUDENTS_TITLE',
  'id_name' => 'shan_students_shan_courses_1shan_students_ida',
);

?>
