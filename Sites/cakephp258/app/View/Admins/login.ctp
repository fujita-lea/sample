<?php

echo $this->Form->create('User', array('url'=>'login'));
echo $this->Form->input('User.username');
echo $this->Form->input('User.password');
echo $this->Form->hidden('User.role', array('value'=>'user'));
echo $this->Form->end('ログイン');
