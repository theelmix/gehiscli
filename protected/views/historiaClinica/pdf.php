<?php
$pdf = Yii::createComponent('application.extensions.MPDF52.mpdf');
$html='
<table id="yw0" class="detail-view2">
<tr class="principal">
<td colspan="2" align="center"><b></b></td>
</br>
</br>
</br>
</br>
<tr>
	<tr class="odd">
		<td> <b>Nombre: </b> </td>
		<td>'.$model->paciente["primer_nombre"].'</td>
	</tr>

	<tr class="even">
		<td> <b>Apellido: </b> </td>
		<td>'.$model->paciente["primer_apellido"].'</td>
	</tr>

	<tr class="odd">
		<td> <b>Reporte: </b> </td>
		<td> '.$model->reporte_id.'</td>
	</tr>

	<tr class="even">
		<td> <b>Encuentro: </b> </td>
		<td> '.$model->encuentro_id.'</td>
	</tr>
	<tr class="odd">
		<td> <b>TITULO</b> </td>
		<td> '.$model->reporte.'</td>
	</tr>

	<tr class="even">
		<td> <b>TITULO</b> </td>
		<td> '.$model->encuentro_id.'</td>
	</tr>
	<tr class="odd">
		<td> <b>TITULO</b> </td>
		<td> '.$model->reporte_id.'</td>
	</tr>

	<tr class="even">
		<td> <b>TITULO</b> </td>
		<td> '.$model->encuentro_id.'</td>
	</tr>
	<tr class="odd">
		<td> <b>TITULO</b> </td>
		<td> '.$model->reporte_id.'</td>
	</tr>

	<tr class="even">
		<td> <b>TITULO</b> </td>
		<td> '.$model->encuentro_id.'</td>
	</tr>
	<tr class="odd">
		<td> <b>TITULO</b> </td>
		<td> '.$model->reporte_id.'</td>
	</tr>

	<tr class="even">
		<td> <b>TITULO</b> </td>
		<td> '.$model->encuentro_id.'</td>
	</tr>
	<tr class="odd">
		<td> <b>TITULO</b> </td>
		<td> '.$model->reporte_id.'</td>
	</tr>

	<tr class="even">
		<td> <b>TITULO</b> </td>
		<td> '.$model->encuentro_id.'</td>
	</tr>
	<tr class="odd">
		<td> <b>TITULO</b> </td>
		<td> '.$model->reporte_id.'</td>
	</tr>

	<tr class="even">
		<td> <b>TITULO</b> </td>
		<td> '.$model->encuentro_id.'</td>
	</tr>
	<tr class="odd">
		<td> <b>TITULO</b> </td>
		<td> '.$model->reporte_id.'</td>
	</tr>

	<tr class="even">
		<td> <b>TITULO</b> </td>
		<td> '.$model->encuentro_id.'</td>
	</tr>
	<tr class="odd">
		<td> <b>TITULO</b> </td>
		<td> '.$model->reporte_id.'</td>
	</tr>

	<tr class="even">
		<td> <b>TITULO</b> </td>
		<td> '.$model->encuentro_id.'</td>
	</tr>
	<tr class="odd">
		<td> <b>TITULO</b> </td>
		<td> '.$model->reporte_id.'</td>
	</tr>

	<tr class="even">
		<td> <b>TITULO</b> </td>
		<td> '.$model->encuentro_id.'</td>
	</tr>
	<tr class="odd">
		<td> <b>TITULO</b> </td>
		<td> '.$model->reporte_id.'</td>
	</tr>

	<tr class="even">
		<td> <b>TITULO</b> </td>
		<td> '.$model->encuentro_id.'</td>
	</tr>
	<tr class="odd">
		<td> <b>TITULO</b> </td>
		<td> '.$model->reporte_id.'</td>
	</tr>

	<tr class="even">
		<td> <b>TITULO</b> </td>
		<td> '.$model->encuentro_id.'</td>
	</tr>
	<tr class="odd">
		<td> <b>TITULO</b> </td>
		<td> '.$model->reporte_id.'</td>
	</tr>

	<tr class="even">
		<td> <b>TITULO</b> </td>
		<td> '.$model->encuentro_id.'</td>
	</tr>
	<tr class="odd">
		<td> <b>TITULO</b> </td>
		<td> '.$model->reporte_id.'</td>
	</tr>

	<tr class="even">
		<td> <b>TITULO</b> </td>
		<td> '.$model->encuentro_id.'</td>
	</tr>
	<tr class="odd">
		<td> <b>TITULO</b> </td>
		<td> '.$model->reporte_id.'</td>
	</tr>

	<tr class="even">
		<td> <b>TITULO</b> </td>
		<td> '.$model->encuentro_id.'</td>
	</tr>
	<tr class="odd">
		<td> <b>TITULO</b> </td>
		<td> '.$model->reporte_id.'</td>
	</tr>

	<tr class="even">
		<td> <b>TITULO</b> </td>
		<td> '.$model->encuentro_id.'</td>
	</tr>
	<tr class="odd">
		<td> <b>TITULO</b> </td>
		<td> '.$model->reporte_id.'</td>
	</tr>

	<tr class="even">
		<td> <b>TITULO</b> </td>
		<td> '.$model->encuentro_id.'</td>
	</tr>
	<tr class="odd">
		<td> <b>TITULO</b> </td>
		<td> '.$model->reporte_id.'</td>
	</tr>

	<tr class="even">
		<td> <b>TITULO</b> </td>
		<td> '.$model->encuentro_id.'</td>
	</tr>
	<tr class="odd">
		<td> <b>TITULO</b> </td>
		<td> '.$model->reporte_id.'</td>
	</tr>

	<tr class="even">
		<td> <b>TITULO</b> </td>
		<td> '.$model->encuentro_id.'</td>
	</tr>
</tr>
</table>';


$header='<img src="'.Yii::app()->request->baseUrl.'/images/banner.png"/>';
$mpdf=new mPDF('win-1252','LETTER','','',15,15,25,12,5,7);
$mpdf->SetHTMLHeader($header);
$mpdf->SetFooter(' {DATE j/m/Y}|Página {PAGENO}/{nbpg}|Sistema de Gestion de Historial Clinico');
$mpdf->WriteHTML($html);
$mpdf->Output('HistoriaClinica.pdf','D');
exit;
?>