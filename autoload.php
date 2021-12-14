
<?php

/**
 * Autoload Classes
 */
const CLASSES_SOURCES = [
    'app',
    'app/facade',
    'app/models',
    'app/controllers',
    'app/controllers/auth',
    'app/views',
    'app/views/auth'
];

function autoloadClass( $class ) {

    $sources = array_map( function($folder) use($class) {

        return __DIR__ . '/' . $folder . '/' . $class . '.php';

    }, CLASSES_SOURCES );

    foreach($sources as $s) {

        if (file_exists( $s ) ) {
            require_once ($s);
        }
    }

}

spl_autoload_register( 'autoloadClass' );

?>