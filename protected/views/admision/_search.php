<?php
/* @var $this AdmisionController */
/* @var $model Admision */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'encuentro_id'); ?>
		<?php echo $form->textField($model,'encuentro_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'paciente_id'); ?>
		<?php echo $form->textField($model,'paciente_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'encuentro_fecha'); ?>
		<?php echo $form->textField($model,'encuentro_fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alta'); ?>
		<?php echo $form->textField($model,'alta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_alta'); ?>
		<?php echo $form->textField($model,'fecha_alta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estatus'); ?>
		<?php echo $form->textField($model,'estatus',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'primer_nombre'); ?>
		<?php echo $form->textField($model,'primer_nombre',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'primer_apellido'); ?>
		<?php echo $form->textField($model,'primer_apellido',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->