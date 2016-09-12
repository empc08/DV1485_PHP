<?php

/**
 * Bootstrapping functions, essential and needed for Ramses to work together with some common helpers.
 */


/**
 * Default exception handler.
 */
function myExceptionHandler($exception) {
    echo "Ramses: uncaught exception: <p>" . $exception->getMessage() . "</p><pre>" . $exception->getTraceAsString(), "</pre>";
}
set_exception_handler('myExceptionHandler');


/**
 * Autoloader for classes.
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