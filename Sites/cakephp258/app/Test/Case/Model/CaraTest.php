<?php
App::uses('Cara', 'Model');

/**
 * Cara Test Case
 *
 */
class CaraTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cara'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Cara = ClassRegistry::init('Cara');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Cara);

		parent::tearDown();
	}

	public function testRecoverHp(){
		$cara = array(
			'Cara' => array(
				'id'	=> 1,
				'name'	=> 'みなみ',
				'hp'	=> 3,
				'mhp'	=> 100,
			)
		);
		$expected = array(
			'Cara' => array(
				'id'	=> 1,
				'name'	=> 'みなみ',
				'hp'	=> 100,
				'mhp'	=> 100,
			)
		);

		$result = $this->Cara->recoverHp($cara);

		$this->assertEquals($expected, $result);
	}

}
