<?php
/* @var $this HistoriaClinicaController */
/* @var $model HistoriaClinica */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'historia-clinica-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'encuentro_id'); ?>
		<?php echo $form->dropDownList($model,'paciente_id',
							CHtml::listData(Admision::model()->findAll(),
							'encuentro_id', 'encuentro_id')); ?>
		<?php echo $form->error($model,'encuentro_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'paciente_id'); ?>
		<?php echo $form->dropDownList($model,'paciente_id',
							CHtml::listData(Paciente::model()->findAll(),
							'id', 'primer_nombre', 'primer_apellido')); ?>
		<?php echo $form->error($model,'paciente_id'); ?>
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

	<div class="row">
		<?php echo $form->labelEx($model,'reporte'); ?>
		<?php echo $form->textArea($model,'reporte',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'reporte'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reporte_fecha'); ?>
		<?php
			if ($model->reporte_fecha!='') {
			$model->reporte_fecha=date('d-m-Y',strtotime($model->reporte_fecha));
			}
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
				'model'=>$model,
				'attribute'=>'reporte_fecha',
				'value'=>$model->reporte_fecha,
				'language' => 'es',
				'htmlOptions' => array('readonly'=>"readonly"),
				'options'=>array(
				'autoSize'=>true,
				'defaultDate'=>$model->reporte_fecha,
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
		<?php echo $form->error($model,'reporte_fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reporte_hora'); ?>
		<?php echo $form->textField($model,'reporte_hora'); ?>
		<?php echo $form->error($model,'reporte_hora'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_comienzo_tratamiento'); ?>
		<?php
			if ($model->fecha_comienzo_tratamiento!='') {
			$model->fecha_comienzo_tratamiento=date('d-m-Y',strtotime($model->fecha_comienzo_tratamiento));
			}
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
				'model'=>$model,
				'attribute'=>'fecha_comienzo_tratamiento',
				'value'=>$model->fecha_comienzo_tratamiento,
				'language' => 'es',
				'htmlOptions' => array('readonly'=>"readonly"),
				'options'=>array(
				'autoSize'=>true,
				'defaultDate'=>$model->fecha_comienzo_tratamiento,
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
		<?php echo $form->error($model,'fecha_comienzo_tratamiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_tratamiento'); ?>
		<?php echo $form->textField($model,'tipo_tratamiento',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'tipo_tratamiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'medicamentos'); ?>
		<?php echo $form->textArea($model,'medicamentos',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'medicamentos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dosis'); ?>
		<?php echo $form->textArea($model,'dosis',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'dosis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'aplicado_por'); ?>
		<?php echo $form->textField($model,'aplicado_por',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'aplicado_por'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'notas'); ?>
		<?php echo $form->textArea($model,'notas',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'notas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'notas_auxiliares'); ?>
		<?php echo $form->textField($model,'notas_auxiliares',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'notas_auxiliares'); ?>
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
		<?php echo $form->labelEx($model,'quirofano_id'); ?>
		<?php echo $form->dropDownList($model,'enfermera',
							CHtml::listData(Quirofano::model()->findAll(),
							'id', 'nombre', '')); ?>
		<?php echo $form->error($model,'quirofano_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_cirugia'); ?>
		<?php
			if ($model->fecha_cirugia!='') {
			$model->fecha_cirugia=date('d-m-Y',strtotime($model->fecha_cirugia));
			}
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
				'model'=>$model,
				'attribute'=>'fecha_cirugia',
				'value'=>$model->fecha_cirugia,
				'language' => 'es',
				//'htmlOptions' => array('readonly'=>"readonly"),
				'options'=>array(
				'autoSize'=>true,
				'defaultDate'=>$model->fecha_cirugia,
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
		<?php echo $form->error($model,'fecha_cirugia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'diagnostico'); ?>
		<?php echo $form->textArea($model,'diagnostico',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'diagnostico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cirujano'); ?>
		<?php echo $form->textField($model,'cirujano',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'cirujano'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'asistente'); ?>
		<?php echo $form->textField($model,'asistente',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'asistente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'medico_prescripcion'); ?>
		<?php echo $form->dropDownList($model,'enfermera',
							CHtml::listData(Medicos::model()->findAll(),
							'id', 'primer_nombre', 'primer_apellido')); ?>
		<?php echo $form->error($model,'medico_prescripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'enfermera'); ?>

		<?php echo $form->dropDownList($model,'enfermera',
							CHtml::listData(Enfermeras::model()->findAll(),
							'id', 'primer_nombre', 'primer_apellido')); ?>
		<?php echo $form->error($model,'enfermera'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'enfermera_rotativa'); ?>
		<?php echo $form->textArea($model,'enfermera_rotativa',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'enfermera_rotativa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'anestesia'); ?>
		<?php echo $form->textField($model,'anestesia',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'anestesia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'terapia'); ?>
		<?php echo $form->textArea($model,'terapia',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'terapia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'informacion_resultados'); ?>
		<?php echo $form->textArea($model,'informacion_resultados',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'informacion_resultados'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hora_entrada'); ?>
		<?php echo $form->textField($model,'hora_entrada'); ?>
		<?php echo $form->error($model,'hora_entrada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hora_descanso'); ?>
		<?php echo $form->textField($model,'hora_descanso'); ?>
		<?php echo $form->error($model,'hora_descanso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hora_cierre'); ?>
		<?php echo $form->textField($model,'hora_cierre'); ?>
		<?php echo $form->error($model,'hora_cierre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hora_finalizacion'); ?>
		<?php echo $form->textField($model,'hora_finalizacion'); ?>
		<?php echo $form->error($model,'hora_finalizacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tiempo_vendaje'); ?>
		<?php echo $form->textArea($model,'tiempo_vendaje',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'tiempo_vendaje'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reposo'); ?>
		<?php echo $form->textArea($model,'reposo',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'reposo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_prescripcion'); ?>
		<?php
			if ($model->fecha_prescripcion!='') {
			$model->fecha_prescripcion=date('d-m-Y',strtotime($model->fecha_prescripcion));
			}
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
				'model'=>$model,
				'attribute'=>'fecha_prescripcion',
				'value'=>$model->fecha_prescripcion,
				'language' => 'es',
				'htmlOptions' => array('readonly'=>"readonly"),
				'options'=>array(
				'autoSize'=>true,
				'defaultDate'=>$model->fecha_prescripcion,
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
		<?php echo $form->error($model,'fecha_prescripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'notas_prescripcion'); ?>
		<?php echo $form->textField($model,'notas_prescripcion',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'notas_prescripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fin_prescripcion'); ?>
		<?php
			if ($model->fin_prescripcion!='') {
			$model->fin_prescripcion=date('d-m-Y',strtotime($model->fin_prescripcion));
			}
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
				'model'=>$model,
				'attribute'=>'fin_prescripcion',
				'value'=>$model->fin_prescripcion,
				'language' => 'es',
				'htmlOptions' => array('readonly'=>"readonly"),
				'options'=>array(
				'autoSize'=>true,
				'defaultDate'=>$model->fin_prescripcion,
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
		<?php echo $form->error($model,'fin_prescripcion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->