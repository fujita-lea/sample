<h2>add post</h2>


<?php
echo $this->Form->create('Post');
echo $this->Form->input('title');
echo $this->Form->input('body', array('rows' => 3));
echo $this->Form->input('movie_url');
echo $this->Form->end('登録する');