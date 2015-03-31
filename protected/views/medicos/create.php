<?php
/* @var $this MedicosController */
/* @var $model Medicos */

$this->breadcrumbs=array(
	'Médicos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Médicos', 'url'=>array('index')),
	array('label'=>'Administrar Médicos', 'url'=>array('admin')),
);
?>

<h1>Crear Médicos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>