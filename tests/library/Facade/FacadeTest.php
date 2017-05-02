<?php
namespace tests\library\Facade;
use src\library\Facade\ProductFacade;
use PHPUnit\Framework\TestCase;

/**
 * Created by PhpStorm.
 * User: ovidiu
 * Date: 22.03.2016
 * Time: 11:13
 */
class FacadeTest extends  TestCase
{
    public function testProductFacade() {
        $facade = new ProductFacade( 'test.txt' );
        $product = $facade->getProduct(234);

        print_r($product);
    }
}