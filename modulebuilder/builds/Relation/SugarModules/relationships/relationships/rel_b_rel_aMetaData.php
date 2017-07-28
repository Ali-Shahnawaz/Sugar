<?php
// created: 2017-07-27 17:57:14
$dictionary["rel_b_rel_a"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'rel_b_rel_a' => 
    array (
      'lhs_module' => 'rel_B',
      'lhs_table' => 'rel_b',
      'lhs_key' => 'id',
      'rhs_module' => 'rel_A',
      'rhs_table' => 'rel_a',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'rel_b_rel_a_c',
      'join_key_lhs' => 'rel_b_rel_arel_b_ida',
      'join_key_rhs' => 'rel_b_rel_arel_a_idb',
    ),
  ),
  'table' => 'rel_b_rel_a_c',
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
    'rel_b_rel_arel_b_ida' => 
    array (
      'name' => 'rel_b_rel_arel_b_ida',
      'type' => 'id',
    ),
    'rel_b_rel_arel_a_idb' => 
    array (
      'name' => 'rel_b_rel_arel_a_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'rel_b_rel_aspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'rel_b_rel_a_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'rel_b_rel_arel_b_ida',
        1 => 'rel_b_rel_arel_a_idb',
      ),
    ),
  ),
);