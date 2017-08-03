<?php

$layout_defs["rel_A"]["subpanel_setup"]['rel_a_rel_c'] = array (
  'order' => 100,
  'module' => 'rel_C',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'Example',
  'get_subpanel_data' => 'rel_a_rel_c,
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
