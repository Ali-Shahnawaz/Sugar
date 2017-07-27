<?php
 // created: 2017-07-26 19:30:16
$layout_defs["shan_Teachers"]["subpanel_setup"]['shan_teachers_shan_students'] = array (
  'order' => 100,
  'module' => 'shan_Students',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SHAN_TEACHERS_SHAN_STUDENTS_FROM_SHAN_STUDENTS_TITLE',
  'get_subpanel_data' => 'shan_teachers_shan_students',
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
