<?php
/* @var $this PacienteController */
/* @var $model Paciente */

$this->breadcrumbs=array(
	'Pacientes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Paciente', 'url'=>array('index')),
	array('label'=>'Crear Paciente', 'url'=>array('create')),
	array('label'=>'Ver Pacientes', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Pacientes', 'url'=>array('admin')),
);
?>

<h1>Actualizar Paciente <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>