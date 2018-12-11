<?php
return [
    'router' => [
        'routes' => [
            'vb-club-mgmt.rest.post' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/post[/:post_id]',
                    'defaults' => [
                        'controller' => 'VBClubMgmt\\V1\\Rest\\Post\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 'vb-club-mgmt.rest.post',
        ],
    ],
    'zf-rest' => [
        'VBClubMgmt\\V1\\Rest\\Post\\Controller' => [
            'listener' => 'VBClubMgmt\\V1\\Rest\\Post\\PostResource',
            'route_name' => 'vb-club-mgmt.rest.post',
            'route_identifier_name' => 'post_id',
            'collection_name' => 'post',
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
            'entity_class' => \VBClubMgmt\V1\Rest\Post\PostEntity::class,
            'collection_class' => \VBClubMgmt\V1\Rest\Post\PostCollection::class,
            'service_name' => 'post',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'VBClubMgmt\\V1\\Rest\\Post\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'VBClubMgmt\\V1\\Rest\\Post\\Controller' => [
                0 => 'application/vnd.vb-club-mgmt.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'VBClubMgmt\\V1\\Rest\\Post\\Controller' => [
                0 => 'application/vnd.vb-club-mgmt.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'zf-hal' => [
        'metadata_map' => [
            \VBClubMgmt\V1\Rest\Post\PostEntity::class => [
                'entity_identifier_name' => 'postId',
                'route_name' => 'vb-club-mgmt.rest.post',
                'route_identifier_name' => 'post_id',
                'hydrator' => \VBClubMgmt\V1\Rest\Post\Hydrator\PostEntity::class,
            ],
            \VBClubMgmt\V1\Rest\Post\PostCollection::class => [
                'entity_identifier_name' => 'postId',
                'route_name' => 'vb-club-mgmt.rest.post',
                'route_identifier_name' => 'post_id',
                'is_collection' => true,
            ],
        ],
    ],
    'zf-apigility' => [
        'db-connected' => [
            'VBClubMgmt\\V1\\Rest\\Post\\PostResource' => [
                'adapter_name' => 'vbclub_mysql',
                'table_name' => 'post',
                'hydrator_name' => \VBClubMgmt\V1\Rest\Post\Hydrator\PostEntity::class,
                'controller_service_name' => 'VBClubMgmt\\V1\\Rest\\Post\\Controller',
                'entity_identifier_name' => 'post_id',
                'table_service' => 'VBClubMgmt\\V1\\Rest\\Post\\PostResource\\Table',
                'resource_class' => \Project\CamelCaseDbConnectedResource::class,
            ],
        ],
    ],
    'zf-content-validation' => [
        'VBClubMgmt\\V1\\Rest\\Post\\Controller' => [
            'input_filter' => 'VBClubMgmt\\V1\\Rest\\Post\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'VBClubMgmt\\V1\\Rest\\Post\\Validator' => [
            0 => [
                'name' => 'title',
                'required' => true,
                'validators' => [],
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                        'options' => [],
                    ],
                ],
            ],
            1 => [
                'name' => 'content',
                'required' => true,
                'validators' => [],
                'filters' => [],
            ],
            2 => [
                0 => [
                    'name' => 'author',
                    'required' => false,
                ],
                'name' => "data",
                'type' => \Zend\InputFilter\InputFilter::class,
            ],
        ],
    ],
];
