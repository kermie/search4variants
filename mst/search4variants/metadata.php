<?php

/**
 * Metadata version
 */
$sMetadataVersion = '1.0';

/**
 * Module information
 */
$aModule = array(
    'id'           => 'search4variants',
    'title'        => 'search4variants',
    'url'          => 'https://github.com/kermie/search4variants',
    'description'  => array(
        'en'=>'Enables store front search for variant product items.',
        'de'=>'Ermöglicht die Suche nach Variantenartikeln im Shop Frontend.',
        'ru'=>'Позволяет искать в вариантах.'
    ),
    'version'      => '0.9',
    'author'       => 'Marco, on the basis of the OXID forum and with the grateful help of my mates',
    'extend'       => array(
        'oxsearch'    => 'mst/search4variants/application/models/mst_search4variants_oxsearch'
    ),
);
