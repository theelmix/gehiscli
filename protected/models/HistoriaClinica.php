<?php

/**
 * This is the model class for table "historia_clinica".
 *
 * The followings are the available columns in table 'historia_clinica':
 * @property integer $reporte_id
 * @property integer $encuentro_id
 * @property integer $paciente_id
 * @property string $primer_nombre
 * @property string $primer_apellido
 * @property string $reporte
 * @property string $reporte_fecha
 * @property string $reporte_hora
 * @property string $fecha_comienzo_tratamiento
 * @property string $tipo_tratamiento
 * @property string $medicamentos
 * @property string $dosis
 * @property string $aplicado_por
 * @property string $notas
 * @property string $notas_auxiliares
 * @property string $fecha_revision
 * @property string $quirofano_id
 * @property integer $cirugia_id
 * @property string $fecha_cirugia
 * @property string $diagnostico
 * @property string $cirujano
 * @property string $asistente
 * @property integer $enfermera
 * @property string $enfermera_rotativa
 * @property string $anestesia
 * @property string $terapia
 * @property string $informacion_resultados
 * @property string $hora_entrada
 * @property string $hora_descanso
 * @property string $hora_cierre
 * @property string $hora_finalizacion
 * @property string $tiempo_vendaje
 * @property string $reposo
 * @property string $fecha_prescripcion
 * @property integer $medico_prescripcion
 * @property string $notas_prescripcion
 * @property string $fin_prescripcion
 *
 * The followings are the available model relations:
 * @property Paciente $paciente
 * @property Enfermeras $enfermera0
 * @property Medicos $medicoPrescripcion
 */
