<?php
/* @var $this MenuCafeteriaController */
/* @var $model MenuCafeteria */

$this->breadcrumbs=array(
	'Menu Cafeteria'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar MenuCafeteria', 'url'=>array('index')),
	array('label'=>'Crear MenuCafeteria', 'url'=>array('create')),
	array('label'=>'Ver MenuCafeteria', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar MenuCafeteria', 'url'=>array('admin')),
);
?>

<h1>Update MenuCafeteria <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>