<?php
namespace test\library\Observer;
use src\library\Observer\Login;
use src\library\Observer\SecurityMonitor;
/**
 * Created by PhpStorm.
 * User: ovidiu
 * Date: 10.03.2016
 * Time: 15:55
 */
class ObserverTest extends \PHPUnit_Framework_TestCase
{
    public function testLogin(){
        echo "TEST LOGIN ==========================================================>\n";
        $login = new Login();
        $login->attach( new SecurityMonitor());
        $login->handleLogin('ovidiu', 'constantin','186.052.766.6');
    }
}