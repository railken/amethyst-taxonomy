<?php

return [
    'name' => 'Tassonomizzabile',
    'description' => 'Tassonomizzabile',
    'attributes' => [
        'taxonomy_id' => [
            'label' => 'Taxonomy',
            'description' => 'La Tassonomia associata'
        ],
        'taxonomable_type' => [
            'label' => 'Taxonomobale Type',
            'description' => 'Il tipo di dato con qui è collegato'
        ],
        'taxonomable_id' => [
            'label' => 'Taxonomobale ID',
            'description' => 'L'ID del dato con cui è collegato'
        ]
    ]
]