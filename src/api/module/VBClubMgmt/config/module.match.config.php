<?php
return [
    'router' => [
        'routes' => [
            'vb-club-mgmt.rest.match' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/match[/:match_id]',
                    'defaults' => [
                        'controller' => 'VBClubMgmt\\V1\\Rest\\Match\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 'vb-club-mgmt.rest.match',
        ],
    ],
    'zf-rest' => [
        'VBClubMgmt\\V1\\Rest\\Match\\Controller' => [
            'listener' => 'VBClubMgmt\\V1\\Rest\\Match\\MatchResource',
            'route_name' => 'vb-club-mgmt.rest.match',
            'route_identifier_name' => 'match_id',
            'collection_name' => 'match',
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
            'entity_class' => \VBClubMgmt\V1\Rest\Match\MatchEntity::class,
            'collection_class' => \VBClubMgmt\V1\Rest\Match\MatchCollection::class,
            'service_name' => 'match',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'VBClubMgmt\\V1\\Rest\\Match\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'VBClubMgmt\\V1\\Rest\\Match\\Controller' => [
                0 => 'application/vnd.vb-club-mgmt.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'VBClubMgmt\\V1\\Rest\\Match\\Controller' => [
                0 => 'application/vnd.vb-club-mgmt.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'zf-hal' => [
        'metadata_map' => [
            \VBClubMgmt\V1\Rest\Match\MatchEntity::class => [
                'entity_identifier_name' => 'matchId',
                'route_name' => 'vb-club-mgmt.rest.match',
                'route_identifier_name' => 'match_id',
                'hydrator' => \VBClubMgmt\V1\Rest\Match\Hydrator\MatchEntity::class,
            ],
            \VBClubMgmt\V1\Rest\Match\MatchCollection::class => [
                'entity_identifier_name' => 'matchId',
                'route_name' => 'vb-club-mgmt.rest.match',
                'route_identifier_name' => 'match_id',
                'is_collection' => true,
            ],
        ],
    ],
    'zf-apigility' => [
        'db-connected' => [
            'VBClubMgmt\\V1\\Rest\\Match\\MatchResource' => [
                'adapter_name' => 'vbclub_mysql',
                'table_name' => 'match',
                'hydrator_name' => \VBClubMgmt\V1\Rest\Match\Hydrator\MatchEntity::class,
                'controller_service_name' => 'VBClubMgmt\\V1\\Rest\\Match\\Controller',
                'entity_identifier_name' => 'match_id',
                'table_service' => 'VBClubMgmt\\V1\\Rest\\Match\\MatchResource\\Table',
                'resource_class' => \Project\CamelCaseDbConnectedResource::class,
            ],
        ],
    ],
    'zf-content-validation' => [
        'VBClubMgmt\\V1\\Rest\\Match\\Controller' => [
            'input_filter' => 'VBClubMgmt\\V1\\Rest\\Match\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'VBClubMgmt\\V1\\Rest\\Match\\Validator' => [
            0 => [
                'name' => 'tournamentId',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\Digits::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => 'ZF\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => [
                            'adapter' => 'vbclub_mysql',
                            'table' => 'tournament',
                            'field' => 'tournament_id',
                        ],
                    ],
                ],
            ],
            1 => [
                'name' => 'opponentId',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\Digits::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => 'ZF\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => [
                            'adapter' => 'vbclub_mysql',
                            'table' => 'opponent',
                            'field' => 'opponent_id',
                        ],
                    ],
                ],
            ],
            2 => [
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
            3 => [
                'name' => 'availablePlayers',
                'required' => false,
                'validators' => [],
                'filters' => [],
            ],
            4 => [
                'name' => 'confirmedPlayers',
                'required' => false,
                'validators' => [],
                'filters' => [],
            ],
            5 => [
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
