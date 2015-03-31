<?php
/* @var $this HistoriaClinicaController */
/* @var $model HistoriaClinica */

$this->breadcrumbs=array(
	'Historia Clinica'=>array('index'),
	$model->reporte_id,
);

$this->menu=array(
	array('label'=>'Listar Historia Clinica', 'url'=>array('index')),
	array('label'=>'Crear Historia Clinica', 'url'=>array('create')),
	array('label'=>'Actualizar Historia Clinica', 'url'=>array('update', 'id'=>$model->reporte_id)),
	array('label'=>'Borrar Historia Clinica', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->reporte_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Historias Clinicas', 'url'=>array('admin')),
	array('label'=>'Crear PDF', 'url'=>array('pdf','id'=>$model->reporte_id)),
);
?>

<h1>Ver HistoriaClinica #<?php echo $model->reporte_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions'=>array('class'=>'table table-striped table-bordered table-hover'),
	'attributes'=>array(
		'reporte_id',
		'encuentro_id',
		'paciente_id',
		'primer_nombre',
		'primer_apellido',
		'reporte',
		'reporte_fecha',
		'reporte_hora',
		'fecha_comienzo_tratamiento',
		'tipo_tratamiento',
		'medicamentos',
		'dosis',
		'aplicado_por',
		'notas',
		'notas_auxiliares',
		'fecha_revision',
		'quirofano_id',
		'cirugia_id',
		'fecha_cirugia',
		'diagnostico',
		'cirujano',
		'asistente',
		'enfermera',
		'enfermera_rotativa',
		'anestesia',
		'terapia',
		'informacion_resultados',
		'hora_entrada',
		'hora_descanso',
		'hora_cierre',
		'hora_finalizacion',
		'tiempo_vendaje',
		'reposo',
		'fecha_prescripcion',
		'medico_prescripcion',
		'notas_prescripcion',
		'fin_prescripcion',
	),
)); ?>
