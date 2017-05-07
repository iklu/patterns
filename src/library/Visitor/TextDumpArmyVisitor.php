<?php
namespace src\library\Visitor;

use src\library\Composite\Unit;

class TextDumpArmyVisitor extends ArmyVisitor
{
    private $text="";

    public function visit(Unit $node)
    {
        $txt = "";
        $pad = 4*$node->getDepth();
        $txt .= sprintf( "%{$pad}s", "" );
        $txt .= get_class($node).": ";
        $txt .= "bombard: ".$node->bombardStrength()."\n";
        $this->text .= $txt;
    }
    function getText()
    {
        return $this->text;
    }
}
