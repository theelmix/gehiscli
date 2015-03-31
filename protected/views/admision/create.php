<?php
/* @var $this AdmisionController */
/* @var $model Admision */

$this->breadcrumbs=array(
	'Admisiones'=>array('index'),
	'Admitir paciente',
);

$this->menu=array(
	array('label'=>'Listar Admisiones', 'url'=>array('index')),
	array('label'=>'Administrar Admisiones', 'url'=>array('admin')),
);
?>

<h1>Admitir un paciente</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>