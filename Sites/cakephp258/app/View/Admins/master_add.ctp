<?php
echo $this->Session->flash('Auth');
echo $this->Form->create('User', array('url'=>'masterAdd'));
echo $this->Form->input('User.username', array('label'=>'ユーザ名'));
echo $this->Form->input('User.password', array('label'=>'パスワード'));
echo $this->Form->end('登録');
