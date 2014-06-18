<?php
/* @var $this InfluencersController */
/* @var $model Influencers */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'influencers-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>120,'disabled'=>true)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'firstname'); ?>
		<?php echo $form->textField($model,'firstname',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'firstname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'photoprofile'); ?>
		<?php echo $form->textField($model,'photoprofile',array('size'=>60,'maxlength'=>120)); ?>
                <?php echo $form->fileField($model, 'photoprofile');?>
		<?php echo $form->error($model,'photoprofile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gender'); ?>
		<?php echo $form->textField($model,'gender',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'birthday'); ?>
		<?php echo $form->textField($model,'birthday'); ?>
		<?php echo $form->error($model,'birthday'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'birthmonth'); ?>
		<?php echo $form->textField($model,'birthmonth'); ?>
		<?php echo $form->error($model,'birthmonth'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'birthyear'); ?>
		<?php echo $form->textField($model,'birthyear'); ?>
		<?php echo $form->error($model,'birthyear'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'location'); ?>
		<?php echo $form->textField($model,'location',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'location'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'website'); ?>
		<?php echo $form->textField($model,'website',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'website'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'biodescription'); ?>
		<?php echo $form->textField($model,'biodescription',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'biodescription'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'influencerskills'); ?>
		<?php echo $form->textField($model,'influencerskills',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'influencerskills'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'audiencyskills'); ?>
		<?php echo $form->textField($model,'audiencyskills',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'audiencyskills'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'brands'); ?>
		<?php echo $form->textField($model,'brands',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'brands'); ?>
	</div>

	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->