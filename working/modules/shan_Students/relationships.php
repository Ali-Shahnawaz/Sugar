<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
$relationships = array (
  'shan_students_shan_teachers_1' => 
  array (
    'name' => 'shan_students_shan_teachers_1',
    'true_relationship_type' => 'many-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'shan_students_shan_teachers_1' => 
      array (
        'lhs_module' => 'shan_Students',
        'lhs_table' => 'shan_students',
        'lhs_key' => 'id',
        'rhs_module' => 'shan_Teachers',
        'rhs_table' => 'shan_teachers',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'shan_students_shan_teachers_1_c',
        'join_key_lhs' => 'shan_students_shan_teachers_1shan_students_ida',
        'join_key_rhs' => 'shan_students_shan_teachers_1shan_teachers_idb',
      ),
    ),
    'table' => 'shan_students_shan_teachers_1_c',
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
      'shan_students_shan_teachers_1shan_students_ida' => 
      array (
        'name' => 'shan_students_shan_teachers_1shan_students_ida',
        'type' => 'id',
      ),
      'shan_students_shan_teachers_1shan_teachers_idb' => 
      array (
        'name' => 'shan_students_shan_teachers_1shan_teachers_idb',
        'type' => 'id',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'shan_students_shan_teachers_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'shan_students_shan_teachers_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'shan_students_shan_teachers_1shan_students_ida',
          1 => 'shan_students_shan_teachers_1shan_teachers_idb',
        ),
      ),
    ),
    'lhs_module' => 'shan_Students',
    'lhs_table' => 'shan_students',
    'lhs_key' => 'id',
    'rhs_module' => 'shan_Teachers',
    'rhs_table' => 'shan_teachers',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'shan_students_shan_teachers_1_c',
    'join_key_lhs' => 'shan_students_shan_teachers_1shan_students_ida',
    'join_key_rhs' => 'shan_students_shan_teachers_1shan_teachers_idb',
    'readonly' => true,
    'relationship_name' => 'shan_students_shan_teachers_1',
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => 'default',
    'is_custom' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'shan_students_modified_user' => 
  array (
    'name' => 'shan_students_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'shan_Students',
    'rhs_table' => 'shan_students',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'shan_students_modified_user',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'shan_students_created_by' => 
  array (
    'name' => 'shan_students_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'shan_Students',
    'rhs_table' => 'shan_students',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'shan_students_created_by',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'shan_students_activities' => 
  array (
    'name' => 'shan_students_activities',
    'lhs_module' => 'shan_Students',
    'lhs_table' => 'shan_students',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'shan_Students',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
    'readonly' => true,
    'relationship_name' => 'shan_students_activities',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'shan_students_following' => 
  array (
    'name' => 'shan_students_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'shan_Students',
    'rhs_table' => 'shan_students',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'shan_Students',
    'user_field' => 'created_by',
    'readonly' => true,
    'relationship_name' => 'shan_students_following',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'shan_students_favorite' => 
  array (
    'name' => 'shan_students_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'shan_Students',
    'rhs_table' => 'shan_students',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'shan_Students',
    'user_field' => 'created_by',
    'readonly' => true,
    'relationship_name' => 'shan_students_favorite',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'shan_students_assigned_user' => 
  array (
    'name' => 'shan_students_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'shan_Students',
    'rhs_table' => 'shan_students',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'shan_students_assigned_user',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'shan_students_shan_courses_1' => 
  array (
    'rhs_label' => 'Courses',
    'lhs_label' => 'Students',
    'lhs_subpanel' => 'default',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'shan_Students',
    'rhs_module' => 'shan_Courses',
    'relationship_type' => 'many-to-many',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'shan_students_shan_courses_1',
  ),
);