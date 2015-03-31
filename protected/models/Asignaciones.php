<?php

/**
 * This is the model class for table "asignaciones".
 *
 * The followings are the available columns in table 'asignaciones':
 * @property integer $id
 * @property string $actividad
 * @property string $descripcion_actividad
 * @property integer $id_responsable
 * @property integer $id_quirofano
 * @property string $fecha_inicio
 * @property string $hora
 * @property string $fecha_fin
 * @property integer $temporal
 * @property string $estatus
 *
 * The followings are the available model relations:
 * @property Medicos $idResponsable
 * @property Quirofano $idQuirofano
 */
class Asignaciones extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'asignaciones';
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
			array('id_responsable, id_quirofano, temporal', 'numerical', 'integerOnly'=>true),
			array('actividad', 'length', 'max'=>35),
			array('estatus', 'length', 'max'=>25),
			array('descripcion_actividad, fecha_inicio, hora, fecha_fin', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, actividad, descripcion_actividad, id_responsable, id_quirofano, fecha_inicio, hora, fecha_fin, temporal, estatus', 'safe', 'on'=>'search'),
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
			'idQuirofano' => array(self::BELONGS_TO, 'Quirofano', 'id_quirofano'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'actividad' => 'Actividad',
			'descripcion_actividad' => 'Descripcion Actividad',
			'id_responsable' => 'Id Responsable',
			'id_quirofano' => 'Id Quirofano',
			'fecha_inicio' => 'Fecha Inicio',
			'hora' => 'Hora',
			'fecha_fin' => 'Fecha Fin',
			'temporal' => 'Temporal',
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
		$criteria->compare('actividad',$this->actividad,true);
		$criteria->compare('descripcion_actividad',$this->descripcion_actividad,true);
		$criteria->compare('id_responsable',$this->id_responsable);
		$criteria->compare('id_quirofano',$this->id_quirofano);
		$criteria->compare('fecha_inicio',$this->fecha_inicio,true);
		$criteria->compare('hora',$this->hora,true);
		$criteria->compare('fecha_fin',$this->fecha_fin,true);
		$criteria->compare('temporal',$this->temporal);
		$criteria->compare('estatus',$this->estatus,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Asignaciones the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
