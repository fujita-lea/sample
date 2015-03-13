<?php
echo $this->Session->flash('Auth');
echo $this->Form->create('User', array('url'=>'add'));
echo $this->Form->input('User.username', array('label'=>'ユーザ名'));
echo $this->Form->input('User.password', array('label'=>'パスワード'));
echo $this->Form->end('ログイン');
