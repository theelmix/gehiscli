<?php
/* @var $this DirectorioController */
/* @var $model Directorio */

$this->breadcrumbs=array(
	'Directorios'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Directorio', 'url'=>array('index')),
	array('label'=>'Administrar Directorio', 'url'=>array('admin')),
);
?>

<h1>Crear Directorio</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>