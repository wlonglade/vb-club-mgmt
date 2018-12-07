<?php
return [
    'router' => [
        'routes' => [
            'vb-club-mgmt.rest.group' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/group[/:group_id]',
                    'defaults' => [
                        'controller' => 'VBClubMgmt\\V1\\Rest\\Group\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 'vb-club-mgmt.rest.group',
        ],
    ],
    'zf-rest' => [
        'VBClubMgmt\\V1\\Rest\\Group\\Controller' => [
            'listener' => 'VBClubMgmt\\V1\\Rest\\Group\\GroupResource',
            'route_name' => 'vb-club-mgmt.rest.group',
            'route_identifier_name' => 'group_id',
            'collection_name' => 'group',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \VBClubMgmt\V1\Rest\Group\GroupEntity::class,
            'collection_class' => \VBClubMgmt\V1\Rest\Group\GroupCollection::class,
            'service_name' => 'group',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'VBClubMgmt\\V1\\Rest\\Group\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'VBClubMgmt\\V1\\Rest\\Group\\Controller' => [
                0 => 'application/vnd.vb-club-mgmt.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'VBClubMgmt\\V1\\Rest\\Group\\Controller' => [
                0 => 'application/vnd.vb-club-mgmt.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'zf-hal' => [
        'metadata_map' => [
            \VBClubMgmt\V1\Rest\Group\GroupEntity::class => [
                'entity_identifier_name' => 'groupId',
                'route_name' => 'vb-club-mgmt.rest.group',
                'route_identifier_name' => 'group_id',
                'hydrator' => \VBClubMgmt\V1\Rest\Group\Hydrator\GroupEntity::class,
            ],
            \VBClubMgmt\V1\Rest\Group\GroupCollection::class => [
                'entity_identifier_name' => 'groupId',
                'route_name' => 'vb-club-mgmt.rest.group',
                'route_identifier_name' => 'group_id',
                'is_collection' => true,
            ],
        ],
    ],
    'zf-apigility' => [
        'db-connected' => [
            'VBClubMgmt\\V1\\Rest\\Group\\GroupResource' => [
                'adapter_name' => 'vbclub_mysql',
                'table_name' => 'group',
                'hydrator_name' => \VBClubMgmt\V1\Rest\Group\Hydrator\GroupEntity::class,
                'controller_service_name' => 'VBClubMgmt\\V1\\Rest\\Group\\Controller',
                'entity_identifier_name' => 'group_id',
                'table_service' => 'VBClubMgmt\\V1\\Rest\\Group\\GroupResource\\Table',
                'resource_class' => \Project\CamelCaseDbConnectedResource::class,
            ],
        ],
    ],
    'zf-content-validation' => [
        'VBClubMgmt\\V1\\Rest\\Group\\Controller' => [
            'input_filter' => 'VBClubMgmt\\V1\\Rest\\Group\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'VBClubMgmt\\V1\\Rest\\Group\\Validator' => [
            0 => [
                0 => [
                    'name' => 'name',
                    'required' => true,
                ],
                'name' => "data",
                'type' => \Zend\InputFilter\InputFilter::class,
            ],
        ],
    ],
];
