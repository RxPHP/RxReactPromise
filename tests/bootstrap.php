<?php
/**
 * Find the auto loader file
 */
$locations = [
    __DIR__ . '/../',
    __DIR__ . '/../../',
    __DIR__ . '/../../../',
    __DIR__ . '/../../../../',
];


foreach ($locations as $location) {

    $file = $location . 'vendor/autoload.php';

    if (file_exists($file)) {
        $loader = require_once $file;
        $loader->addPsr4('Rx\\', __DIR__);
        break;
    }
}

//RxPHP test files
foreach ($locations as $location) {
    $file = $location . 'vendor/reactivex/rxphp/test/helper-functions.php';
    if (file_exists($file)) {
        $loader->add('Rx', $location . 'vendor/reactivex/rxphp/test/');
        require_once $file;
        break;
    }
}
