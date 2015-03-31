<?php
/* @var $this AdmisionController */
/* @var $model Admision */

$this->breadcrumbs=array(
	'Admisiones'=>array('index'),
	$model->encuentro_id,
);

$this->menu=array(
	array('label'=>'Listar Admisiones', 'url'=>array('index')),
	array('label'=>'Crear Admisiones', 'url'=>array('create')),
	array('label'=>'Actualizar Admision', 'url'=>array('update', 'id'=>$model->encuentro_id)),
	array('label'=>'Borrar Admision', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->encuentro_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Admision', 'url'=>array('admin')),
);
?>

<h1>Ver Admision #<?php echo $model->encuentro_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions'=>array('class'=>'table table-striped table-bordered table-hover'),
	'attributes'=>array(
		'encuentro_id',
		'paciente.primer_nombre','paciente.primer_apellido',
		'encuentro_fecha',
		'encuentro_tipo',
		'hora',
		'diagnostico_referido',
		'terapia_recomendada_referido',
		'medico_referido',
		'institucion_referido',
		'notas_referido',
		'compania_seguros',
		'compania_seguros2',
		'contacto_paciente_nombre',
		'contacto_paciente_apellido',
		'contacto_relation',
		'numero_habitacion',
		'doctor_consulta',
		'servicios_extras',
		'alta',
		'fecha_alta',
		'hora_alta',
		'fecha_revision',
		'responsable_revision',
		'notas_encuentro',
		'estatus',
		//'primer_nombre',
		//'primer_apellido',
	),
)); ?>
