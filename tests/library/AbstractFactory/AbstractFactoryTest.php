<?php

namespace src\tests\library\AbstractFactory;

use src\library\AbstractFactory\BloggsCommsManager;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase {
    public function testBloggsCommsManager()
	{
		$mgr = new BloggsCommsManager();
		print $mgr->getHeaderText();
		$m = $mgr->make(2)->encode();
		print $mgr->getFooterText();
		$this->assertEquals("Appoitment data encode in TtdCal format \n", $m);
	}
}