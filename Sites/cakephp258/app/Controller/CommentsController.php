<?php

class CommentsController extends AppController
{

	public $helpers = array('Html', 'Form');

	public function add(){

		if($this->request->is('post')){
			if($this->Comment->save($this->request->data)){
				$this->Session->setFlash('success!');
				$this->redirect(array('controller'=>'posts','action'=>'view',$this->data['Comment']['post_id']));


			}
		}
	}

	public function delete($id = null){

	}
}

?>
