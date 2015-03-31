<?php
/* @var $this EnfermerasController */
/* @var $data Enfermeras */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('especialidad')); ?>:</b>
	<?php echo CHtml::encode($data->especialidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('primer_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->primer_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('segundo_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->segundo_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('primer_apellido')); ?>:</b>
	<?php echo CHtml::encode($data->primer_apellido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('segundo_apellido')); ?>:</b>
	<?php echo CHtml::encode($data->segundo_apellido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono_1_codigo')); ?>:</b>
	<?php echo CHtml::encode($data->telefono_1_codigo); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono_1_numero')); ?>:</b>
	<?php echo CHtml::encode($data->telefono_1_numero); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono_2_codigo')); ?>:</b>
	<?php echo CHtml::encode($data->telefono_2_codigo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono_2_numero')); ?>:</b>
	<?php echo CHtml::encode($data->telefono_2_numero); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('celular_1_nr')); ?>:</b>
	<?php echo CHtml::encode($data->celular_1_nr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('celular_2_nr')); ?>:</b>
	<?php echo CHtml::encode($data->celular_2_nr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sexo')); ?>:</b>
	<?php echo CHtml::encode($data->sexo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_entrada')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_entrada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_salida')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_salida); ?>
	<br />

	*/ ?>

</div>