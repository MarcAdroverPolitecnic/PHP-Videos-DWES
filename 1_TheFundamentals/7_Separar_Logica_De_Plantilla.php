<?php

    $llibres = [
            [
                    'nom' => 'Do Androids Dream of Electric Sheep',
                    'autor' => 'Philip k. Dick',
                    'anyPublicacio' => '1968',
                    'urlDeCompra' => 'http://example.com'
            ],
            [
                    'nom' => 'Hail Mary',
                    'autor' => 'Andy Wair',
                    'anyPublicacio' => '2021',
                    'urlDeCompra' => 'http://example.com'
            ],
            [
                    'nom' => 'The Martian',
                    'autor' => 'Andy Wair',
                    'anyPublicacio' => '2011',
                    'urlDeCompra' => 'http://example.com'
            ]
    ];


    $llibresFiltrats = array_filter($llibres, function ($llibre) {
        return $llibre['anyPublicacio'] >= 2012;
    });

    require "index.view.php";


