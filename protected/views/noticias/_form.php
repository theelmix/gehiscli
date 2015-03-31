<?php
/* @var $this NoticiasController */
/* @var $model Noticias */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'noticias-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'numero_articulo'); ?>
		<?php echo $form->textField($model,'numero_articulo'); ?>
		<?php echo $form->error($model,'numero_articulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'categoria'); ?>
		<?php echo $form->textField($model,'categoria',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'categoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estatus'); ?>
		<?php echo $form->textField($model,'estatus',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'estatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'titulo'); ?>
		<?php echo $form->textField($model,'titulo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'titulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prefacio'); ?>
		<?php echo $form->textField($model,'prefacio',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'prefacio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cuerpo_principal'); ?>
		<?php echo $form->textArea($model,'cuerpo_principal',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'cuerpo_principal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'autor'); ?>
		<?php echo $form->textField($model,'autor',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'autor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
	<div class="row">
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