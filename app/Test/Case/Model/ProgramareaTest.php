<?php
App::uses('Programarea', 'Model');

/**
 * Programarea Test Case
 *
 */
class ProgramareaTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.programarea');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Programarea = ClassRegistry::init('Programarea');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Programarea);

		parent::tearDown();
	}

}
