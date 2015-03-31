<?php
/* @var $this MenuCafeteriaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Menu Cafeteria',
);

$this->menu=array(
	array('label'=>'Crear Menu Cafeteria', 'url'=>array('create')),
	array('label'=>'Administrar Menu Cafeteria', 'url'=>array('admin')),
);
?>

<h1>Menu Cafeteria</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
