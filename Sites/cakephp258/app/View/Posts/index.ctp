<?php
$this->assign('title', '動画一覧');

?>
<h2>動画</h2>

<ul>
<?php foreach ($posts as $post) : ?>
<li id="post_<?php echo h($post['Post']['id']);?>">
<?php
echo $this->Html->link($post['Post']['title'],'/posts/view/'.$post['Post']['id']);
echo '<br />';
echo $this->Html->link($this->Html->image('http://i.ytimg.com/vi/'.$post['Post']['movie_url'].'/default.jpg'), '/posts/view/'.$post['Post']['id'], array('escape'=>false));
?>

</li>
<?php endforeach; ?>
</ul>


<h2>add post</h2>
<?php echo $this->Html->link('add post', array('controller' => 'posts', 'action' => 'add'));
?>

<h2>ログイン</h2>
<?php
echo $this->Html->link('ログイン',array('controller'=>'logins','action'=>'index'));
?>
