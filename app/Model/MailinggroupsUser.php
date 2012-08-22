<?php
App::uses('AppModel', 'Model');
/**
 * MailinggroupsUser Model
 *
 * @property Creator $Creator
 * @property Member $Member
 * @property Mailinggroup $Mailinggroup
 */
class MailinggroupsUser extends AppModel {

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Creator' => array(
			'className' => 'Creator',
			'foreignKey' => 'creator_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Member' => array(
			'className' => 'Member',
			'foreignKey' => 'member_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Mailinggroup' => array(
			'className' => 'Mailinggroup',
			'foreignKey' => 'mailinggroup_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
