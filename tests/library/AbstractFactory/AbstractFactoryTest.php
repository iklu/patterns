<?php

namespace src\tests\library\AbstractFactory;

use src\library\AbstractFactory\BloggsCommsManager;

class AbstractFactoryTest extends \PHPUnit_Framework_TestCase {
    public function testBloggsCommsManager()
	{
		$mgr = new BloggsCommsManager();
		print $mgr->getHeaderText();
		print $mgr->getApptEncoder()->encode();
		print $mgr->getTtdEncoder()->encode();
		print $mgr->getContactEncoder()->encode();
		print $mgr->getFooterText();
	}
}