<?php
/* @var $this MenuCafeteriaController */
/* @var $model MenuCafeteria */

$this->breadcrumbs=array(
	'Menu Cafetería'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Menu Cafeteria', 'url'=>array('index')),
	array('label'=>'Administrar Menu Cafeteria', 'url'=>array('admin')),
);
?>

<h1>Crear Menú</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>