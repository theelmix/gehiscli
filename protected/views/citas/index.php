<?php
/* @var $this CitasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Citas',
);

$this->menu=array(
	array('label'=>'Crear Citas', 'url'=>array('create')),
	array('label'=>'Administrar Citas', 'url'=>array('admin')),
);
?>

<h1>Citases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
