<?php
/* @var $this DirectorioController */
/* @var $model Directorio */

$this->breadcrumbs=array(
	'Directorios'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Directorio', 'url'=>array('index')),
	array('label'=>'Crear Directorio', 'url'=>array('create')),
	array('label'=>'Actualizar Directorio', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Directorio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Directorio', 'url'=>array('admin')),
);
?>

<h1>Ver informacion de #<?php echo $model->id; ?> <?php echo $model->primer_nombre; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions'=>array('class'=>'table table-striped table-bordered table-hover'),
	'attributes'=>array(
		'id',
		'titulo',
		'fecha_registro',
		'primer_nombre',
		'segundo_nombre',
		'primer_apellido',
		'segundo_apellido',
		'fecha_nacimiento',
		'medico_id',
		'enfermero_id',
		'telefono_1_codigo',
		'telefono_1_numero',
		'telefono_2_codigo',
		'telefono_2_numero',
		'celular_1_nr',
		'celular_2_nr',
		'email',
		'numero_habitacion',
		'fecha',
	),
)); ?>
