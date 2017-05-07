<?php

namespace tests\library\Visitor;

use src\library\Composite\Archer;
use src\library\Composite\LaserCannonUnit;
use src\library\Composite\Cavalry;
use src\library\Composite\Army;
use src\library\Visitor\TextDumpArmyVisitor;
use PHPUnit\Framework\TestCase;

class VisitorTest extends TestCase
{
    public function testArmyVisitor()
    {
        $main_army = new Army();
        $main_army->addUnit( new Archer() );
        $main_army->addUnit( new LaserCannonUnit() );
        $main_army->addUnit( new Cavalry() );
        $textdump = new TextDumpArmyVisitor();
        $main_army->accept( $textdump );
        print $textdump->getText();
    }
}
