<?php
/* @var $this CitasController */
/* @var $model Citas */

$this->breadcrumbs=array(
	'Citas'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Citas', 'url'=>array('index')),
	array('label'=>'Crear Citas', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#citas-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Citas</h1>

<p>
Puedes colocar un comparador relacional (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) al inicio de cada uno de los valores de búsqueda para especificar como debería ser la comparación.
</p

<?php echo CHtml::link('Búsqueda avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'citas-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'itemsCssClass'=>'table table-striped table-bordered table-hover',
	'template'=>"{items}",
	'columns'=>array(
		'id',
		'paciente_id',
		'fecha',
		'hora',
		'especialidad',
		'medico_id',
		/*
		'proposito',
		'urgente',
		'recordatorio',
		'recordatorio_email',
		'recordatorio_telefono',
		'razon_cancelado',
		'encuentro_id',
		'estatus',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
