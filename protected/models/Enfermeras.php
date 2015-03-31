<?php

/**
 * This is the model class for table "enfermeras".
 *
 * The followings are the available columns in table 'enfermeras':
 * @property integer $id
 * @property string $especialidad
 * @property string $primer_nombre
 * @property string $segundo_nombre
 * @property string $primer_apellido
 * @property string $segundo_apellido
 * @property string $telefono_1_codigo
 * @property string $telefono_1_numero
 * @property string $telefono_2_codigo
 * @property string $telefono_2_numero
 * @property string $celular_1_nr
 * @property string $celular_2_nr
 * @property string $email
 * @property string $sexo
 * @property string $fecha_entrada
 * @property string $fecha_salida
 *
 * The followings are the available model relations:
 * @property HistoriaClinica[] $historiaClinicas
 * @property Directorio[] $directorios
 */
class Enfermeras extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'enfermeras';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('especialidad, primer_nombre, primer_apellido', 'required'),
			array('especialidad, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, email', 'length', 'max'=>60),
			array('telefono_1_codigo, telefono_2_codigo', 'length', 'max'=>4),
			array('telefono_1_numero, telefono_2_numero', 'length', 'max'=>7),
			array('celular_1_nr, celular_2_nr', 'length', 'max'=>11),
			array('sexo', 'length', 'max'=>1),
			array('fecha_entrada, fecha_salida', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, especialidad, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, telefono_1_codigo, telefono_1_numero, telefono_2_codigo, telefono_2_numero, celular_1_nr, celular_2_nr, email, sexo, fecha_entrada, fecha_salida', 'safe', 'on'=>'search'),
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
			'historiaClinicas' => array(self::HAS_MANY, 'HistoriaClinica', 'enfermera'),
			'directorios' => array(self::HAS_MANY, 'Directorio', 'enfermero_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'especialidad' => 'Especialidad',
			'primer_nombre' => 'Primer Nombre',
			'segundo_nombre' => 'Segundo Nombre',
			'primer_apellido' => 'Primer Apellido',
			'segundo_apellido' => 'Segundo Apellido',
			'telefono_1_codigo' => 'Telefono 1 Codigo',
			'telefono_1_numero' => 'Telefono 1 Numero',
			'telefono_2_codigo' => 'Telefono 2 Codigo',
			'telefono_2_numero' => 'Telefono 2 Numero',
			'celular_1_nr' => 'Celular 1 Nr',
			'celular_2_nr' => 'Celular 2 Nr',
			'email' => 'Email',
			'sexo' => 'Sexo',
			'fecha_entrada' => 'Fecha Entrada',
			'fecha_salida' => 'Fecha Salida',
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
		$criteria->compare('especialidad',$this->especialidad,true);
		$criteria->compare('primer_nombre',$this->primer_nombre,true);
		$criteria->compare('segundo_nombre',$this->segundo_nombre,true);
		$criteria->compare('primer_apellido',$this->primer_apellido,true);
		$criteria->compare('segundo_apellido',$this->segundo_apellido,true);
		$criteria->compare('telefono_1_codigo',$this->telefono_1_codigo,true);
		$criteria->compare('telefono_1_numero',$this->telefono_1_numero,true);
		$criteria->compare('telefono_2_codigo',$this->telefono_2_codigo,true);
		$criteria->compare('telefono_2_numero',$this->telefono_2_numero,true);
		$criteria->compare('celular_1_nr',$this->celular_1_nr,true);
		$criteria->compare('celular_2_nr',$this->celular_2_nr,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('sexo',$this->sexo,true);
		$criteria->compare('fecha_entrada',$this->fecha_entrada,true);
		$criteria->compare('fecha_salida',$this->fecha_salida,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Enfermeras the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
