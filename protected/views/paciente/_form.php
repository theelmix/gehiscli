<?php
/* @var $this PacienteController */
/* @var $model Paciente */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'paciente-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha de registro'); ?>
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
		<?php echo $form->error($model,'fecha'); ?>
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
	<div class="row">
		<?php
			if ($model->fecha_nacimiento!='') {
			$model->fecha_nacimiento=date('d-m-Y',strtotime($model->fecha_nacimiento));
			}
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
				'model'=>$model,
				'attribute'=>'fecha_nacimiento',
				'value'=>$model->fecha_nacimiento,
				'language' => 'es',
				//'htmlOptions' => array('readonly'=>"readonly"),
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
				'minDate'=>"01-01-1920", //fecha minima
				'maxDate'=> "+20Y",
				//fecha maxima
			),
		)); ?>
		<?php echo $form->error($model,'fecha_nacimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_sangre'); ?>
		<?php echo $form->textField($model,'tipo_sangre',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'tipo_sangre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nacionalidad'); ?>
		<?php echo $form->textField($model,'nacionalidad',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'nacionalidad'); ?>
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
		<?php echo $form->labelEx($model,'estado_civil'); ?>
		<?php echo $form->textField($model,'estado_civil',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'estado_civil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sexo'); ?>
		<?php echo $form->textField($model,'sexo',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'sexo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->