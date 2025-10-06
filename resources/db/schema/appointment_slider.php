<?php
/**
 *
 * Schema definition for 'appointment_slider'
 *
 * Last update: 2020-12-31
 *
 */
$schemas = $schemas ?? [];
$schemas['appointment_slider'] = [
    'id' => [
        'type' => 'int(11) unsigned',
        'auto_increment' => true,
        'primary' => true,
    ],
    'value_id' => [
        'type' => 'int(11) unsigned',
        'foreign_key' => [
            'table' => 'application_option_value',
            'column' => 'value_id',
            'name' => 'FK_APPOINTMENTPRO_SLIDER_VID',
            'on_update' => 'CASCADE',
            'on_delete' => 'CASCADE',
        ],
        'index' => [
            'key_name' => 'value_id',
            'index_type' => 'BTREE',
            'is_null' => false,
            'is_unique' => false,
        ],
    ],
    'image' => [
        'type' => 'text',
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'is_null' => false,
    ],
    'slider_name' => [
        'type' => 'varchar(255)',
        'is_null' => false,
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
    ],
    'valid_from' => [
        'type' => 'varchar(255)',
        'is_null' => false,
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
    ],
    'valid_until' => [
        'type' => 'varchar(255)',
        'is_null' => false,
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
    ],
    'status' => [
        'type' => 'enum(\'active\',\'inactive\',\'deleted\')',
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
    ], 
    'event_id' => [
        'type' => 'int (11)',
        'is_null' => true,
        'default' => 0
    ],
    'created_at' => [
        'type' => 'datetime',
    ],
    'updated_at' => [
        'type' => 'datetime',
    ],
];
