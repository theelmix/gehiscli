<?php
/* @var $this AdmisionController */
/* @var $model Admision */

$this->breadcrumbs=array(
	'Admisiones'=>array('index'),
	$model->encuentro_id=>array('view','id'=>$model->encuentro_id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Admisiones', 'url'=>array('index')),
	array('label'=>'Admitir un paciente', 'url'=>array('create')),
	array('label'=>'Ver Admision', 'url'=>array('view', 'id'=>$model->encuentro_id)),
	array('label'=>'Administrar Admisiones', 'url'=>array('admin')),
);
?>

<h1>Actualizar Admision <?php echo $model->encuentro_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>