<?php
/* @var $this HistoriaClinicaController */
/* @var $model HistoriaClinica */

$this->breadcrumbs=array(
	'Historia Clinicas'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Historia Clinica', 'url'=>array('index')),
	array('label'=>'Administrar Historia Clinica', 'url'=>array('admin')),
);
?>

<h1>Crear HistoriaClinica</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>