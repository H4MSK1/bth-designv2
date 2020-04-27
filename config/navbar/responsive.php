<?php
/**
 * Supply the basis for the navbar as an array.
 */
return [
    // Use for styling the menu
    "id" => "rm-menu",
    "wrapper" => null,
    "class" => "rm-default rm-mobile",
 
    // Here comes the menu items
    "items" => [
        [
            "text" => "Hem",
            "url" => "",
            "title" => "Första sidan, börja här.",
        ],
        [
            "text" => "Redovisning",
            "url" => "redovisning",
            "title" => "Redovisningstexter från kursmomenten.",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Kmom05",
                        "url" => "redovisning/kmom05",
                        "title" => "Redovisning för kmom05.",
                    ],
                    [
                        "text" => "Kmom06",
                        "url" => "redovisning/kmom06",
                        "title" => "Redovisning för kmom06.",
                    ],
                    [
                        "text" => "Kmom10",
                        "url" => "redovisning/kmom10",
                        "title" => "Redovisning för kmom10.",
                    ],
                ],
            ],
        ],
        [
            "text" => "Rapport",
            "url" => "rapport/index",
            
            "title" => "Design Rapporter.",
            
            "submenu" => [
                "items" => [
                    [
                        "text" => "Rapport färg schema",
                        "url" => "rapport/färgschema",
                        "title" => "Rapport färg schema",
                    ],
                     [
                        "text" => "Rapport laddnings tid",
                        "url" => "rapport/laddningstid",
                        "title" => "Rapport laddnings tid",
                    ],
                     [
                        "text" => "Rapport desigprincip ",
                        "url" => "rapport/designprincip",
                        "title" => "Rapport designprincip",
                    ],
                    
                ],
            ],
        ],
         [
            "text" => "Blogg",
            "url" => "blogg/index",
            
            "title" => "Design Rapporter.",
            
            "submenu" => [
                "items" => [
                    [
                        "text" => "100_mitt-forsta-inlagg",
                        "url" => "blogg/mitt-forsta-inlagg",
                        "title" => "100_mitt-forsta-inlagg",
                    ],
                    [
                        "text" => "101_mitt-andra-inlagg",
                        "url" => "blogg/mitt-andra-inlagg",
                        "title" => "101_mitt-andra-inlagg",
                    ],
                    [
                        "text" => "101_mitt-tredje-inlagg",
                        "url" => "blogg/mitt-tredje-inlagg",
                        "title" => "102_mitt-tredje-inlagg",
                    ],
                ],
            ],
        ],
        [
            "text" => "Om",
            "url" => "om",
            "title" => "Om denna webbplats.",
        ],
        [
            "text" => "Styleväljare",
            "url" => "style",
            "title" => "Välj stylesheet.",
        ],
        [
            "text" => "Verktyg",
            "url" => "verktyg",
            "title" => "Verktyg och möjligheter för utveckling.",
        ],
    ],
];
