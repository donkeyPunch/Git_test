<?php
App::uses('MessagesUser', 'Model');

/**
 * MessagesUser Test Case
 *
 */
class MessagesUserTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.messages_user', 'app.receiver', 'app.status', 'app.message', 'app.sender');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MessagesUser = ClassRegistry::init('MessagesUser');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MessagesUser);

		parent::tearDown();
	}

}
