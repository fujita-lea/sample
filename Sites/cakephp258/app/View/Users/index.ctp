<?php

echo $this->Form->create('users');
echo $this->Form->input('username');
echo $this->Form->input('password');
echo $this->Form->end('ログイン');
