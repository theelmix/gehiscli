<?php
/* @var $this CitasController */
/* @var $data Citas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paciente_id')); ?>:</b>
	<?php echo CHtml::encode($data->paciente_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora')); ?>:</b>
	<?php echo CHtml::encode($data->hora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('especialidad')); ?>:</b>
	<?php echo CHtml::encode($data->especialidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('medico_id')); ?>:</b>
	<?php echo CHtml::encode($data->medico_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proposito')); ?>:</b>
	<?php echo CHtml::encode($data->proposito); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('urgente')); ?>:</b>
	<?php echo CHtml::encode($data->urgente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('recordatorio')); ?>:</b>
	<?php echo CHtml::encode($data->recordatorio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('recordatorio_email')); ?>:</b>
	<?php echo CHtml::encode($data->recordatorio_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('recordatorio_telefono')); ?>:</b>
	<?php echo CHtml::encode($data->recordatorio_telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('razon_cancelado')); ?>:</b>
	<?php echo CHtml::encode($data->razon_cancelado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('encuentro_id')); ?>:</b>
	<?php echo CHtml::encode($data->encuentro_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estatus')); ?>:</b>
	<?php echo CHtml::encode($data->estatus); ?>
	<br />

	*/ ?>

</div>