<?php
/* @var $this MedicosController */
/* @var $model Medicos */

$this->breadcrumbs=array(
	'Médicos'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Médicos', 'url'=>array('index')),
	array('label'=>'Crear Médicos', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#medicos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Médicos</h1>

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
	'id'=>'medicos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'itemsCssClass'=>'table table-striped table-bordered table-hover',
	'template'=>"{items}",
	'columns'=>array(
		'id',
		'especialidad',
		'primer_nombre',
		'segundo_nombre',
		'primer_apellido',
		'segundo_apellido',
		/*
		'telefono_1_codigo',
		'telefono_1_numero',
		'telefono_2_codigo',
		'telefono_2_numero',
		'celular_1_nr',
		'celular_2_nr',
		'email',
		'sexo',
		'fecha_entrada',
		'fecha_salida',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
