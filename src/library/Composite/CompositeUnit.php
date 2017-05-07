<?php
namespace src\library\Composite;


use src\library\Visitor\ArmyVisitor;

abstract class CompositeUnit extends Unit
{
    protected $units = array();
    
    public function getComposite()
    {
        return $this;
    }
    public function addUnit(Unit $unit)
    {
        foreach ($this->units as $thisunit) {
            if ($unit === $thisunit) {
                       return;
            }
        }
        $unit->setDepth($this->depth+1);
        $this->units[] = $unit;
    }

    public function accept(ArmyVisitor $visitor)
    {
//        $method = "visit".get_class( $this );
//        $visitor->$method( $this );
        foreach ($this->units as $thisunit) {
            $thisunit->accept( $visitor );
        }
    }
    public function removeUnit(Unit $unit)
    {
        $this->units = array_udiff($this->units, array($unit), function ($a, $b) {
            return ($a === $b)?0:1;
        });
    }
}
