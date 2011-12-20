<?php
$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>
<div style="float: left; width: 40%;">

<h1>Register</h1>

This is a demo site, so to have an account, all you need is an email address
and a username. E-Mail-Addresses do not have to be real.

<?php $this->renderPartial('_register', array('model'=>$user)); ?>

</div>
<div style="float: left; width: 50%; margin-left: 50px;">

<h1>Login</h1>

<p>Enter your email-address and fill out the captcha field to login in:</p>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
//	'enableClientValidation'=>true,
//	'clientOptions'=>array(
//		'validateOnSubmit'=>true,
//	),
)); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

	<?php if(CCaptcha::checkRequirements()): ?>
	<div class="row">
		<?php echo $form->labelEx($model,'verifyCode'); ?>
		<?php echo $form->textField($model,'verifyCode'); ?>
		<div style="float: right;">
		<?php $this->widget('CCaptcha'); ?>
		</div>
		<div class="hint">Please enter the letters as they are shown in the image on the right hand side.
		<br/>Letters are not case-sensitive.</div>
		<?php echo $form->error($model,'verifyCode'); ?>
	</div>
	<?php endif; ?>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Login'); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->

</div>
