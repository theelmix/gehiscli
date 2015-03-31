<?php
/* @var $this AdmisionController */
/* @var $model Admision */

$this->breadcrumbs=array(
	'Admisiones'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Pacientes admitidos', 'url'=>array('index')),
	array('label'=>'Admitir un paciente', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#admision-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Admisiones</h1>

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
	'id'=>'admision-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'itemsCssClass'=>'table table-striped table-bordered table-hover',
	'template'=>"{items}",
	'columns'=>array(
		//'encuentro_id',
		'paciente_id',
		array ('name'=>'paciente_id','value'=>'$data->paciente->primer_nombre','type'=>'text',),
		array ('name'=>'paciente_id','value'=>'$data->paciente->primer_apellido','type'=>'text',),
		'encuentro_fecha',
		//'encuentro_tipo',
		'hora',
		//'diagnostico_referido',
		
		// 'terapia_recomendada_referido',
		// 'medico_referido',
		// 'institucion_referido',
		// 'notas_referido',
		// 'compania_seguros',
		// 'compania_seguros2',
		// 'contacto_paciente_nombre',
		// 'contacto_paciente_apellido',
		// 'contacto_relation',
		'numero_habitacion',
		'doctor_consulta',
		// 'servicios_extras',
		// 'alta',
		// 'fecha_alta',
		// 'hora_alta',
		// 'fecha_revision',
		// 'responsable_revision',
		// 'notas_encuentro',
		'estatus',
		// 'primer_nombre',
		// 'primer_apellido',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
