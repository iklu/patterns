<?php
namespace src\library\Decorator;

/**
*This class is a component of Decorator design pattern
*
*@author Ovidiu Dragoi
*/
class LogRequest extends DecorateProcess {

	/**
	* @param ProcessRequest $pr
	*/
	public function process( RequestHelper $req ) {
		print __CLASS__.": logging request\n";
		$this->processrequest->process( $req );
	} 
}