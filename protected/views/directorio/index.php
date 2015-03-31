<?php
/* @var $this DirectorioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Directorios',
);

$this->menu=array(
	array('label'=>'Crear Directorio', 'url'=>array('create')),
	array('label'=>'Administrar Directorio', 'url'=>array('admin')),
);
?>

<h1>Directorios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
