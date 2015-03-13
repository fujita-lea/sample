<?php
/**
 * CaraFixture
 *
 */
class CaraFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'hp' => array('type' => 'integer', 'null' => false, 'default' => '0', 'unsigned' => false),
		'mhp' => array('type' => 'integer', 'null' => false, 'default' => '0', 'unsigned' => false),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'deleted' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'hp' => 1,
			'mhp' => 1,
			'modified' => '2015-02-17 21:39:44',
			'created' => '2015-02-17 21:39:44',
			'deleted' => '2015-02-17 21:39:44'
		),
	);

}
