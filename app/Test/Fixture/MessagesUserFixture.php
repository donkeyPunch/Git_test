<?php
/**
 * MessagesUserFixture
 *
 */
class MessagesUserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'receiver_id' => array('type' => 'integer', 'null' => true),
		'status_id' => array('type' => 'integer', 'null' => true),
		'created' => array('type' => 'datetime', 'null' => true),
		'modified' => array('type' => 'datetime', 'null' => true),
		'message_id' => array('type' => 'integer', 'null' => true),
		'sender_id' => array('type' => 'integer', 'null' => true),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'receiver_id' => 1,
			'status_id' => 1,
			'created' => '2012-08-22 10:44:22',
			'modified' => '2012-08-22 10:44:22',
			'message_id' => 1,
			'sender_id' => 1
		),
	);
}
