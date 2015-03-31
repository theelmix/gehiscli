<?php
/* @var $this MedicosController */
/* @var $model Medicos */

$this->breadcrumbs=array(
	'Medicoses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Médicos', 'url'=>array('index')),
	array('label'=>'Crear Médicos', 'url'=>array('create')),
	array('label'=>'Actualizar Médicos', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Médicos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Médicos', 'url'=>array('admin')),
);
?>

<h1>Ver Médico #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions'=>array('class'=>'table table-striped table-bordered table-hover'),
	'attributes'=>array(
		'id',
		'especialidad',
		'primer_nombre',
		'segundo_nombre',
		'primer_apellido',
		'segundo_apellido',
		'telefono_1_codigo',
		'telefono_1_numero',
		'telefono_2_codigo',
		'telefono_2_numero',
		'celular_1_nr',
		'celular_2_nr',
		'email',
		'sexo',
		'fecha_entrada',
		'fecha_salida',
	),
)); ?>
