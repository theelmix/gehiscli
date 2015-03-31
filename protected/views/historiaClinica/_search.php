<?php
/* @var $this HistoriaClinicaController */
/* @var $model HistoriaClinica */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'reporte_id'); ?>
		<?php echo $form->textField($model,'reporte_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'encuentro_id'); ?>
		<?php echo $form->textField($model,'encuentro_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'paciente_id'); ?>
		<?php echo $form->textField($model,'paciente_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'primer_nombre'); ?>
		<?php echo $form->textField($model,'primer_nombre',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'primer_apellido'); ?>
		<?php echo $form->textField($model,'primer_apellido',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reporte'); ?>
		<?php echo $form->textArea($model,'reporte',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reporte_fecha'); ?>
		<?php echo $form->textField($model,'reporte_fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reporte_hora'); ?>
		<?php echo $form->textField($model,'reporte_hora'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_comienzo_tratamiento'); ?>
		<?php echo $form->textField($model,'fecha_comienzo_tratamiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_tratamiento'); ?>
		<?php echo $form->textField($model,'tipo_tratamiento',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'medicamentos'); ?>
		<?php echo $form->textArea($model,'medicamentos',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dosis'); ?>
		<?php echo $form->textArea($model,'dosis',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'aplicado_por'); ?>
		<?php echo $form->textField($model,'aplicado_por',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'notas'); ?>
		<?php echo $form->textArea($model,'notas',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'notas_auxiliares'); ?>
		<?php echo $form->textField($model,'notas_auxiliares',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_revision'); ?>
		<?php echo $form->textField($model,'fecha_revision'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'quirofano_id'); ?>
		<?php echo $form->textField($model,'quirofano_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cirugia_id'); ?>
		<?php echo $form->textField($model,'cirugia_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_cirugia'); ?>
		<?php echo $form->textField($model,'fecha_cirugia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'diagnostico'); ?>
		<?php echo $form->textArea($model,'diagnostico',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cirujano'); ?>
		<?php echo $form->textField($model,'cirujano',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asistente'); ?>
		<?php echo $form->textField($model,'asistente',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'enfermera'); ?>
		<?php echo $form->textField($model,'enfermera'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'enfermera_rotativa'); ?>
		<?php echo $form->textArea($model,'enfermera_rotativa',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'anestesia'); ?>
		<?php echo $form->textField($model,'anestesia',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'terapia'); ?>
		<?php echo $form->textArea($model,'terapia',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'informacion_resultados'); ?>
		<?php echo $form->textArea($model,'informacion_resultados',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hora_entrada'); ?>
		<?php echo $form->textField($model,'hora_entrada'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hora_descanso'); ?>
		<?php echo $form->textField($model,'hora_descanso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hora_cierre'); ?>
		<?php echo $form->textField($model,'hora_cierre'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hora_finalizacion'); ?>
		<?php echo $form->textField($model,'hora_finalizacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tiempo_vendaje'); ?>
		<?php echo $form->textArea($model,'tiempo_vendaje',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reposo'); ?>
		<?php echo $form->textArea($model,'reposo',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_prescripcion'); ?>
		<?php echo $form->textField($model,'fecha_prescripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'medico_prescripcion'); ?>
		<?php echo $form->textField($model,'medico_prescripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'notas_prescripcion'); ?>
		<?php echo $form->textField($model,'notas_prescripcion',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fin_prescripcion'); ?>
		<?php echo $form->textField($model,'fin_prescripcion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->