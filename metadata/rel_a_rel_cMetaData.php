<?php
// created: 2017-07-27 17:57:14
$dictionary["rel_a_rel_c"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' =>
  array (
    'rel_a_rel_c' =>
    array (
      'lhs_module' => 'rel_A',
      'lhs_table' => 'rel_a',
      'lhs_key' => 'id',
      'rhs_module' => 'rel_C',
      'rhs_table' => 'rel_c',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'rel_a_rel_c_c',
      'join_key_lhs' => 'rel_a_rel_crel_a_idc',
      'join_key_rhs' => 'rel_a_rel_crel_c_ida',
    ),
  ),
  'table' => 'rel_a_rel_c_c',
  'fields' =>
  array (
    'id' =>
    array (
      'name' => 'id',
      'type' => 'id',
    ),
    'date_modified' =>
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    'deleted' =>
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'default' => 0,
    ),
    'rel_a_rel_crel_a_idc' =>
    array (
      'name' => 'rel_a_rel_crel_a_idc',
      'type' => 'id',
    ),
    'rel_a_rel_crel_c_ida' =>
    array (
      'name' => 'rel_a_rel_crel_c_ida',
      'type' => 'id',
    ),
  ),
  'indices' =>
  array (
    0 =>
    array (
      'name' => 'rel_a_rel_cspk',
      'type' => 'primary',
      'fields' =>
      array (
        0 => 'id',
      ),
    ),
    1 =>
    array (
      'name' => 'rel_a_rel_c_alt',
      'type' => 'alternate_key',
      'fields' =>
      array (
        0 => 'rel_a_rel_crel_a_idc',
        1 => 'rel_a_rel_crel_c_ida',
      ),
    ),
  ),
);
