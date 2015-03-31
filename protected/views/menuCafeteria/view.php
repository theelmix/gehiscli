<?php
/* @var $this MenuCafeteriaController */
/* @var $model MenuCafeteria */

$this->breadcrumbs=array(
	'Menu Cafeteria'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Menu Cafeteria', 'url'=>array('index')),
	array('label'=>'Crear Menu Cafeteria', 'url'=>array('create')),
	array('label'=>'Actualizar Menu Cafeteria', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Menu Cafeteria', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'¿Seguro que desea borrar este item?')),
	array('label'=>'Administrar Menu Cafeteria', 'url'=>array('admin')),
);
?>

<h1>Ver Menu Cafeteria #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions'=>array('class'=>'table table-striped table-bordered table-hover'),
	'attributes'=>array(
		'id',
		'menu',
		'articulo',
		'precio',
		'descripcion',
	),
)); ?>
