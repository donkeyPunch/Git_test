<?php
/**
 * MailinggroupsUserFixture
 *
 */
class MailinggroupsUserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'creator_id' => array('type' => 'integer', 'null' => true),
		'member_id' => array('type' => 'integer', 'null' => true),
		'mailinggroup_id' => array('type' => 'integer', 'null' => true),
		'created' => array('type' => 'datetime', 'null' => true),
		'modified' => array('type' => 'datetime', 'null' => true),
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
			'creator_id' => 1,
			'member_id' => 1,
			'mailinggroup_id' => 1,
			'created' => '2012-08-22 10:43:57',
			'modified' => '2012-08-22 10:43:57'
		),
	);
}
