<?php
/* @var $this EnfermerasController */
/* @var $model Enfermeras */

$this->breadcrumbs=array(
	'Enfermeras'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Enfermeras', 'url'=>array('index')),
	array('label'=>'Crear Enfermeras', 'url'=>array('create')),
	array('label'=>'Actualizar Enfermeras', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Enfermeras', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'¿Seguro desea borrar este item?')),
	array('label'=>'Administrar Enfermeras', 'url'=>array('admin')),
);
?>

<h1>Ver Enfermeras #<?php echo $model->id; ?></h1>

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
