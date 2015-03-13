<?php
$this->assign('title', '動画一覧');
?>
<h2><?php echo h($post['Post']['title']); ?></h2>
<p><?php echo nl2br(h($post['Post']['body'])); ?></p>

<?php echo '<iframe width="'.YT_WIDTH.'" height="'.YT_HEIGHT.'" src="'.YT_BASE_URL.$post['Post']['movie_url'].'" frameborder="0" allowfullscreen></iframe>' ?>
<h2>comment</h2>
<ul>
<?php if(isset($post['Comment'])): ?>
<?php foreach($post['Comment'] as $comment): ?>
<li><?php echo h($comment['body']); ?> by <?php echo h($comment['commenter']); ?></li>
<?php endforeach; ?>
<?php endif; ?>
</ul>

<br />
<?php
echo $this->Form->create('Comment', array('action'=>'add'));
echo $this->Form->input('commenter');
echo $this->Form->input('body', array('rows'=>3));
echo $this->Form->input('Comment.post_id', array('type'=>'hidden','value'=>$post['Post']['id']));
echo $this->Form->end('send!');

