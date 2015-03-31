<?php
/* @var $this EnfermerasController */
/* @var $model Enfermeras */

$this->breadcrumbs=array(
	'Enfermeras'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Enfermeras', 'url'=>array('index')),
	array('label'=>'Crear Enfermeras', 'url'=>array('create')),
	array('label'=>'Ver Enfermeras', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Enfermeras', 'url'=>array('admin')),
);
?>

<h1>Actualizar Enfermeras <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>