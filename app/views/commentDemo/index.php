<?php $this->pageTitle='yiiext comment-module demo' ?>

<h1>This is the demo page for <i>yiiext comment-module</i></h1>

<p>This extension allows you to add comments to your applications models. You can add comments to any AR Model you like.</p>

<p>
	You can find the code on <a href="https://github.com/yiiext/comment-module">github.com</a>
	and readme on <a href="http://yiiext.github.com/extensions/comment-module/index.html">yiiext.github.com</a>.
	The extension is also on <a href="http://www.yiiframework.com/extension/comment-module/">yiiframework.com</a> where you can press thumbs up, if you like it.
</p>

<p>
	Since comment-module does not support guest comments in the current version
	you have to <?php echo CHtml::link('log in', array('site/login')); ?> to leave a comment.<br />
	Planned features:
</p>
<ul>
	<li>Guest comments</li>
	<li>Edit/Delete comments</li>
	<li>More events to hook into functionallity of this module</li>
	<li>If you want more, <a href="https://github.com/yiiext/comment-module/issues">tell me</a>!</li>
</ul>


<h1>Comments</h1>

<?php $this->renderPartial('comment.views.comment.commentList', array(
    'model'=>$model
)); ?>

