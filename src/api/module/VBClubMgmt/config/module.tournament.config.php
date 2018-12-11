<?php
return [
    'router' => [
        'routes' => [
            'vb-club-mgmt.rest.tournament' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/tournament[/:tournament_id]',
                    'defaults' => [
                        'controller' => 'VBClubMgmt\\V1\\Rest\\Tournament\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 'vb-club-mgmt.rest.tournament',
        ],
    ],
    'zf-rest' => [
        'VBClubMgmt\\V1\\Rest\\Tournament\\Controller' => [
            'listener' => 'VBClubMgmt\\V1\\Rest\\Tournament\\TournamentResource',
            'route_name' => 'vb-club-mgmt.rest.tournament',
            'route_identifier_name' => 'tournament_id',
            'collection_name' => 'tournament',
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
            'entity_class' => \VBClubMgmt\V1\Rest\Tournament\TournamentEntity::class,
            'collection_class' => \VBClubMgmt\V1\Rest\Tournament\TournamentCollection::class,
            'service_name' => 'tournament',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'VBClubMgmt\\V1\\Rest\\Tournament\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'VBClubMgmt\\V1\\Rest\\Tournament\\Controller' => [
                0 => 'application/vnd.vb-club-mgmt.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'VBClubMgmt\\V1\\Rest\\Tournament\\Controller' => [
                0 => 'application/vnd.vb-club-mgmt.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'zf-hal' => [
        'metadata_map' => [
            \VBClubMgmt\V1\Rest\Tournament\TournamentEntity::class => [
                'entity_identifier_name' => 'tournamentId',
                'route_name' => 'vb-club-mgmt.rest.tournament',
                'route_identifier_name' => 'tournament_id',
                'hydrator' => \VBClubMgmt\V1\Rest\Tournament\Hydrator\TournamentEntity::class,
            ],
            \VBClubMgmt\V1\Rest\Tournament\TournamentCollection::class => [
                'entity_identifier_name' => 'tournamentId',
                'route_name' => 'vb-club-mgmt.rest.tournament',
                'route_identifier_name' => 'tournament_id',
                'is_collection' => true,
            ],
        ],
    ],
    'zf-apigility' => [
        'db-connected' => [
            'VBClubMgmt\\V1\\Rest\\Tournament\\TournamentResource' => [
                'adapter_name' => 'vbclub_mysql',
                'table_name' => 'tournament',
                'hydrator_name' => \VBClubMgmt\V1\Rest\Tournament\Hydrator\TournamentEntity::class,
                'controller_service_name' => 'VBClubMgmt\\V1\\Rest\\Tournament\\Controller',
                'entity_identifier_name' => 'tournament_id',
                'table_service' => 'VBClubMgmt\\V1\\Rest\\Tournament\\TournamentResource\\Table',
                'resource_class' => \Project\CamelCaseDbConnectedResource::class,
            ],
        ],
    ],
    'zf-content-validation' => [
        'VBClubMgmt\\V1\\Rest\\Tournament\\Controller' => [
            'input_filter' => 'VBClubMgmt\\V1\\Rest\\Tournament\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'VBClubMgmt\\V1\\Rest\\Tournament\\Validator' => [
            0 => [
                'name' => 'seasonId',
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
                            'table' => 'season',
                            'field' => 'season_id',
                        ],
                    ],
                ],
            ],
            1 => [
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
