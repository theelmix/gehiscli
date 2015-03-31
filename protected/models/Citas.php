<?php

/**
 * This is the model class for table "citas".
 *
 * The followings are the available columns in table 'citas':
 * @property integer $id
 * @property integer $paciente_id
 * @property string $fecha
 * @property string $hora
 * @property string $especialidad
 * @property integer $medico_id
 * @property string $proposito
 * @property integer $urgente
 * @property integer $recordatorio
 * @property integer $recordatorio_email
 * @property integer $recordatorio_telefono
 * @property string $razon_cancelado
 * @property integer $encuentro_id
 * @property string $estatus
 *
 * The followings are the available model relations:
 * @property Paciente $paciente
 * @property Medicos $medico
 */
class Citas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'citas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('paciente_id, medico_id, proposito', 'required'),
			array('paciente_id, medico_id, urgente, recordatorio, recordatorio_email, recordatorio_telefono, encuentro_id', 'numerical', 'integerOnly'=>true),
			array('especialidad, estatus', 'length', 'max'=>25),
			array('razon_cancelado', 'length', 'max'=>255),
			array('fecha, hora', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, paciente_id, fecha, hora, especialidad, medico_id, proposito, urgente, recordatorio, recordatorio_email, recordatorio_telefono, razon_cancelado, encuentro_id, estatus', 'safe', 'on'=>'search'),
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
			'medico' => array(self::BELONGS_TO, 'Medicos', 'medico_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'paciente_id' => 'Paciente',
			'fecha' => 'Fecha',
			'hora' => 'Hora',
			'especialidad' => 'Especialidad',
			'medico_id' => 'Medico',
			'proposito' => 'Proposito',
			'urgente' => 'Urgente',
			'recordatorio' => 'Recordatorio',
			'recordatorio_email' => 'Recordatorio Email',
			'recordatorio_telefono' => 'Recordatorio Telefono',
			'razon_cancelado' => 'Razon Cancelado',
			'encuentro_id' => 'Encuentro',
			'estatus' => 'Estatus',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('paciente_id',$this->paciente_id);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('hora',$this->hora,true);
		$criteria->compare('especialidad',$this->especialidad,true);
		$criteria->compare('medico_id',$this->medico_id);
		$criteria->compare('proposito',$this->proposito,true);
		$criteria->compare('urgente',$this->urgente);
		$criteria->compare('recordatorio',$this->recordatorio);
		$criteria->compare('recordatorio_email',$this->recordatorio_email);
		$criteria->compare('recordatorio_telefono',$this->recordatorio_telefono);
		$criteria->compare('razon_cancelado',$this->razon_cancelado,true);
		$criteria->compare('encuentro_id',$this->encuentro_id);
		$criteria->compare('estatus',$this->estatus,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Citas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
