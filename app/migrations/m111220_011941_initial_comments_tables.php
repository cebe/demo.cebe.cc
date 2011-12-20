<?php

class m111220_011941_initial_comments_tables extends CDbMigration
{
	public function up()
	{
		$this->createTable('users', array(
			'id' => 'pk',
			'name' => 'varchar(32)',
			'email' => 'varchar(64)',
			'createDate' => 'datetime NOT NULL',
		));

		$this->createTable('posts', array(
			'postId' => 'pk',
			'postText' => 'text',
		));

		$this->createTable('comments', array(
			'id' => 'pk',
			'message' => 'text',
			'userId' => 'int DEFAULT NULL',
			'createDate' => 'datetime NOT NULL',
			'FOREIGN KEY (userId) REFERENCES users(id) ON UPDATE CASCADE ON DELETE CASCADE',
		));

		$this->createTable('posts_comments_nm', array(
			'postId' => 'int',
			'commentId' => 'int',
			'PRIMARY KEY(postId, commentId)',
			'FOREIGN KEY (postId) REFERENCES posts(id) ON UPDATE CASCADE ON DELETE CASCADE',
			'FOREIGN KEY (commentId) REFERENCES comments(id) ON UPDATE CASCADE ON DELETE CASCADE',
		));
	}

	public function down()
	{
		$this->dropTable('posts_comments_nm');
		$this->dropTable('comments');
		$this->dropTable('posts');
		$this->dropTable('users');
	}
}
