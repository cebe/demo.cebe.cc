<?php

/**
 * This is the model class for table "posts".
 *
 * The followings are the available columns in table 'posts':
 * @property integer $postId
 * @property string $postText
 */
class Post extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Post the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'posts';
	}

	public function behaviors() {
		return array(
			'commentable' => array(
				'class' => 'comment.behaviors.CommentableBehavior',
				// name of the table created in last step
				'mapTable' => 'posts_comments_nm',
				// name of column to related model id in mapTable
				'mapRelatedColumn' => 'postId'
			),
       );
    }


	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('postText', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('postId, postText', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'postId' => 'Post',
			'postText' => 'Post Text',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('postId',$this->postId);
		$criteria->compare('postText',$this->postText,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
