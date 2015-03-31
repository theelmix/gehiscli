<?php
/* @var $this EnfermerasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Enfermeras',
);

$this->menu=array(
	array('label'=>'Crear Enfermeras', 'url'=>array('create')),
	array('label'=>'Administrar Enfermeras', 'url'=>array('admin')),
);
?>

<h1>Enfermeras</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
