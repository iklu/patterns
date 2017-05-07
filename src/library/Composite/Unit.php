<?php
namespace src\library\Composite;



use src\library\Visitor\ArmyVisitor;

abstract class Unit
{

    protected $depth = 0;

    function getComposite()
    {
        return null;
    }
    abstract function bombardStrength();

    public function accept(ArmyVisitor $visitor)
    {
        $method = "visit".get_class( $this );
        $visitor->$method( $this );
    }
    
    protected function setDepth($depth)
    {
        $this->depth=$depth;
    }

    public function getDepth()
    {
        return $this->depth;
    }
}
