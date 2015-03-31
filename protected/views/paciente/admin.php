<?php
/* @var $this PacienteController */
/* @var $model Paciente */

$this->breadcrumbs=array(
	'Pacientes'=>array('index'),
	'Administración',
);

$this->menu=array(
	array('label'=>'Listar Paciente', 'url'=>array('index')),
	array('label'=>'Crear Paciente', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#paciente-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administración de Pacientes</h1>

<p>
Puedes colocar un comparador relacional (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) al inicio de cada uno de los valores de búsqueda para especificar como debería ser la comparación.
</p>

<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'paciente-grid',
	'itemsCssClass'=>'table table-striped table-bordered table-hover',
	'template'=>"{items}",
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'itemsCssClass'=>'table table-striped table-bordered table-hover',
	'template'=>"{items}",
	'columns'=>array(
		// 'id',
		'primer_nombre',
		'segundo_nombre',
		'primer_apellido',
		'segundo_apellido',
		// 'fecha_nacimiento',
		// 'tipo_sangre',
		// 'direccion',
		// 'nacionalidad',
		// 'telefono_1_codigo',
		// 'telefono_1_numero',
		// 'telefono_2_codigo',
		// 'telefono_2_numero',
		'celular_1_nr',
		// 'celular_2_nr',
		// 'email',
		// 'estado_civil',
		// 'sexo',
		'fecha_registro',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
