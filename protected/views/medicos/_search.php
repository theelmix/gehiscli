<?php
/* @var $this MedicosController */
/* @var $model Medicos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'especialidad'); ?>
		<?php echo $form->textField($model,'especialidad',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'primer_nombre'); ?>
		<?php echo $form->textField($model,'primer_nombre',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'segundo_nombre'); ?>
		<?php echo $form->textField($model,'segundo_nombre',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'primer_apellido'); ?>
		<?php echo $form->textField($model,'primer_apellido',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'segundo_apellido'); ?>
		<?php echo $form->textField($model,'segundo_apellido',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono_1_codigo'); ?>
		<?php echo $form->textField($model,'telefono_1_codigo',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono_1_numero'); ?>
		<?php echo $form->textField($model,'telefono_1_numero',array('size'=>7,'maxlength'=>7)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono_2_codigo'); ?>
		<?php echo $form->textField($model,'telefono_2_codigo',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono_2_numero'); ?>
		<?php echo $form->textField($model,'telefono_2_numero',array('size'=>7,'maxlength'=>7)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'celular_1_nr'); ?>
		<?php echo $form->textField($model,'celular_1_nr',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'celular_2_nr'); ?>
		<?php echo $form->textField($model,'celular_2_nr',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sexo'); ?>
		<?php echo $form->textField($model,'sexo',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_entrada'); ?>
		<?php echo $form->textField($model,'fecha_entrada'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_salida'); ?>
		<?php echo $form->textField($model,'fecha_salida'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->