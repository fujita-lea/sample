<?php

class AdminsController extends AppController
{

	public $helpers = array('Html', 'Form');
	public $uses = array('User', 'Post');
	public $components = array(
		'Auth'=> array(
			'authenticate' => array(
				'Form' => array(
					'userModel' => 'User',
					'fields' => array(
						'username' => 'username',
						'password' => 'password'
					)
				)
			),
			'loginRedirect' => array(
				'controller' => 'admins',
				'action' => 'mbtop',
			),
			'logoutRedirect' => array(
				'controller' => 'posts',
				'action' => 'index',
			),
			'loginAction' => array(
				'controller' => 'admins',
				'action' => 'login',
			),
			'authErr' => '名前を入力して下しあ'
		),
	);

	public function beforeFilter(){
		$this->Auth->allow('login', 'masterAdd');
		AuthComponent::$sessionKey = 'Auth.master';
		$this->set('master',$this->Auth->user());
	}

	public function login(){
		if($this->request->is('post')){
			// この画面からは一般ユーザのみ認証
			$this->Auth->authenticate = array('Form' => Array('scope' => array('role' => 'master')));
			if($this->Auth->login()){
				return $this->redirect($this->Auth->redirect());
			}else{
				$this->Session->setFlash(__('ユーザ名かパスワードが違います'), 'default', array(), 'auth');
			}
		}
	}

	public function mbtop(){
	}

	public function logout(){
            $this->Auth->logout();
            $this->Session->destroy(); //セッションを完全削除
            $this->Session->setFlash(__('ログアウトしました'));
            $this->redirect(array('action' => 'login'));
        }

	public function add_post(){
		if($this->request->is('post')){
			$this->Post->set($this->request->data);
			$this->Post->set(array('user_id' => $this->Auth->user('id')));
			if($this->Post->validates()){
				if($this->Post->save()){
					$this->Session->setFlash('success');

				}else{
					$this->Session->setFlash('failed');

				}
			}
		}
	}

	public function masterAdd(){
		if($this->request->is('post')){
			$insertData = $this->request->data;
			$insertData['User']['role'] = 'master';
			$insertData['User']['password'] = AuthComponent::password($insertData['User']['password']);
			$this->User->set($insertData);
			if($this->User->save()){
				$this->Session->setFlash('succes!!!!');
				if($this->Auth->login()){
					$this->redirect($this->Auth->redirect());
				}else{

				}
			}else{
				$this->Session->setFlash('failed');

			}
		}
	}
}
