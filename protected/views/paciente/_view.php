<?php
/* @var $this PacienteController */
/* @var $data Paciente */
?>

<div class="view">

<!-- 	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />  -->

<!-- 	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_registro')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_registro); ?>
	<br /> -->

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?> - <?php echo CHtml::encode($data->primer_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('segundo_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->segundo_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Apellido')); ?>:</b>
	<?php echo CHtml::encode($data->primer_apellido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('segundo_apellido')); ?>:</b>
	<?php echo CHtml::encode($data->segundo_apellido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_nacimiento')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_nacimiento); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_sangre')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_sangre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nacionalidad')); ?>:</b>
	<?php echo CHtml::encode($data->nacionalidad); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado_civil')); ?>:</b>
	<?php echo CHtml::encode($data->estado_civil); ?>
	<br />

	*/ ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('sexo')); ?>:</b>
	<?php echo CHtml::encode($data->sexo); ?>
	<br />
</div>