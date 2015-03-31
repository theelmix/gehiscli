<?php
/* @var $this AdmisionController */
/* @var $data Admision */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('encuentro_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->encuentro_id), array('view', 'id'=>$data->encuentro_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paciente_id')); ?>:</b>
	<?php echo CHtml::encode($data->paciente->primer_nombre); ?> <?php echo CHtml::encode($data->paciente->primer_apellido); ?>

	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('encuentro_fecha')); ?>:</b>
	<?php echo CHtml::encode($data->encuentro_fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('encuentro_tipo')); ?>:</b>
	<?php echo CHtml::encode($data->encuentro_tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora')); ?>:</b>
	<?php echo CHtml::encode($data->hora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('diagnostico_referido')); ?>:</b>
	<?php echo CHtml::encode($data->diagnostico_referido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('terapia_recomendada_referido')); ?>:</b>
	<?php echo CHtml::encode($data->terapia_recomendada_referido); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('medico_referido')); ?>:</b>
	<?php echo CHtml::encode($data->medico_referido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('institucion_referido')); ?>:</b>
	<?php echo CHtml::encode($data->institucion_referido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notas_referido')); ?>:</b>
	<?php echo CHtml::encode($data->notas_referido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('compania_seguros')); ?>:</b>
	<?php echo CHtml::encode($data->compania_seguros); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('compania_seguros2')); ?>:</b>
	<?php echo CHtml::encode($data->compania_seguros2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contacto_paciente_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->contacto_paciente_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contacto_paciente_apellido')); ?>:</b>
	<?php echo CHtml::encode($data->contacto_paciente_apellido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contacto_relation')); ?>:</b>
	<?php echo CHtml::encode($data->contacto_relation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero_habitacion')); ?>:</b>
	<?php echo CHtml::encode($data->numero_habitacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('doctor_consulta')); ?>:</b>
	<?php echo CHtml::encode($data->doctor_consulta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('servicios_extras')); ?>:</b>
	<?php echo CHtml::encode($data->servicios_extras); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alta')); ?>:</b>
	<?php echo CHtml::encode($data->alta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_alta')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_alta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora_alta')); ?>:</b>
	<?php echo CHtml::encode($data->hora_alta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_revision')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_revision); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('responsable_revision')); ?>:</b>
	<?php echo CHtml::encode($data->responsable_revision); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notas_encuentro')); ?>:</b>
	<?php echo CHtml::encode($data->notas_encuentro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estatus')); ?>:</b>
	<?php echo CHtml::encode($data->estatus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('primer_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->primer_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('primer_apellido')); ?>:</b>
	<?php echo CHtml::encode($data->primer_apellido); ?>
	<br />

	*/ ?>

</div>