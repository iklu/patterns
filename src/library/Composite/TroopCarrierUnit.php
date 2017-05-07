<?php
/**
 * Created by PhpStorm.
 * User: ovidiu
 * Date: 07-May-17
 * Time: 21:02
 */

namespace src\library\Composite;


class TroopCarrierUnit extends Unit
{
    /**
     * implements abstract method bombardStrength
     */
    public function bombardStrength()
    {
        return 15;
    }
}