<?php
App::uses('AppModel', 'Model');
/**
 * Post Model
 *
 */
class User extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	//public $displayField = 'title';

	public $validate = array(
		'username' => array(
			'notempty' => array(
				'rule' => array('notempty'),
			),
			'alphaNumeric' => array(
				'rule' => array('alphaNumeric'),
				'message' => '半角英数のみ',
			),
			'isUnique' => array(
				'rule' => array('isUnique'),
				'message' => '登録済みのIDです',
				'on' => 'create'
			)
		),
		'password' => array(
			'alphaNumeric' => array(
				'rule' => array('alphaNumeric'),
			),
			'notempty' => array(
				'rule' => array('notempty'),
			),
		),
		'role' => array(
			'alphaNumeric' => array(
				'rule' => array('alphaNumeric'),
			),
			'notempty' => array(
				'rule' => array('notempty'),
			),
		)
	);

}
