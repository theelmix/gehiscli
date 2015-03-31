<?php
/* @var $this CitasController */
/* @var $model Citas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'citas-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'paciente_id'); ?>
		<?php echo $form->dropDownList($model,'paciente_id', CHtml::listData(Paciente::model()->findAll(), 'id', 'primer_nombre', 'primer_apellido')); ?>
		<?php echo $form->error($model,'paciente_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php
			if ($model->fecha!='') {
			$model->fecha=date('d-m-Y',strtotime($model->fecha));
			}
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
				'model'=>$model,
				'attribute'=>'fecha',
				'value'=>$model->fecha,
				'language' => 'es',
				'htmlOptions' => array('readonly'=>"readonly"),
				'options'=>array(
				'autoSize'=>true,
				'defaultDate'=>$model->fecha,
				'dateFormat'=>'dd-mm-yy',
				'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
				'buttonImageOnly'=>true,
				'buttonText'=>'Fecha',
				'selectOtherMonths'=>true,
				'showAnim'=>'slide',
				'showButtonPanel'=>true,
				'showOn'=>'button',
				'showOtherMonths'=>true,
				'changeMonth' => 'true',
				'changeYear' => 'true',
				'minDate'=>'date("Y-m-d")', //fecha minima
				'maxDate'=> "+20Y",
				//fecha maxima
			),
		)); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hora'); ?>
		<?php echo $form->textField($model,'hora'); ?>
		<?php echo $form->error($model,'hora'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'especialidad'); ?>
		<?php echo $form->textField($model,'especialidad',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'especialidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'medico_id'); ?>
		<?php echo $form->dropDownList($model,'medico_id', CHtml::listData(Medicos::model()->findAll(), 'id', 'primer_nombre', 'primer_apellido')); ?>
		<?php echo $form->error($model,'medico_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'proposito'); ?>
		<?php echo $form->textArea($model,'proposito',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'proposito'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'urgente'); ?>
		<?php echo $form->textField($model,'urgente'); ?>
		<?php echo $form->error($model,'urgente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'recordatorio'); ?>
		<?php echo $form->textField($model,'recordatorio'); ?>
		<?php echo $form->error($model,'recordatorio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'recordatorio_email'); ?>
		<?php echo $form->textField($model,'recordatorio_email'); ?>
		<?php echo $form->error($model,'recordatorio_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'recordatorio_telefono'); ?>
		<?php echo $form->textField($model,'recordatorio_telefono'); ?>
		<?php echo $form->error($model,'recordatorio_telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'razon_cancelado'); ?>
		<?php echo $form->textField($model,'razon_cancelado',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'razon_cancelado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'encuentro_id'); ?>
		<?php echo $form->dropDownList($model,'encuentro_id', CHtml::listData(Admision::model()->findAll(), 'encuentro_id', 'encuentro_id')); ?>
		<?php echo $form->error($model,'encuentro_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estatus'); ?>
		<?php echo $form->textField($model,'estatus',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'estatus'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->