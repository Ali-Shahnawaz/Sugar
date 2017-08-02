<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/shan_Students/Ext/Vardefs/sugarfield_reg_no_c.php

 // created: 2017-07-27 11:02:47
$dictionary['shan_Students']['fields']['reg_no_c']['labelValue']='REG NO';
$dictionary['shan_Students']['fields']['reg_no_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['shan_Students']['fields']['reg_no_c']['enforced']='';
$dictionary['shan_Students']['fields']['reg_no_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/shan_Students/Ext/Vardefs/sugarfield_gpa_c.php

 // created: 2017-07-27 11:02:47
$dictionary['shan_Students']['fields']['gpa_c']['labelValue']='GPA';
$dictionary['shan_Students']['fields']['gpa_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['shan_Students']['fields']['gpa_c']['enforced']='';
$dictionary['shan_Students']['fields']['gpa_c']['dependency']='';
$dictionary['shan_Students']['fields']['gpa_c']['source'] = 'custom_fields';

 
?>
<?php
// Merged from custom/Extension/modules/shan_Students/Ext/Vardefs/shan_students_shan_teachers_1_shan_Students.php

// created: 2017-07-27 12:09:44
$dictionary["shan_Students"]["fields"]["shan_students_shan_teachers_1"] = array (
  'name' => 'shan_students_shan_teachers_1',
  'type' => 'link',
  'relationship' => 'shan_students_shan_teachers_1',
  'source' => 'non-db',
  'module' => 'shan_Teachers',
  'bean_name' => 'shan_Teachers',
  'vname' => 'LBL_SHAN_STUDENTS_SHAN_TEACHERS_1_FROM_SHAN_TEACHERS_TITLE',
  'id_name' => 'shan_students_shan_teachers_1shan_teachers_idb',
);

?>
<?php
// Merged from custom/Extension/modules/shan_Students/Ext/Vardefs/sugarfield_phone_c.php

 // created: 2017-07-27 11:03:04
$dictionary['shan_Students']['fields']['phone_c']['labelValue']='PHONE';
$dictionary['shan_Students']['fields']['phone_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['shan_Students']['fields']['phone_c']['enforced']='';
$dictionary['shan_Students']['fields']['phone_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/shan_Students/Ext/Vardefs/shan_students_shan_courses_1_shan_Students.php

// created: 2017-07-27 12:52:36
$dictionary["shan_Students"]["fields"]["shan_students_shan_courses_1"] = array (
  'name' => 'shan_students_shan_courses_1',
  'type' => 'link',
  'relationship' => 'shan_students_shan_courses_1',
  'source' => 'non-db',
  'module' => 'shan_Courses',
  'bean_name' => 'shan_Courses',
  'vname' => 'LBL_SHAN_STUDENTS_SHAN_COURSES_1_FROM_SHAN_COURSES_TITLE',
  'id_name' => 'shan_students_shan_courses_1shan_courses_idb',
);

?>
