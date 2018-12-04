<?php
return [
    'hydrators' => [
        'invokables' => [
            'Project\\Hydrator\\ClassMethods\\CamelCase' => 'Project\\Hydrator\\ClassMethods\\CamelCase',
        ],
    ],
    'router' => [
        'routes' => [
            'vb-club-mgmt.rest.contact' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/contact[/:contact_id]',
                    'defaults' => [
                        'controller' => 'VBClubMgmt\\V1\\Rest\\Contact\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 'vb-club-mgmt.rest.contact',
        ],
    ],
    'zf-rest' => [
        'VBClubMgmt\\V1\\Rest\\Contact\\Controller' => [
            'listener' => 'VBClubMgmt\\V1\\Rest\\Contact\\ContactResource',
            'route_name' => 'vb-club-mgmt.rest.contact',
            'route_identifier_name' => 'contact_id',
            'collection_name' => 'contact',
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
            'entity_class' => \VBClubMgmt\V1\Rest\Contact\ContactEntity::class,
            'collection_class' => \VBClubMgmt\V1\Rest\Contact\ContactCollection::class,
            'service_name' => 'contact',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'VBClubMgmt\\V1\\Rest\\Contact\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'VBClubMgmt\\V1\\Rest\\Contact\\Controller' => [
                0 => 'application/vnd.vb-club-mgmt.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'VBClubMgmt\\V1\\Rest\\Contact\\Controller' => [
                0 => 'application/vnd.vb-club-mgmt.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'zf-hal' => [
        'metadata_map' => [
            \VBClubMgmt\V1\Rest\Contact\ContactEntity::class => [
                'entity_identifier_name' => 'contactId',
                'route_name' => 'vb-club-mgmt.rest.contact',
                'route_identifier_name' => 'contact_id',
                'hydrator' => 'Project\\Hydrator\\ClassMethods\\CamelCase',
            ],
            \VBClubMgmt\V1\Rest\Contact\ContactCollection::class => [
                'entity_identifier_name' => 'contactId',
                'route_name' => 'vb-club-mgmt.rest.contact',
                'route_identifier_name' => 'contact_id',
                'is_collection' => true,
            ],
        ],
    ],
    'zf-apigility' => [
        'db-connected' => [
            'VBClubMgmt\\V1\\Rest\\Contact\\ContactResource' => [
                'adapter_name' => 'vbclub_mysql',
                'table_name' => 'contact',
                'hydrator_name' => \Project\Hydrator\ClassMethods\CamelCase::class,
                'controller_service_name' => 'VBClubMgmt\\V1\\Rest\\Contact\\Controller',
                'entity_identifier_name' => 'contact_id',
                'table_service' => 'VBClubMgmt\\V1\\Rest\\Contact\\ContactResource\\Table',
                'resource_class' => \Project\CamelCaseDbConnectedResource::class,
            ],
        ],
    ],
    'zf-content-validation' => [
    ],
    'input_filter_specs' => [

    ],
];
