<?php
return [
    'router' => [
        'routes' => [
            'vb-club-mgmt.rest.season' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/season[/:season_id]',
                    'defaults' => [
                        'controller' => 'VBClubMgmt\\V1\\Rest\\Season\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 'vb-club-mgmt.rest.season',
        ],
    ],
    'zf-rest' => [
        'VBClubMgmt\\V1\\Rest\\Season\\Controller' => [
            'listener' => 'VBClubMgmt\\V1\\Rest\\Season\\SeasonResource',
            'route_name' => 'vb-club-mgmt.rest.season',
            'route_identifier_name' => 'season_id',
            'collection_name' => 'season',
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
            'entity_class' => \VBClubMgmt\V1\Rest\Season\SeasonEntity::class,
            'collection_class' => \VBClubMgmt\V1\Rest\Season\SeasonCollection::class,
            'service_name' => 'season',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'VBClubMgmt\\V1\\Rest\\Season\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'VBClubMgmt\\V1\\Rest\\Season\\Controller' => [
                0 => 'application/vnd.vb-club-mgmt.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'VBClubMgmt\\V1\\Rest\\Season\\Controller' => [
                0 => 'application/vnd.vb-club-mgmt.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'zf-hal' => [
        'metadata_map' => [
            \VBClubMgmt\V1\Rest\Season\SeasonEntity::class => [
                'entity_identifier_name' => 'seasonId',
                'route_name' => 'vb-club-mgmt.rest.season',
                'route_identifier_name' => 'season_id',
                'hydrator' => \VBClubMgmt\V1\Rest\Season\Hydrator\SeasonEntity::class,
            ],
            \VBClubMgmt\V1\Rest\Season\SeasonCollection::class => [
                'entity_identifier_name' => 'seasonId',
                'route_name' => 'vb-club-mgmt.rest.season',
                'route_identifier_name' => 'season_id',
                'is_collection' => true,
            ],
        ],
    ],
    'zf-apigility' => [
        'db-connected' => [
            'VBClubMgmt\\V1\\Rest\\Season\\SeasonResource' => [
                'adapter_name' => 'vbclub_mysql',
                'table_name' => 'season',
                'hydrator_name' => \VBClubMgmt\V1\Rest\Season\Hydrator\SeasonEntity::class,
                'controller_service_name' => 'VBClubMgmt\\V1\\Rest\\Season\\Controller',
                'entity_identifier_name' => 'season_id',
                'table_service' => 'VBClubMgmt\\V1\\Rest\\Season\\SeasonResource\\Table',
                'resource_class' => \Project\CamelCaseDbConnectedResource::class,
            ],
        ],
    ],
    'zf-content-validation' => [
        'VBClubMgmt\\V1\\Rest\\Season\\Controller' => [
            'input_filter' => 'VBClubMgmt\\V1\\Rest\\Season\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'VBClubMgmt\\V1\\Rest\\Season\\Validator' => [
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
