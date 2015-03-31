<?php
/* @var $this MedicosController */
/* @var $model Medicos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'medicos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'especialidad'); ?>
		<?php echo $form->textField($model,'especialidad',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'especialidad'); ?>
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
		<?php echo $form->labelEx($model,'sexo'); ?>
		<?php echo $form->textField($model,'sexo',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'sexo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_entrada'); ?>
		<?php
			if ($model->fecha_entrada!='') {
			$model->fecha_entrada=date('d-m-Y',strtotime($model->fecha_entrada));
			}
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
				'model'=>$model,
				'attribute'=>'fecha_entrada',
				'value'=>$model->fecha_entrada,
				'language' => 'es',
				'htmlOptions' => array('readonly'=>"readonly"),
				'options'=>array(
				'autoSize'=>true,
				'defaultDate'=>$model->fecha_entrada,
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
		<?php echo $form->error($model,'fecha_entrada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_salida'); ?>
		<?php
			if ($model->fecha_salida!='') {
			$model->fecha_salida=date('d-m-Y',strtotime($model->fecha_salida));
			}
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
				'model'=>$model,
				'attribute'=>'fecha_salida',
				'value'=>$model->fecha_salida,
				'language' => 'es',
				'htmlOptions' => array('readonly'=>"readonly"),
				'options'=>array(
				'autoSize'=>true,
				'defaultDate'=>$model->fecha_salida,
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
		<?php echo $form->error($model,'fecha_salida'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->