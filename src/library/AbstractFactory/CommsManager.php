<?php

namespace src\library\AbstractFactory;

/**
 * The abstract CommsManager class defines the interface for generating each of the three products (ApptEncoder,
 * TtdEncoder, and ContactEncoder). You need to implement a concrete creator in order to actually generate the
 * concrete products for a particular family.
 */
abstract class CommsManager {
    const APPT = 1;
    const TTD = 2;
    const CONTACT = 3;
    
    abstract function getHeaderText();

    /**
     * Rather than create separate methods for each Factory Method, you can create a single make() method that uses a
     * flag argument to determine which object to return
     *
     * @param  $flag_int
     * @return void
     */
    abstract function make( $flag_int );
    
    abstract function getFooterText();
}