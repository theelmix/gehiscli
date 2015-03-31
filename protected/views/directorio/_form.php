<?php
/* @var $this DirectorioController */
/* @var $model Directorio */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'directorio-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'titulo'); ?>
		<?php echo $form->textField($model,'titulo',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'titulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_registro'); ?>
		<?php
			if ($model->fecha_registro!='') {
			$model->fecha_registro=date('d-m-Y',strtotime($model->fecha_registro));
			}
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
				'model'=>$model,
				'attribute'=>'fecha_registro',
				'value'=>$model->fecha_registro,
				'language' => 'es',
				'htmlOptions' => array('readonly'=>"readonly"),
				'options'=>array(
				'autoSize'=>true,
				'defaultDate'=>$model->fecha_registro,
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
		<?php echo $form->error($model,'fecha_registro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'primer_nombre'); ?>
		<?php echo $form->textField($model,'primer_nombre',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'primer_nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'segundo_nombre'); ?>
		<?php echo $form->textField($model,'segundo_nombre',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'segundo_nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'primer_apellido'); ?>
		<?php echo $form->textField($model,'primer_apellido',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'primer_apellido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'segundo_apellido'); ?>
		<?php echo $form->textField($model,'segundo_apellido',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'segundo_apellido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_nacimiento'); ?>
		<?php echo $form->textField($model,'fecha_nacimiento'); ?>		<?php
			if ($model->fecha_nacimiento!='') {
			$model->fecha_nacimiento=date('d-m-Y',strtotime($model->fecha_nacimiento));
			}
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
				'model'=>$model,
				'attribute'=>'fecha_nacimiento',
				'value'=>$model->fecha_nacimiento,
				'language' => 'es',
				'htmlOptions' => array('readonly'=>"readonly"),
				'options'=>array(
				'autoSize'=>true,
				'defaultDate'=>$model->fecha_nacimiento,
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
		)); ?>	<div class="row">
		<?php echo $form->labelEx($model,'medico_id'); ?>
		<?php echo $form->textField($model,'medico_id'); ?>
		<?php echo $form->error($model,'medico_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'enfermero_id'); ?>
		<?php echo $form->textField($model,'enfermero_id'); ?>
		<?php echo $form->error($model,'enfermero_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono_1_codigo'); ?>
		<?php echo $form->textField($model,'telefono_1_codigo',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'telefono_1_codigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono_1_numero'); ?>
		<?php echo $form->textField($model,'telefono_1_numero',array('size'=>7,'maxlength'=>7)); ?>
		<?php echo $form->error($model,'telefono_1_numero'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono_2_codigo'); ?>
		<?php echo $form->textField($model,'telefono_2_codigo',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'telefono_2_codigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono_2_numero'); ?>
		<?php echo $form->textField($model,'telefono_2_numero',array('size'=>7,'maxlength'=>7)); ?>
		<?php echo $form->error($model,'telefono_2_numero'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'celular_1_nr'); ?>
		<?php echo $form->textField($model,'celular_1_nr',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'celular_1_nr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'celular_2_nr'); ?>
		<?php echo $form->textField($model,'celular_2_nr',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'celular_2_nr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numero_habitacion'); ?>
		<?php echo $form->textField($model,'numero_habitacion',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'numero_habitacion'); ?>
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

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->