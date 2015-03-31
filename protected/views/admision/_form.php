<?php
/* @var $this AdmisionController */
/* @var $model Admision */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'admision-form',
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
		<?php echo $form->labelEx($model,'encuentro_fecha'); ?>
		<?php
			if ($model->encuentro_fecha!='') {
			$model->encuentro_fecha=date('d-m-Y',strtotime($model->encuentro_fecha));
			}
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
				'model'=>$model,
				'attribute'=>'encuentro_fecha',
				'value'=>$model->encuentro_fecha,
				'language' => 'es',
				'htmlOptions' => array('readonly'=>"readonly"),
				'options'=>array(
				'autoSize'=>true,
				'defaultDate'=>$model->encuentro_fecha,
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
		<?php echo $form->error($model,'encuentro_fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'encuentro_tipo'); ?>
		<?php echo $form->textField($model,'encuentro_tipo',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'encuentro_tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hora'); ?>
		<?php echo $form->textField($model,'hora'); ?>
		<?php echo $form->error($model,'hora'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'diagnostico_referido'); ?>
		<?php echo $form->textField($model,'diagnostico_referido',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'diagnostico_referido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'terapia_recomendada_referido'); ?>
		<?php echo $form->textField($model,'terapia_recomendada_referido',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'terapia_recomendada_referido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'medico_referido'); ?>
		<?php echo $form->textField($model,'medico_referido',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'medico_referido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'institucion_referido'); ?>
		<?php echo $form->textField($model,'institucion_referido',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'institucion_referido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'notas_referido'); ?>
		<?php echo $form->textArea($model,'notas_referido',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'notas_referido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'compania_seguros'); ?>
		<?php echo $form->textField($model,'compania_seguros',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'compania_seguros'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'compania_seguros2'); ?>
		<?php echo $form->textField($model,'compania_seguros2',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'compania_seguros2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contacto_paciente_nombre'); ?>
		<?php echo $form->textField($model,'contacto_paciente_nombre',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'contacto_paciente_nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contacto_paciente_apellido'); ?>
		<?php echo $form->textField($model,'contacto_paciente_apellido',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'contacto_paciente_apellido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contacto_relation'); ?>
		<?php echo $form->textField($model,'contacto_relation',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'contacto_relation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numero_habitacion'); ?>
		<?php echo $form->textField($model,'numero_habitacion'); ?>
		<?php echo $form->error($model,'numero_habitacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'doctor_consulta'); ?>
		<?php echo $form->dropDownList($model,'doctor_consulta', CHtml::listData(Medicos::model()->findAll(), 'id', 'primer_nombre', 'primer_apellido')); ?>
		<?php echo $form->error($model,'doctor_consulta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'servicios_extras'); ?>
		<?php echo $form->textField($model,'servicios_extras',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'servicios_extras'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alta (1 Si/2 no)'); ?>
		<?php echo $form->textField($model,'alta'); ?>
		<?php echo $form->error($model,'alta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_alta'); ?>
		<?php
			if ($model->fecha_alta!='') {
			$model->fecha_alta=date('d-m-Y',strtotime($model->fecha_alta));
			}
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
				'model'=>$model,
				'attribute'=>'fecha_alta',
				'value'=>$model->fecha_alta,
				'language' => 'es',
				'htmlOptions' => array('readonly'=>"readonly"),
				'options'=>array(
				'autoSize'=>true,
				'defaultDate'=>$model->fecha_alta,
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
		<?php echo $form->error($model,'fecha_alta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hora_alta'); ?>
		<?php echo $form->textField($model,'hora_alta'); ?>
		<?php echo $form->error($model,'hora_alta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_revision'); ?>
		<?php
			if ($model->fecha_revision!='') {
			$model->fecha_revision=date('d-m-Y',strtotime($model->fecha_revision));
			}
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
				'model'=>$model,
				'attribute'=>'fecha_revision',
				'value'=>$model->fecha_revision,
				'language' => 'es',
				'htmlOptions' => array('readonly'=>"readonly"),
				'options'=>array(
				'autoSize'=>true,
				'defaultDate'=>$model->fecha_revision,
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
		<?php echo $form->error($model,'fecha_revision'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'responsable_revision'); ?>
		<?php echo $form->dropDownList($model,'responsable_revision', CHtml::listData(Medicos::model()->findAll(), 'id', 'primer_nombre', 'primer_apellido')); ?>
		<?php echo $form->error($model,'responsable_revision'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'notas_encuentro'); ?>
		<?php echo $form->textArea($model,'notas_encuentro',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'notas_encuentro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estatus'); ?>
		<?php echo $form->textField($model,'estatus',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'estatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'primer_nombre'); ?>
		<?php echo $form->textField($model,'primer_nombre',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'primer_nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'primer_apellido'); ?>
		<?php echo $form->textField($model,'primer_apellido',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'primer_apellido'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->