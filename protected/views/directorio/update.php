<?php
/* @var $this DirectorioController */
/* @var $model Directorio */

$this->breadcrumbs=array(
	'Directorios'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Directorio', 'url'=>array('index')),
	array('label'=>'Crear Directorio', 'url'=>array('create')),
	array('label'=>'Ver Directorio', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Directorio', 'url'=>array('admin')),
);
?>

<h1>Actualizar Directorio <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>