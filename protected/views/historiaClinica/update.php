<?php
/* @var $this HistoriaClinicaController */
/* @var $model HistoriaClinica */

$this->breadcrumbs=array(
	'Historia Clinicas'=>array('index'),
	$model->reporte_id=>array('view','id'=>$model->reporte_id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Historia Clinica', 'url'=>array('index')),
	array('label'=>'Crear Historia Clinica', 'url'=>array('create')),
	array('label'=>'Ver Historia Clinica', 'url'=>array('view', 'id'=>$model->reporte_id)),
	array('label'=>'Administrar Historia Clinica', 'url'=>array('admin')),
);
?>

<h1>Actualizar Historia Clinica <?php echo $model->reporte_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>