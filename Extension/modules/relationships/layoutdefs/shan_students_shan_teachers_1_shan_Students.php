<?php
 // created: 2017-07-27 12:09:44
$layout_defs["shan_Students"]["subpanel_setup"]['shan_students_shan_teachers_1'] = array (
  'order' => 100,
  'module' => 'shan_Teachers',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SHAN_STUDENTS_SHAN_TEACHERS_1_FROM_SHAN_TEACHERS_TITLE',
  'get_subpanel_data' => 'shan_students_shan_teachers_1',
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
