<?php
namespace tests\library\Singleton;
use src\library\Singleton\Preferences;
use PHPUnit\Framework\TestCase;

class LessonTest extends TestCase
{
	public function testPreferences()
	{
		$pref = Preferences::getInstance();
		$pref->setProperty("name", "dragoi");
		unset ($pref);

		$name = Preferences::getInstance();
		print $name->getProperty("name");
		
		$this->assertEquals("dragoi", $name->getProperty("name"));
	}
}
