<?php
return [
    'router' => [
        'routes' => [
            'vb-club-mgmt.rest.event' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/event[/:event_id]',
                    'defaults' => [
                        'controller' => 'VBClubMgmt\\V1\\Rest\\Event\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 'vb-club-mgmt.rest.event',
        ],
    ],
    'zf-rest' => [
        'VBClubMgmt\\V1\\Rest\\Event\\Controller' => [
            'listener' => 'VBClubMgmt\\V1\\Rest\\Event\\EventResource',
            'route_name' => 'vb-club-mgmt.rest.event',
            'route_identifier_name' => 'event_id',
            'collection_name' => 'event',
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
            'entity_class' => \VBClubMgmt\V1\Rest\Event\EventEntity::class,
            'collection_class' => \VBClubMgmt\V1\Rest\Event\EventCollection::class,
            'service_name' => 'event',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'VBClubMgmt\\V1\\Rest\\Event\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'VBClubMgmt\\V1\\Rest\\Event\\Controller' => [
                0 => 'application/vnd.vb-club-mgmt.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'VBClubMgmt\\V1\\Rest\\Event\\Controller' => [
                0 => 'application/vnd.vb-club-mgmt.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'zf-hal' => [
        'metadata_map' => [
            \VBClubMgmt\V1\Rest\Event\EventEntity::class => [
                'entity_identifier_name' => 'eventId',
                'route_name' => 'vb-club-mgmt.rest.event',
                'route_identifier_name' => 'event_id',
                'hydrator' => \VBClubMgmt\V1\Rest\Event\Hydrator\EventEntity::class,
            ],
            \VBClubMgmt\V1\Rest\Event\EventCollection::class => [
                'entity_identifier_name' => 'eventId',
                'route_name' => 'vb-club-mgmt.rest.event',
                'route_identifier_name' => 'event_id',
                'is_collection' => true,
            ],
        ],
    ],
    'zf-apigility' => [
        'db-connected' => [
            'VBClubMgmt\\V1\\Rest\\Event\\EventResource' => [
                'adapter_name' => 'vbclub_mysql',
                'table_name' => 'event',
                'hydrator_name' => \VBClubMgmt\V1\Rest\Event\Hydrator\EventEntity::class,
                'controller_service_name' => 'VBClubMgmt\\V1\\Rest\\Event\\Controller',
                'entity_identifier_name' => 'event_id',
                'table_service' => 'VBClubMgmt\\V1\\Rest\\Event\\EventResource\\Table',
                'resource_class' => \Project\CamelCaseDbConnectedResource::class,
            ],
        ],
    ],
    'zf-content-validation' => [
        'VBClubMgmt\\V1\\Rest\\Event\\Controller' => [
            'input_filter' => 'VBClubMgmt\\V1\\Rest\\Event\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'VBClubMgmt\\V1\\Rest\\Event\\Validator' => [
            0 => [
                'name' => 'name',
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
                'name' => 'date',
                'required' => false,
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\Date::class,
                        'options' => [
                            'format' => 'Y-m-d H:i:s',
                        ],
                    ],
                ],
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\DateTimeFormatter::class,
                        'options' => [
                            'format' => 'Y-m-d H:i:s',
                        ],
                    ],
                ],
            ],
            2 => [
                'name' => 'description',
                'required' => false,
                'validators' => [],
                'filters' => [],
            ],
            3 => [
                'name' => 'participants',
                'required' => false,
                'validators' => [],
                'filters' => [],
            ],
            4 => [
                0 => [
                    'name' => 'location',
                    'required' => false,
                ],
                'name' => 'data',
                'type' => \Zend\InputFilter\InputFilter::class,
            ],
        ],
    ],
];
