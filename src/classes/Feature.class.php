<?php declare(strict_types=1);

/**
 * Documentation:
 *  -> This Class is a Singleton.
 *      - therefor the constructor is private and you can only get hand
 *        of the object $instance via getInstance()
 */

class Feature {
    //* Variable
    private static $instance = null;

    //* ctor
    private function __construct(){}

    //* Getter and Setter
    public static function getInstance(): Feature 
    {
        // Check if Feature is already initialized
        if(self::$instance === null) { self::$instance = new Feature(); }
        
        // Returns the one and only existing Object of Typ Feature
        return self::$instance;
    }
}