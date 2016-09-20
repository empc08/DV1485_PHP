<?php

/**
 * Bootstrapping functions, essential and needed for Ramses to work together with some common helpers.
 */


/**
 * Default exception handler.
 * @param object $exception The exception that has occurred.
 */
function myExceptionHandler($exception) {
    echo "Ramses: uncaught exception: <p>" . $exception->getMessage() . "</p><pre>" . $exception->getTraceAsString(), "</pre>";
}
set_exception_handler('myExceptionHandler');


/**
 * Dumps the contents of an array to stdout.
 * @param array $array The array which contents should be dumped.
 */
function dump($array) {
  echo "<pre>" . htmlentities(print_r($array, 1)) . "</pre>";
}


/**
 * Autoloader for classes.
 * @param string $class The name of the class that should be loaded.
 */
function myAutoloader($class) {
    $path = RAMSES_INSTALL_PATH . "/src/{$class}/{$class}.php";
    
    if (is_file($path)) {
        include($path);
    } else {
        throw new Exception("Classfile '{$class}' does not exist.");
    }
}
spl_autoload_register('myAutoloader');