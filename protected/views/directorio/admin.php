<?php
/* @var $this DirectorioController */
/* @var $model Directorio */

$this->breadcrumbs=array(
	'Directorios'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Directorio', 'url'=>array('index')),
	array('label'=>'Crear Directorio', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#directorio-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Directorios</h1>

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
	'id'=>'directorio-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'itemsCssClass'=>'table table-striped table-bordered table-hover',
	'template'=>"{items}",
	'columns'=>array(
		'id',
		'titulo',
		'fecha_registro',
		'primer_nombre',
		'segundo_nombre',
		'primer_apellido',
		/*
		'segundo_apellido',
		'fecha_nacimiento',
		'medico_id',
		'enfermero_id',
		'telefono_1_codigo',
		'telefono_1_numero',
		'telefono_2_codigo',
		'telefono_2_numero',
		'celular_1_nr',
		'celular_2_nr',
		'email',
		'numero_habitacion',
		'fecha',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
