<?php
App::uses('Mailinggroup', 'Model');

/**
 * Mailinggroup Test Case
 *
 */
class MailinggroupTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.mailinggroup', 'app.user', 'app.role', 'app.mailinggroups_user', 'app.message', 'app.messages_user');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Mailinggroup = ClassRegistry::init('Mailinggroup');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Mailinggroup);

		parent::tearDown();
	}

}
