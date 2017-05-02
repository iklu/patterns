<?php
namespace tests\library\Inheritance;
use src\library\Configuration\Configuration;
use PHPUnit\Framework\TestCase;


class ConfigurationTest extends TestCase
{
	public function testConfiguration()
	{
		try {
			$conf = new Configuration( dirname(__FILE__)."/conf01.xml" );
			$conf->set("user", "nwpass");
			print "\n\nuser: ".$conf->get('user')."\n";
			print "host: ".$conf->get('host')."\n";
			
			$conf->write();
		} catch ( FileException $e ) {
			// permissions issue or non-existent file
		} catch ( XmlException $e ) {
			// broken xml
		} catch ( ConfigurationException $e ) {
				// wrong kind of XML file
		} catch ( Exception $e ) {
				// backstop: should not be called
		}
	}
}

?>
