<?php
/* @var $this NoticiasController */
/* @var $model Noticias */

$this->breadcrumbs=array(
	'Noticias'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Noticias', 'url'=>array('index')),
	array('label'=>'Administrar Noticias', 'url'=>array('admin')),
);
?>

<h1>Crear Noticias</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>