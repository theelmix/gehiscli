<?php
/* @var $this CitasController */
/* @var $model Citas */

$this->breadcrumbs=array(
	'Citas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Citas', 'url'=>array('index')),
	array('label'=>'Crear Citas', 'url'=>array('create')),
	array('label'=>'Ver Citas', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Citas', 'url'=>array('admin')),
);
?>

<h1>Actualizar Citas <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>