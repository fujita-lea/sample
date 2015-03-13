<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 */
class UsersController extends AppController {

/**
 * Scaffold
 *
 * @var mixed
 */
	//public $scaffold;

        public function index(){

                $arr = array(
                        array(
                                'username' => 'ad',
                                'role'     => 'master',
                        ),
                        array(
                                'username' => 'admin',
                                'role'     => 'master',
                        ),
                );
                $arr = $this->User->find('all');

                $this->set($arr);
        }

}
