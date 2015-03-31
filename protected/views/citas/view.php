<?php
/* @var $this CitasController */
/* @var $model Citas */

$this->breadcrumbs=array(
	'Citas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Citas', 'url'=>array('index')),
	array('label'=>'Crear Citas', 'url'=>array('create')),
	array('label'=>'ACtualizar Citas', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Citas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Citas', 'url'=>array('admin')),
);
?>

<h1>Ver Citas #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions'=>array('class'=>'table table-striped table-bordered table-hover'),
	'attributes'=>array(
		'id',
		'paciente.primer_nombre',
		'paciente.primer_apellido',
		'fecha',
		'hora',
		'especialidad',
		'medicos.primer_nombre',
		// 'proposito',
		// 'urgente',
		// 'recordatorio',
		// 'recordatorio_email',
		// 'recordatorio_telefono',
		// 'razon_cancelado',
		'encuentro_id',
		'estatus',
	),
)); ?>
