<?php

class ValidatePasswordTest extends PHPUnit_Framework_TestCase {

	public function testValidateLength() {
		$valPass = new ValidatePassword();
		//fwrite(STDOUT, __METHOD__ . "\n");
		$this->assertTrue($valPass->validLength('Passwprd'));
	}	
}
