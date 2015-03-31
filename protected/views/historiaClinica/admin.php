<?php
/* @var $this HistoriaClinicaController */
/* @var $model HistoriaClinica */

$this->breadcrumbs=array(
	'Historia Clinicas'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Historia Clinica', 'url'=>array('index')),
	array('label'=>'Crear Historia Clinica', 'url'=>array('create')),
);



Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#historia-clinica-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Historia Clinicas</h1>

<p>
Puedes colocar un comparador relacional (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) al inicio de cada uno de los valores de búsqueda para especificar como debería ser la comparación.
</p>

<?php echo CHtml::link('Búsqueda avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'historia-clinica-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'itemsCssClass'=>'table table-striped table-bordered table-hover',
	'template'=>"{items}",
	'columns'=>array(
		'reporte_id',
		'encuentro_id',
		'paciente_id',
		'primer_nombre',
		'primer_apellido',
		'reporte',
		/*
		'reporte_fecha',
		'reporte_hora',
		'fecha_comienzo_tratamiento',
		'tipo_tratamiento',
		'medicamentos',
		'dosis',
		'aplicado_por',
		'notas',
		'notas_auxiliares',
		'fecha_revision',
		'quirofano_id',
		'cirugia_id',
		'fecha_cirugia',
		'diagnostico',
		'cirujano',
		'asistente',
		'enfermera',
		'enfermera_rotativa',
		'anestesia',
		'terapia',
		'informacion_resultados',
		'hora_entrada',
		'hora_descanso',
		'hora_cierre',
		'hora_finalizacion',
		'tiempo_vendaje',
		'reposo',
		'fecha_prescripcion',
		'medico_prescripcion',
		'notas_prescripcion',
		'fin_prescripcion',
		*/
		array(
			'class'=>'CButtonColumn',
			'template' => '{view} {update} {delete} {pdf}',
			'buttons'=>array(
			'pdf' => array(
			'label'=>'Generar PDF',
			'url'=>"CHtml::normalizeUrl(array('pdf', 'id'=>\$data->reporte_id
			))",
			'imageUrl'=>Yii::app()->request->baseUrl.'/images/pdf_icon.png',
			'options' => array('class'=>'pdf'),
				),
			),
		),
	),
)); ?>
