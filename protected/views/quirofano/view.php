<?php
/* @var $this QuirofanoController */
/* @var $model Quirofano */

$this->breadcrumbs=array(
	'Quirófanos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Quirófano', 'url'=>array('index')),
	array('label'=>'Crear Quirófano', 'url'=>array('create')),
	array('label'=>'Actualizar Quirófano', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Quirófano', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Quirófano', 'url'=>array('admin')),
);
?>

<h1>Ver Quirófano #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions'=>array('class'=>'table table-striped table-bordered table-hover'),
	'attributes'=>array(
		'id',
		'nombre',
		'fecha',
		'actividad',
		'id_responsable',
		'id_paciente',
		'hora',
		'cierre_temporal',
		'descripcion',
		'informacion',
		'notas_estatus',
		'historia',
	),
)); ?>
