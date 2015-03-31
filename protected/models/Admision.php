<?php

/**
 * This is the model class for table "admision".
 *
 * The followings are the available columns in table 'admision':
 * @property integer $encuentro_id
 * @property string $paciente_id
 * @property string $encuentro_fecha
 * @property string $encuentro_tipo
 * @property string $hora
 * @property string $diagnostico_referido
 * @property string $terapia_recomendada_referido
 * @property string $medico_referido
 * @property string $institucion_referido
 * @property string $notas_referido
 * @property string $compania_seguros
 * @property string $compania_seguros2
 * @property string $contacto_paciente_nombre
 * @property string $contacto_paciente_apellido
 * @property string $contacto_relation
 * @property integer $numero_habitacion
 * @property string $doctor_consulta
 * @property string $servicios_extras
 * @property integer $alta
 * @property string $fecha_alta
 * @property string $hora_alta
 * @property string $fecha_revision
 * @property string $responsable_revision
 * @property string $notas_encuentro
 * @property string $estatus
 * @property string $primer_nombre
 * @property string $primer_apellido
 *
 * The followings are the available model relations:
 * @property Paciente $paciente
 */
class Admision extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'admision';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('paciente_id, primer_nombre, primer_apellido', 'required'),
			array('numero_habitacion, alta', 'numerical', 'integerOnly'=>true),
			array('encuentro_tipo, contacto_relation', 'length', 'max'=>35),
			array('diagnostico_referido, terapia_recomendada_referido, institucion_referido, responsable_revision', 'length', 'max'=>255),
			array('medico_referido, doctor_consulta, primer_nombre, primer_apellido', 'length', 'max'=>60),
			array('compania_seguros, compania_seguros2, servicios_extras, estatus', 'length', 'max'=>25),
			array('contacto_paciente_nombre, contacto_paciente_apellido', 'length', 'max'=>30),
			array('encuentro_fecha, hora, notas_referido, fecha_alta, hora_alta, fecha_revision, notas_encuentro', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('encuentro_id, paciente_id, encuentro_fecha, encuentro_tipo, hora, diagnostico_referido, terapia_recomendada_referido, medico_referido, institucion_referido, notas_referido, compania_seguros, compania_seguros2, contacto_paciente_nombre, contacto_paciente_apellido, contacto_relation, numero_habitacion, doctor_consulta, servicios_extras, alta, fecha_alta, hora_alta, fecha_revision, responsable_revision, notas_encuentro, estatus, primer_nombre, primer_apellido', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'encuentro_id' => 'Encuentro',
			'paciente_id' => 'Paciente',
			'encuentro_fecha' => 'Encuentro Fecha',
			'encuentro_tipo' => 'Encuentro Tipo',
			'hora' => 'Hora',
			'diagnostico_referido' => 'Diagnostico Referido',
			'terapia_recomendada_referido' => 'Terapia Recomendada Referido',
			'medico_referido' => 'Medico Referido',
			'institucion_referido' => 'Institucion Referido',
			'notas_referido' => 'Notas Referido',
			'compania_seguros' => 'Compania Seguros',
			'compania_seguros2' => 'Compania Seguros2',
			'contacto_paciente_nombre' => 'Contacto Paciente Nombre',
			'contacto_paciente_apellido' => 'Contacto Paciente Apellido',
			'contacto_relation' => 'Contacto Relation',
			'numero_habitacion' => 'Numero Habitacion',
			'doctor_consulta' => 'Doctor Consulta',
			'servicios_extras' => 'Servicios Extras',
			'alta' => 'Alta',
			'fecha_alta' => 'Fecha Alta',
			'hora_alta' => 'Hora Alta',
			'fecha_revision' => 'Fecha Revision',
			'responsable_revision' => 'Responsable Revision',
			'notas_encuentro' => 'Notas Encuentro',
			'estatus' => 'Estatus',
			'primer_nombre' => 'Primer Nombre',
			'primer_apellido' => 'Primer Apellido',
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

		$criteria->compare('encuentro_id',$this->encuentro_id);
		$criteria->compare('paciente_id',$this->paciente_id,true);
		$criteria->compare('encuentro_fecha',$this->encuentro_fecha,true);
		$criteria->compare('encuentro_tipo',$this->encuentro_tipo,true);
		$criteria->compare('hora',$this->hora,true);
		$criteria->compare('diagnostico_referido',$this->diagnostico_referido,true);
		$criteria->compare('terapia_recomendada_referido',$this->terapia_recomendada_referido,true);
		$criteria->compare('medico_referido',$this->medico_referido,true);
		$criteria->compare('institucion_referido',$this->institucion_referido,true);
		$criteria->compare('notas_referido',$this->notas_referido,true);
		$criteria->compare('compania_seguros',$this->compania_seguros,true);
		$criteria->compare('compania_seguros2',$this->compania_seguros2,true);
		$criteria->compare('contacto_paciente_nombre',$this->contacto_paciente_nombre,true);
		$criteria->compare('contacto_paciente_apellido',$this->contacto_paciente_apellido,true);
		$criteria->compare('contacto_relation',$this->contacto_relation,true);
		$criteria->compare('numero_habitacion',$this->numero_habitacion);
		$criteria->compare('doctor_consulta',$this->doctor_consulta,true);
		$criteria->compare('servicios_extras',$this->servicios_extras,true);
		$criteria->compare('alta',$this->alta);
		$criteria->compare('fecha_alta',$this->fecha_alta,true);
		$criteria->compare('hora_alta',$this->hora_alta,true);
		$criteria->compare('fecha_revision',$this->fecha_revision,true);
		$criteria->compare('responsable_revision',$this->responsable_revision,true);
		$criteria->compare('notas_encuentro',$this->notas_encuentro,true);
		$criteria->compare('estatus',$this->estatus,true);
		$criteria->compare('primer_nombre',$this->primer_nombre,true);
		$criteria->compare('primer_apellido',$this->primer_apellido,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Admision the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
