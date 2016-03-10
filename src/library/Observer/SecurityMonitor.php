<?php
namespace src\library\Observer;
/**
 * Created by PhpStorm.
 * User: ovidiu
 * Date: 10.03.2016
 * Time: 15:47
 */
class SecurityMonitor implements iObserver
{
    function update( iObservable $observable ) {
        $status = $observable->getStatus();
        if ( $status[0] == Login::LOGIN_WRONG_PASS ) {
        // send mail to sysadmin
            print __CLASS__.":\tsending mail to sysadmin\n";
        }
    }
}