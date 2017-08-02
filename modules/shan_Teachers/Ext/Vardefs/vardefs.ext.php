<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/shan_Teachers/Ext/Vardefs/shan_courses_shan_teachers_1_shan_Teachers.php

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

?>
<?php
// Merged from custom/Extension/modules/shan_Teachers/Ext/Vardefs/shan_students_shan_teachers_1_shan_Teachers.php

// created: 2017-07-27 12:09:44
$dictionary["shan_Teachers"]["fields"]["shan_students_shan_teachers_1"] = array (
  'name' => 'shan_students_shan_teachers_1',
  'type' => 'link',
  'relationship' => 'shan_students_shan_teachers_1',
  'source' => 'non-db',
  'module' => 'shan_Students',
  'bean_name' => 'shan_Students',
  'vname' => 'LBL_SHAN_STUDENTS_SHAN_TEACHERS_1_FROM_SHAN_STUDENTS_TITLE',
  'id_name' => 'shan_students_shan_teachers_1shan_students_ida',
);

?>
<?php
// Merged from custom/Extension/modules/shan_Teachers/Ext/Vardefs/sugarfield_teacher_id_c.php

 // created: 2017-07-27 11:29:14
$dictionary['shan_Teachers']['fields']['teacher_id_c']['labelValue']='TEACHER ID';
$dictionary['shan_Teachers']['fields']['teacher_id_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['shan_Teachers']['fields']['teacher_id_c']['enforced']='';
$dictionary['shan_Teachers']['fields']['teacher_id_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/shan_Teachers/Ext/Vardefs/sugarfield_phone_c.php

 // created: 2017-07-27 11:28:48
$dictionary['shan_Teachers']['fields']['phone_c']['labelValue']='PHONE';
$dictionary['shan_Teachers']['fields']['phone_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['shan_Teachers']['fields']['phone_c']['enforced']='';
$dictionary['shan_Teachers']['fields']['phone_c']['dependency']='';

 
?>
<?php
// Merged from modules/shan_Teachers/Ext/Vardefs/vardefs.ext.php

// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/shan_Teachers/Ext/Vardefs/sugarfield_phone_c.php

 // created: 2017-07-27 11:28:48
$dictionary['shan_Teachers']['fields']['phone_c']['labelValue']='PHONE';
$dictionary['shan_Teachers']['fields']['phone_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['shan_Teachers']['fields']['phone_c']['enforced']='';
$dictionary['shan_Teachers']['fields']['phone_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/shan_Teachers/Ext/Vardefs/sugarfield_teacher_id_c.php

 // created: 2017-07-27 11:29:14
$dictionary['shan_Teachers']['fields']['teacher_id_c']['labelValue']='TEACHER ID';
$dictionary['shan_Teachers']['fields']['teacher_id_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['shan_Teachers']['fields']['teacher_id_c']['enforced']='';
$dictionary['shan_Teachers']['fields']['teacher_id_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/shan_Teachers/Ext/Vardefs/shan_students_shan_teachers_1_shan_Teachers.php

// created: 2017-07-27 12:09:44
$dictionary["shan_Teachers"]["fields"]["shan_students_shan_teachers_1"] = array (
  'name' => 'shan_students_shan_teachers_1',
  'type' => 'link',
  'relationship' => 'shan_students_shan_teachers_1',
  'source' => 'non-db',
  'module' => 'shan_Students',
  'bean_name' => 'shan_Students',
  'vname' => 'LBL_SHAN_STUDENTS_SHAN_TEACHERS_1_FROM_SHAN_STUDENTS_TITLE',
  'id_name' => 'shan_students_shan_teachers_1shan_students_ida',
);

?>
<?php
// Merged from custom/Extension/modules/shan_Teachers/Ext/Vardefs/shan_courses_shan_teachers_1_shan_Teachers.php

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


?>
