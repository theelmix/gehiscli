<?php
/* @var $this AdmisionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Admisiones',
);

$this->menu=array(
	array('label'=>'Crear Admision', 'url'=>array('create')),
	array('label'=>'Administrar Admisiones', 'url'=>array('admin')),
);
?>

<h1>Admisiones</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
