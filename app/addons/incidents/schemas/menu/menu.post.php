<?php

$schema['central']['All_Incidents']= [
    'items' => [
        'All Incidents' => [
            'href' => 'incident.view',
            'position' => 100,
        ],
    ],
    'position' => 600,
];
$schema['central']['My_Incidents']= [
    'items' => [
        'My Incidents' => [
            'href' => 'incident.myincident',
            'position' => 200,
        ],
    ],
    'position' => 600,
];


return $schema;
