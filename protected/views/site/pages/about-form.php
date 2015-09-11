<?php
$this->pageTitle=Yii::app()->name . ' - About';
$this->breadcrumbs=array(
		'About'
);
?>
<h1>About</h1>


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array ('htmlOptions'=>array('enctype'=>'multipart/form-data'))); ?>
	

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo CHtml::activeTextArea($model,'content',array('rows'=>10, 'cols'=>70)); ?>
		
	</div>
	
	<input type="file" name="file"><br>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>
	

</div><!-- form -->

	
