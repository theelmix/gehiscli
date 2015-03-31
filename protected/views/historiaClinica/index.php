<?php
/* @var $this HistoriaClinicaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Historia Clinicas',
);

$this->menu=array(
	array('label'=>'Crear Historia Clinica', 'url'=>array('create')),
	array('label'=>'Administrar Historia Clinica', 'url'=>array('admin')),
);
?>

<h1>Historia Clinicas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
