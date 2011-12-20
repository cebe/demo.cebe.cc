<?php

class CommentDemoController extends Controller
{
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		$model = Post::model()->findByPk(1);
		if ($model === null) {
			$model = new Post();
			$model->postText = 'Lorem ipsum';
			$model->save();
		}

		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index', array(
			'model' => $model
		));
	}
}

