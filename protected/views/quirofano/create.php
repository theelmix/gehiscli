<?php
/* @var $this QuirofanoController */
/* @var $model Quirofano */

$this->breadcrumbs=array(
	'Quirófanos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Quirófano', 'url'=>array('index')),
	array('label'=>'Administrar Quirófano', 'url'=>array('admin')),
);
?>

<h1>Crear Quirófano</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>