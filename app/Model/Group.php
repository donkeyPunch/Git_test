<?php
App::uses('AppModel', 'Model');
/**
 * Group Model
 *
 * @property GroupsUser $GroupsUser
 */
class Group extends AppModel {

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'GroupsUser' => array(
			'className' => 'GroupsUser',
			'joinTable' => 'mailinggroups_users',
			'foreignKey' => 'group_id',
			'associationForeignKey' => 'groups_user_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
