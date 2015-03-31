<?php
/* @var $this QuirofanoController */
/* @var $model Quirofano */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'quirofano-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'nombre'); ?>
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
		<?php echo $form->labelEx($model,'actividad'); ?>
		<?php echo $form->textField($model,'actividad',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'actividad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_responsable'); ?>
		<?php echo $form->textField($model,'id_responsable'); ?>
		<?php echo $form->error($model,'id_responsable'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_paciente'); ?>
		<?php echo $form->textField($model,'id_paciente'); ?>
		<?php echo $form->error($model,'id_paciente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hora'); ?>
		<?php echo $form->textField($model,'hora'); ?>
		<?php echo $form->error($model,'hora'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cierre_temporal'); ?>
		<?php echo $form->textField($model,'cierre_temporal'); ?>
		<?php echo $form->error($model,'cierre_temporal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textArea($model,'descripcion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'informacion'); ?>
		<?php echo $form->textArea($model,'informacion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'informacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'notas_estatus'); ?>
		<?php echo $form->textField($model,'notas_estatus',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'notas_estatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'historia'); ?>
		<?php echo $form->textArea($model,'historia',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'historia'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->