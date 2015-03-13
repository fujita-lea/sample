<?php
App::uses('UsersController', 'Controller');

/**
 * UsersController Test Case
 *
 */
class UsersControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
	);

        public function testIndex(){
                $expected = array(
                        array(
                                'username' => 'ad',
                                'role'     => 'master',
                        ),
                        array(
                                'username' => 'admin',
                                'role'     => 'master',
                        ),
                        
                );

                $this->testAction(
                        '/users/index',
                        array(
                                'data'  => array(),
                                'return'=> 'vars'
                        )
                );

                $this->assertEquals($expected, $this->vars);

        }
}
