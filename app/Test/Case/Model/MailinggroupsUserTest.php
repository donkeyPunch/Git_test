<?php
App::uses('MailinggroupsUser', 'Model');

/**
 * MailinggroupsUser Test Case
 *
 */
class MailinggroupsUserTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.mailinggroups_user', 'app.creator', 'app.member', 'app.mailinggroup', 'app.user', 'app.role', 'app.message', 'app.messages_user');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MailinggroupsUser = ClassRegistry::init('MailinggroupsUser');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MailinggroupsUser);

		parent::tearDown();
	}

}
