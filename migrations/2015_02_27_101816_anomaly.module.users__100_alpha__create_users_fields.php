<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class AnomalyModuleUsers_100_alpha_CreateUsersFields
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 */
class AnomalyModuleUsers_100_alpha_CreateUsersFields extends Migration
{

    /**
     * Stream fields to install.
     *
     * @var array
     */
    protected $fields = [
        'email'            => 'anomaly.field_type.email',
        'username'         => 'anomaly.field_type.text',
        'password'         => 'anomaly.field_type.text',
        'ip_address'       => 'anomaly.field_type.text',
        'remember_token'   => 'anomaly.field_type.text',
        'last_login_at'    => 'anomaly.field_type.datetime',
        'last_activity_at' => 'anomaly.field_type.datetime',
        'activated'        => 'anomaly.field_type.boolean',
        'activation_code'  => 'anomaly.field_type.text',
        'blocked'          => 'anomaly.field_type.boolean',
        'permissions'      => 'anomaly.field_type.checkboxes',
        'display_name'     => 'anomaly.field_type.text',
        'first_name'       => 'anomaly.field_type.text',
        'last_name'        => 'anomaly.field_type.text',
        'website'          => 'anomaly.field_type.url',
        'name'             => 'anomaly.field_type.text',
        'slug'             => [
            'type'   => 'anomaly.field_type.slug',
            'config' => [
                'watch' => 'name'
            ]
        ],
        'roles'            => [
            'type'   => 'anomaly.field_type.multiple',
            'config' => [
                'pivot_table' => 'users_assigned_roles',
                'related'     => 'Anomaly\UsersModule\Role\RoleModel',
            ],
        ],
        'user'             => [
            'type'   => 'anomaly.field_type.relationship',
            'config' => [
                'related' => 'Anomaly\UsersModule\User\UserModel',
            ],
        ],
    ];

}