<?php
/* @var $this QuirofanoController */
/* @var $model Quirofano */

$this->breadcrumbs=array(
	'Quirófanos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Quirófano', 'url'=>array('index')),
	array('label'=>'Crear Quirófano', 'url'=>array('create')),
	array('label'=>'Ver Quirófano', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Quirófano', 'url'=>array('admin')),
);
?>

<h1>Actualizar Quirófano <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>