<?php
/* @var $this MedicosController */
/* @var $model Medicos */

$this->breadcrumbs=array(
	'Médicos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Médicos', 'url'=>array('index')),
	array('label'=>'Crear Médicos', 'url'=>array('create')),
	array('label'=>'Ver Médicos', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Médicos', 'url'=>array('admin')),
);
?>

<h1>Actualizar Médicos <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>