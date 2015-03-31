<?php
/* @var $this NoticiasController */
/* @var $model Noticias */

$this->breadcrumbs=array(
	'Noticias'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Noticias', 'url'=>array('index')),
	array('label'=>'Crear Noticia', 'url'=>array('create')),
	array('label'=>'Ver Noticias', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Noticias', 'url'=>array('admin')),
);
?>

<h1>Actualizar Noticias <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>