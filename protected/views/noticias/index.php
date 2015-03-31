<?php
/* @var $this NoticiasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Noticias',
);

$this->menu=array(
	array('label'=>'Crear Noticias', 'url'=>array('create'), 'visible'=>!Yii::app()->getUser()->isGuest),
	array('label'=>'Administrar Noticias', 'url'=>array('admin'), 'visible'=>!Yii::app()->getUser()->isGuest),
	array('label'=>'Todas las Noticias', 'url'=>array('index')),
);
?>

<h1>Noticiases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
