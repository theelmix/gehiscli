<?php
/* @var $this PacienteController */
/* @var $model Paciente */

$this->breadcrumbs=array(
	'Pacientes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Pacientes', 'url'=>array('index')),
	array('label'=>'Crear nuevo Paciente', 'url'=>array('create')),
	array('label'=>'Actualizar Paciente', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Paciente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Pacientes', 'url'=>array('admin')),
);
?>

<h2>Paciente #<?php echo $model->id; ?> <?php echo $model->primer_apellido; ?> <?php echo $model->primer_nombre; ?></h2>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions'=>array('class'=>'table table-striped table-bordered table-hover'),
	'attributes'=>array(
		//'id',
		'primer_nombre',
		'segundo_nombre',
		'primer_apellido',
		'segundo_apellido',
		'fecha_nacimiento',
		'tipo_sangre',
		'direccion',
		'nacionalidad',
		'telefono_1_codigo',
		'telefono_1_numero',
		'telefono_2_codigo',
		'telefono_2_numero',
		'celular_1_nr',
		'celular_2_nr',
		'email',
		'estado_civil',
		'sexo',
		'fecha_registro',
	),
)); ?>
