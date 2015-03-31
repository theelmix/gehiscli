<?php
/* @var $this EnfermerasController */
/* @var $model Enfermeras */

$this->breadcrumbs=array(
	'Enfermeras'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Enfermeras', 'url'=>array('index')),
	array('label'=>'Administrar Enfermeras', 'url'=>array('admin')),
);
?>

<h1>Crear Enfermeras</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>