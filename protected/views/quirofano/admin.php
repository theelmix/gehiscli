<?php
/* @var $this QuirofanoController */
/* @var $model Quirofano */

$this->breadcrumbs=array(
	'Quirofanos'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Quirófano', 'url'=>array('index')),
	array('label'=>'Crear Quirófano', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#quirofano-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Quirófanos</h1>

<p>
Opcionalmente puedes colocar un comparador relacional (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) al inicio de cada uno de los valores de búsqueda para especificar como debería ser la comparación.
</p>

<?php echo CHtml::link('Búsqueda avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'quirofano-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'itemsCssClass'=>'table table-striped table-bordered table-hover',
	'template'=>"{items}",
	'columns'=>array(
		'id',
		'nombre',
		'fecha',
		'actividad',
		'id_responsable',
		'id_paciente',
		/*
		'hora',
		'cierre_temporal',
		'descripcion',
		'informacion',
		'notas_estatus',
		'historia',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
