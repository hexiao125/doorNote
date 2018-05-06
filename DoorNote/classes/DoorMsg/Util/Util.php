<?php

namespace DoorMsg\Util;

/**
 * Some utility methods.
 */
final class Util {

    const SYMBOL_PREFIX = "DOORMSG_";

    private function __construct() {
 
    }

    /**
     * This function should be called first in any PHP page receiving a HTTP request.
     */
    public static function initRequest() {
        spl_autoload_register(function ($class) {
            require_once 'classes/' . \str_replace('\\', '/', $class) . '.php';
            echo $class;
        });

        session_start();
        self::defineConstants();
    }

    private static function defineConstants() {
        self::defineConstant('TIMESTAMP_KEY', 'timestamp');
        self::defineConstant('VIEWS', 'resources/views/');
        self::defineConstant('FRAGMENTS', 'resources/fragments/');
    }

    private static function defineConstant($param, $value) {
        define(self::SYMBOL_PREFIX . $param, $value);
    }

}
