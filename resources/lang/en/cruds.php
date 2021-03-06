<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission' => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'sensor' => [
        'title'          => 'Things',
        'title_singular' => 'Thing',
    ],
    'sensorType' => [
        'title'          => 'Thing Types',
        'title_singular' => 'Thing Type',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'thing' => [
        'title'          => 'Things',
        'title_singular' => 'Thing',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'type'                => 'Sensor Type',
            'type_helper'         => ' ',
            'name'                => 'Name',
            'name_helper'         => ' ',
            'eui'                 => 'EUI',
            'eui_helper'          => ' ',
            'installed_at'        => 'Installed At',
            'installed_at_helper' => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'Deleted at',
            'deleted_at_helper'   => ' ',
        ],
    ],
    'point' => [
        'title'          => 'Points of Interest',
        'title_singular' => 'Points of Interest',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Name',
            'name_helper'        => ' ',
            'latitude'           => 'Latitude',
            'latitude_helper'    => ' ',
            'longitude'          => 'Longitude',
            'longitude_helper'   => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'sensors'            => 'Sensors',
            'sensors_helper'     => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'region' => [
        'title'          => 'Regions',
        'title_singular' => 'Region',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'points'            => 'Points of Interest',
            'points_helper'     => ' ',
            'managers'          => 'Managers',
            'managers_helper'   => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'maintenanceEventType' => [
        'title'          => 'Maintenance Event Types',
        'title_singular' => 'Maintenance Event Type',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'maintenanceEvent' => [
        'title'          => 'Maintenance Events',
        'title_singular' => 'Maintenance Event',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'type'               => 'Maintenance Event Type',
            'type_helper'        => ' ',
            'poi'                => 'Point of Interest',
            'poi_helper'         => ' ',
            'latitude'           => 'Latitude',
            'latitude_helper'    => ' ',
            'longitude'          => 'Longitude',
            'longitude_helper'   => ' ',
            'status'             => 'Status',
            'status_helper'      => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'images'             => 'Images',
            'images_helper'      => ' ',
            'attachments'        => 'Attachments',
            'attachments_helper' => ' ',
            'assigned_to'        => 'Assigned To',
            'assigned_to_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'maintenance' => [
        'title'          => 'Maintenance',
        'title_singular' => 'Maintenance',
    ],
];