class HistoriaClinica extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'historia_clinica';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('paciente_id', 'required'),
			array('encuentro_id, paciente_id, enfermera, medico_prescripcion', 'numerical', 'integerOnly'=>true),
			array('primer_nombre, primer_apellido, tipo_tratamiento, aplicado_por, cirujano, asistente, notas_prescripcion', 'length', 'max'=>60),
			array('notas_auxiliares', 'length', 'max'=>255),
			array('quirofano_id', 'length', 'max'=>10),
			array('anestesia', 'length', 'max'=>30),
			array('reporte, reporte_fecha, reporte_hora, fecha_comienzo_tratamiento, medicamentos, dosis, notas, fecha_revision, fecha_cirugia, diagnostico, enfermera_rotativa, terapia, informacion_resultados, hora_entrada, hora_descanso, hora_cierre, hora_finalizacion, tiempo_vendaje, reposo, fecha_prescripcion, fin_prescripcion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('reporte_id, encuentro_id, paciente_id, primer_nombre, primer_apellido, reporte, reporte_fecha, reporte_hora, fecha_comienzo_tratamiento, tipo_tratamiento, medicamentos, dosis, aplicado_por, notas, notas_auxiliares, fecha_revision, quirofano_id, cirugia_id, fecha_cirugia, diagnostico, cirujano, asistente, enfermera, enfermera_rotativa, anestesia, terapia, informacion_resultados, hora_entrada, hora_descanso, hora_cierre, hora_finalizacion, tiempo_vendaje, reposo, fecha_prescripcion, medico_prescripcion, notas_prescripcion, fin_prescripcion', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'paciente' => array(self::BELONGS_TO, 'Paciente', 'paciente_id'),
			'enfermera0' => array(self::BELONGS_TO, 'Enfermeras', 'enfermera'),
			'medicoPrescripcion' => array(self::BELONGS_TO, 'Medicos', 'medico_prescripcion'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'reporte_id' => 'Reporte',
			'encuentro_id' => 'Encuentro',
			'paciente_id' => 'Paciente',
			'primer_nombre' => 'Primer Nombre',
			'primer_apellido' => 'Primer Apellido',
			'reporte' => 'Reporte',
			'reporte_fecha' => 'Reporte Fecha',
			'reporte_hora' => 'Reporte Hora',
			'fecha_comienzo_tratamiento' => 'Fecha Comienzo Tratamiento',
			'tipo_tratamiento' => 'Tipo Tratamiento',
			'medicamentos' => 'Medicamentos',
			'dosis' => 'Dosis',
			'aplicado_por' => 'Aplicado Por',
			'notas' => 'Notas',
			'notas_auxiliares' => 'Notas Auxiliares',
			'fecha_revision' => 'Fecha Revision',
			'quirofano_id' => 'Quirofano',
			'cirugia_id' => 'Cirugia',
			'fecha_cirugia' => 'Fecha Cirugia',
			'diagnostico' => 'Diagnostico',
			'cirujano' => 'Cirujano',
			'asistente' => 'Asistente',
			'enfermera' => 'Enfermera',
			'enfermera_rotativa' => 'Enfermera Rotativa',
			'anestesia' => 'Anestesia',
			'terapia' => 'Terapia',
			'informacion_resultados' => 'Informacion Resultados',
			'hora_entrada' => 'Hora Entrada',
			'hora_descanso' => 'Hora Descanso',
			'hora_cierre' => 'Hora Cierre',
			'hora_finalizacion' => 'Hora Finalizacion',
			'tiempo_vendaje' => 'Tiempo Vendaje',
			'reposo' => 'Reposo',
			'fecha_prescripcion' => 'Fecha Prescripcion',
			'medico_prescripcion' => 'Medico Prescripcion',
			'notas_prescripcion' => 'Notas Prescripcion',
			'fin_prescripcion' => 'Fin Prescripcion',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('reporte_id',$this->reporte_id);
		$criteria->compare('encuentro_id',$this->encuentro_id);
		$criteria->compare('paciente_id',$this->paciente_id);
		$criteria->compare('primer_nombre',$this->primer_nombre,true);
		$criteria->compare('primer_apellido',$this->primer_apellido,true);
		$criteria->compare('reporte',$this->reporte,true);
		$criteria->compare('reporte_fecha',$this->reporte_fecha,true);
		$criteria->compare('reporte_hora',$this->reporte_hora,true);
		$criteria->compare('fecha_comienzo_tratamiento',$this->fecha_comienzo_tratamiento,true);
		$criteria->compare('tipo_tratamiento',$this->tipo_tratamiento,true);
		$criteria->compare('medicamentos',$this->medicamentos,true);
		$criteria->compare('dosis',$this->dosis,true);
		$criteria->compare('aplicado_por',$this->aplicado_por,true);
		$criteria->compare('notas',$this->notas,true);
		$criteria->compare('notas_auxiliares',$this->notas_auxiliares,true);
		$criteria->compare('fecha_revision',$this->fecha_revision,true);
		$criteria->compare('quirofano_id',$this->quirofano_id,true);
		$criteria->compare('cirugia_id',$this->cirugia_id);
		$criteria->compare('fecha_cirugia',$this->fecha_cirugia,true);
		$criteria->compare('diagnostico',$this->diagnostico,true);
		$criteria->compare('cirujano',$this->cirujano,true);
		$criteria->compare('asistente',$this->asistente,true);
		$criteria->compare('enfermera',$this->enfermera);
		$criteria->compare('enfermera_rotativa',$this->enfermera_rotativa,true);
		$criteria->compare('anestesia',$this->anestesia,true);
		$criteria->compare('terapia',$this->terapia,true);
		$criteria->compare('informacion_resultados',$this->informacion_resultados,true);
		$criteria->compare('hora_entrada',$this->hora_entrada,true);
		$criteria->compare('hora_descanso',$this->hora_descanso,true);
		$criteria->compare('hora_cierre',$this->hora_cierre,true);
		$criteria->compare('hora_finalizacion',$this->hora_finalizacion,true);
		$criteria->compare('tiempo_vendaje',$this->tiempo_vendaje,true);
		$criteria->compare('reposo',$this->reposo,true);
		$criteria->compare('fecha_prescripcion',$this->fecha_prescripcion,true);
		$criteria->compare('medico_prescripcion',$this->medico_prescripcion);
		$criteria->compare('notas_prescripcion',$this->notas_prescripcion,true);
		$criteria->compare('fin_prescripcion',$this->fin_prescripcion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return HistoriaClinica the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
