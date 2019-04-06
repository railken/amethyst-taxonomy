<?php

return [
    'name' => 'Taxonomable',
    'description' => 'Taxonomable',
    'attributes' => [
        'taxonomy_id' => [
            'label' => 'Taxonomy',
            'description' => 'The Taxonomy associated'
        ],
        'taxonomable_type' => [
            'label' => 'Taxonomobale Type',
            'description' => 'Data Type which this entity is associated'
        ],
        'taxonomable_id' => [
            'label' => 'Taxonomobale ID',
            'description' => 'Data ID which this entity is associated'
        ]
    ]
]