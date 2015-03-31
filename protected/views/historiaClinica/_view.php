<?php
/* @var $this HistoriaClinicaController */
/* @var $data HistoriaClinica */
?>

<div class="view">

 	<b><?php echo CHtml::encode($data->getAttributeLabel('reporte_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->reporte_id), array('view', 'id'=>$data->reporte_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('encuentro_id')); ?>:</b>
	<?php echo CHtml::encode($data->encuentro_id); ?>
	<?php echo CHtml::encode($data->paciente->primer_nombre); ?> <?php echo CHtml::encode($data->paciente->primer_apellido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre paciente')); ?>:</b>
	<?php echo CHtml::encode($data->paciente->primer_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('primer_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->primer_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('primer_apellido')); ?>:</b>
	<?php echo CHtml::encode($data->primer_apellido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reporte')); ?>:</b>
	<?php echo CHtml::encode($data->reporte); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reporte_fecha')); ?>:</b>
	<?php echo CHtml::encode($data->reporte_fecha); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('reporte_hora')); ?>:</b>
	<?php echo CHtml::encode($data->reporte_hora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_comienzo_tratamiento')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_comienzo_tratamiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_tratamiento')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_tratamiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('medicamentos')); ?>:</b>
	<?php echo CHtml::encode($data->medicamentos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dosis')); ?>:</b>
	<?php echo CHtml::encode($data->dosis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aplicado_por')); ?>:</b>
	<?php echo CHtml::encode($data->aplicado_por); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notas')); ?>:</b>
	<?php echo CHtml::encode($data->notas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notas_auxiliares')); ?>:</b>
	<?php echo CHtml::encode($data->notas_auxiliares); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_revision')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_revision); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quirofano_id')); ?>:</b>
	<?php echo CHtml::encode($data->quirofano_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cirugia_id')); ?>:</b>
	<?php echo CHtml::encode($data->cirugia_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_cirugia')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_cirugia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('diagnostico')); ?>:</b>
	<?php echo CHtml::encode($data->diagnostico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cirujano')); ?>:</b>
	<?php echo CHtml::encode($data->cirujano); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asistente')); ?>:</b>
	<?php echo CHtml::encode($data->asistente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('enfermera')); ?>:</b>
	<?php echo CHtml::encode($data->enfermera); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('enfermera_rotativa')); ?>:</b>
	<?php echo CHtml::encode($data->enfermera_rotativa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anestesia')); ?>:</b>
	<?php echo CHtml::encode($data->anestesia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('terapia')); ?>:</b>
	<?php echo CHtml::encode($data->terapia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('informacion_resultados')); ?>:</b>
	<?php echo CHtml::encode($data->informacion_resultados); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora_entrada')); ?>:</b>
	<?php echo CHtml::encode($data->hora_entrada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora_descanso')); ?>:</b>
	<?php echo CHtml::encode($data->hora_descanso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora_cierre')); ?>:</b>
	<?php echo CHtml::encode($data->hora_cierre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora_finalizacion')); ?>:</b>
	<?php echo CHtml::encode($data->hora_finalizacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tiempo_vendaje')); ?>:</b>
	<?php echo CHtml::encode($data->tiempo_vendaje); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reposo')); ?>:</b>
	<?php echo CHtml::encode($data->reposo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_prescripcion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_prescripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('medico_prescripcion')); ?>:</b>
	<?php echo CHtml::encode($data->medico_prescripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notas_prescripcion')); ?>:</b>
	<?php echo CHtml::encode($data->notas_prescripcion); ?>
	<br />
*/
	<b><?php echo CHtml::encode($data->getAttributeLabel('fin_prescripcion')); ?>:</b>
	<?php echo CHtml::encode($data->fin_prescripcion); ?>
	<br />

	 ?>

</div>
