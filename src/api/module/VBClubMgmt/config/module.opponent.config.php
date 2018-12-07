<?php
return [
    'router' => [
        'routes' => [
            'vb-club-mgmt.rest.opponent' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/opponent[/:opponent_id]',
                    'defaults' => [
                        'controller' => 'VBClubMgmt\\V1\\Rest\\Opponent\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 'vb-club-mgmt.rest.opponent',
        ],
    ],
    'zf-rest' => [
        'VBClubMgmt\\V1\\Rest\\Opponent\\Controller' => [
            'listener' => 'VBClubMgmt\\V1\\Rest\\Opponent\\OpponentResource',
            'route_name' => 'vb-club-mgmt.rest.opponent',
            'route_identifier_name' => 'opponent_id',
            'collection_name' => 'opponent',
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
            'entity_class' => \VBClubMgmt\V1\Rest\Opponent\OpponentEntity::class,
            'collection_class' => \VBClubMgmt\V1\Rest\Opponent\OpponentCollection::class,
            'service_name' => 'opponent',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'VBClubMgmt\\V1\\Rest\\Opponent\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'VBClubMgmt\\V1\\Rest\\Opponent\\Controller' => [
                0 => 'application/vnd.vb-club-mgmt.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'VBClubMgmt\\V1\\Rest\\Opponent\\Controller' => [
                0 => 'application/vnd.vb-club-mgmt.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'zf-hal' => [
        'metadata_map' => [
            \VBClubMgmt\V1\Rest\Opponent\OpponentEntity::class => [
                'entity_identifier_name' => 'opponentId',
                'route_name' => 'vb-club-mgmt.rest.opponent',
                'route_identifier_name' => 'opponent_id',
                'hydrator' => \VBClubMgmt\V1\Rest\Opponent\Hydrator\OpponentEntity::class,
            ],
            \VBClubMgmt\V1\Rest\Opponent\OpponentCollection::class => [
                'entity_identifier_name' => 'opponentId',
                'route_name' => 'vb-club-mgmt.rest.opponent',
                'route_identifier_name' => 'opponent_id',
                'is_collection' => true,
            ],
        ],
    ],
    'zf-apigility' => [
        'db-connected' => [
            'VBClubMgmt\\V1\\Rest\\Opponent\\OpponentResource' => [
                'adapter_name' => 'vbclub_mysql',
                'table_name' => 'opponent',
                'hydrator_name' => \VBClubMgmt\V1\Rest\Opponent\Hydrator\OpponentEntity::class,
                'controller_service_name' => 'VBClubMgmt\\V1\\Rest\\Opponent\\Controller',
                'entity_identifier_name' => 'opponent_id',
                'table_service' => 'VBClubMgmt\\V1\\Rest\\Opponent\\OpponentResource\\Table',
                'resource_class' => \Project\CamelCaseDbConnectedResource::class,
            ],
        ],
    ],
    'zf-content-validation' => [
        'VBClubMgmt\\V1\\Rest\\Opponent\\Controller' => [
            'input_filter' => 'VBClubMgmt\\V1\\Rest\\Opponent\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'VBClubMgmt\\V1\\Rest\\Opponent\\Validator' => [
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
