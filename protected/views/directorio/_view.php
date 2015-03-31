<?php
/* @var $this DirectorioController */
/* @var $data Directorio */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b>
	<?php echo CHtml::encode($data->titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_registro')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_registro); ?>
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

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_nacimiento')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_nacimiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('medico_id')); ?>:</b>
	<?php echo CHtml::encode($data->medico_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('enfermero_id')); ?>:</b>
	<?php echo CHtml::encode($data->enfermero_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono_1_codigo')); ?>:</b>
	<?php echo CHtml::encode($data->telefono_1_codigo); ?>
	<br />

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

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero_habitacion')); ?>:</b>
	<?php echo CHtml::encode($data->numero_habitacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	*/ ?>

</div>