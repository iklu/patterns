<?php

namespace src\library\Visitor;
use src\library\Composite\Army;
use src\library\Composite\TroopCarrierUnit;
use src\library\Composite\Unit;
use src\library\Composite\Archer;
use src\library\Composite\Cavalry;
use src\library\Composite\LaserCannonUnit;

abstract class ArmyVisitor
{
    abstract function visit(Unit $node);
    
    public function visitArcher(Archer $node)
    {
        $this->visit( $node );
    }
        
    public function visitCavalry(Cavalry $node)
    {
        $this->visit( $node );
    }
    
    public function visitLaserCannonUnit(LaserCannonUnit $node)
    {
        $this->visit( $node );
    }

    public function visitTroopCarrierUnit(TroopCarrierUnit $node)
    {
        $this->visit( $node );
    }
    
    public function visitArmy(Army $node)
    {
        $this->visit( $node );
    }
}
