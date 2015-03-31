<?php
/* @var $this NoticiasController */
/* @var $model Noticias */

$this->breadcrumbs=array(
	'Noticias'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Noticias', 'url'=>array('index')),
	array('label'=>'Crear Noticia', 'url'=>array('create'), 'visible'=>!Yii::app()->getUser()->isGuest),
	array('label'=>'Actualizar Noticia', 'url'=>array('update', 'id'=>$model->id), 'visible'=>!Yii::app()->getUser()->isGuest),
	array('label'=>'Borrar Noticia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'¿Seguro desea borrar esta noticia?'), 'visible'=>!Yii::app()->getUser()->isGuest),
	array('label'=>'Administrar Noticias', 'url'=>array('admin'), 'visible'=>!Yii::app()->getUser()->isGuest),
);
?>

<h1>Ver Noticias #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions'=>array('class'=>'table table-striped table-bordered table-hover'),
	'attributes'=>array(
		'id',
		'numero_articulo',
		'categoria',
		'estatus',
		'titulo',
		'prefacio',
		'cuerpo_principal',
		'autor',
		'fecha',
	),
)); ?>
