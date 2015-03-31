<?php

/**
 * This is the model class for table "quirofano".
 *
 * The followings are the available columns in table 'quirofano':
 * @property integer $id
 * @property string $nombre
 * @property string $fecha
 * @property string $actividad
 * @property integer $id_responsable
 * @property integer $id_paciente
 * @property string $hora
 * @property integer $cierre_temporal
 * @property string $descripcion
 * @property string $informacion
 * @property string $notas_estatus
 * @property string $historia
 *
 * The followings are the available model relations:
 * @property Medicos $idResponsable
 * @property Paciente $idPaciente
 */
class Quirofano extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'quirofano';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('actividad', 'required'),
			array('id_responsable, id_paciente, cierre_temporal', 'numerical', 'integerOnly'=>true),
			array('nombre, actividad', 'length', 'max'=>35),
			array('notas_estatus', 'length', 'max'=>25),
			array('fecha, hora, descripcion, informacion, historia', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombre, fecha, actividad, id_responsable, id_paciente, hora, cierre_temporal, descripcion, informacion, notas_estatus, historia', 'safe', 'on'=>'search'),
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
			'idResponsable' => array(self::BELONGS_TO, 'Medicos', 'id_responsable'),
			'idPaciente' => array(self::BELONGS_TO, 'Paciente', 'id_paciente'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombre' => 'Nombre',
			'fecha' => 'Fecha',
			'actividad' => 'Actividad',
			'id_responsable' => 'Id Responsable',
			'id_paciente' => 'Id Paciente',
			'hora' => 'Hora',
			'cierre_temporal' => 'Cierre Temporal',
			'descripcion' => 'Descripcion',
			'informacion' => 'Informacion',
			'notas_estatus' => 'Notas Estatus',
			'historia' => 'Historia',
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
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('actividad',$this->actividad,true);
		$criteria->compare('id_responsable',$this->id_responsable);
		$criteria->compare('id_paciente',$this->id_paciente);
		$criteria->compare('hora',$this->hora,true);
		$criteria->compare('cierre_temporal',$this->cierre_temporal);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('informacion',$this->informacion,true);
		$criteria->compare('notas_estatus',$this->notas_estatus,true);
		$criteria->compare('historia',$this->historia,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Quirofano the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
