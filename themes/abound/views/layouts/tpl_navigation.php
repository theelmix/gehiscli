<div class="navbar navbar-inverse">
	<div class="navbar-inner">
    <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
     
          <!-- Be sure to leave the brand out there if you want it shown -->
          <a class="brand" href="#">Sistema de Gestión del Historial Clínico <small>Grupo Médico Esculapio</small></a>
          
          <div class="nav-collapse">
			<?php $this->widget('zii.widgets.CMenu',array(
                    'htmlOptions'=>array('class'=>'pull-right nav'),
                    'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
					'itemCssClass'=>'item-test',
                    'encodeLabel'=>false,
                    'items'=>array(
                        array('label'=>'Inicio', 'url'=>array('/Noticias/index')),
                        array('label'=>'Paciente', 'url'=>array('/Paciente/admin'), 'visible'=>!Yii::app()->getUser()->isGuest),
                        array('label'=>'Admisión', 'url'=>array('/Admision/admin'), 'visible'=>!Yii::app()->getUser()->isGuest),
                        array('label'=>'Citas', 'url'=>array('/Citas/admin'), 'visible'=>!Yii::app()->getUser()->isGuest),
                        array('label'=>'Historia clinica', 'url'=>array('/HistoriaClinica/admin'), 'visible'=>!Yii::app()->getUser()->isGuest),
                        array('label'=>'Médicos', 'url'=>array('/Medicos/admin'), 'visible'=>!Yii::app()->getUser()->isGuest),
                        array('label'=>'Enfermeras', 'url'=>array('/Enfermeras/admin'), 'visible'=>!Yii::app()->getUser()->isGuest),
                        array('label'=>'Quirófano', 'url'=>array('/Quirofano/admin'), 'visible'=>!Yii::app()->getUser()->isGuest),
                        array('label'=>'Directorio', 'url'=>array('/Directorio/admin'), 'visible'=>!Yii::app()->getUser()->isGuest),
                        array('label'=>'Cafetería', 'url'=>array('/MenuCafeteria/admin'), 'visible'=>!Yii::app()->getUser()->isGuest),
                        //Opciones de login
                        array('label'=>'Entrar', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                        array('label'=>'Salir ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
                    ),
                )); ?>
    	</div>
    </div>
	</div>
</div>

<div class="subnav navbar">
    <div class="navbar-inner">
    	<div class="container">
        
        	<div class="style-switcher pull-left">
                <a href="javascript:chooseStyle('style4', 60)" checked="checked"><span class="style" style="background-color:#0088CC;"></span></a>
                <a href="javascript:chooseStyle('style2', 60)"><span class="style" style="background-color:#7c5706;"></span></a>
                <a href="javascript:chooseStyle('style3', 60)"><span class="style" style="background-color:#468847;"></span></a>
                <a href="javascript:chooseStyle('style4', 60)"><span class="style" style="background-color:#4e4e4e;"></span></a>
                <a href="javascript:chooseStyle('style5', 60)"><span class="style" style="background-color:#d85515;"></span></a>
                <a href="javascript:chooseStyle('style6', 60)"><span class="style" style="background-color:#a00a69;"></span></a>
                <a href="javascript:chooseStyle('style7', 60)"><span class="style" style="background-color:#a30c22;"></span></a>
          	</div>

    	</div><!-- container -->
    </div><!-- navbar-inner -->
</div><!-- subnav -->