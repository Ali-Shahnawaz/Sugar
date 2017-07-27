<?php
 // created: 2017-07-26 19:30:16
$layout_defs["shan_Courses"]["subpanel_setup"]['shan_courses_ali_students'] = array (
  'order' => 100,
  'module' => 'ALI_Students',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SHAN_COURSES_ALI_STUDENTS_FROM_ALI_STUDENTS_TITLE',
  'get_subpanel_data' => 'shan_courses_ali_students',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
