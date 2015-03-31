<?php
/* @var $this QuirofanoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Quirófanos',
);

$this->menu=array(
	array('label'=>'Crear Quirófano', 'url'=>array('create')),
	array('label'=>'Administrar Quirófano', 'url'=>array('admin')),
);
?>

<h1>Quirófanos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
