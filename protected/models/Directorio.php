<?php

/**
 * This is the model class for table "directorio".
 *
 * The followings are the available columns in table 'directorio':
 * @property integer $id
 * @property string $titulo
 * @property string $fecha_registro
 * @property string $primer_nombre
 * @property string $segundo_nombre
 * @property string $primer_apellido
 * @property string $segundo_apellido
 * @property string $fecha_nacimiento
 * @property integer $medico_id
 * @property integer $enfermero_id
 * @property string $telefono_1_codigo
 * @property string $telefono_1_numero
 * @property string $telefono_2_codigo
 * @property string $telefono_2_numero
 * @property string $celular_1_nr
 * @property string $celular_2_nr
 * @property string $email
 * @property string $numero_habitacion
 * @property string $fecha
 *
 * The followings are the available model relations:
 * @property Medicos $medico
 * @property Enfermeras $enfermero
 */
class Directorio extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'directorio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('primer_nombre, primer_apellido', 'required'),
			array('medico_id, enfermero_id', 'numerical', 'integerOnly'=>true),
			array('titulo', 'length', 'max'=>25),
			array('primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, email', 'length', 'max'=>60),
			array('telefono_1_codigo, telefono_2_codigo', 'length', 'max'=>4),
			array('telefono_1_numero, telefono_2_numero', 'length', 'max'=>7),
			array('celular_1_nr, celular_2_nr', 'length', 'max'=>11),
			array('numero_habitacion', 'length', 'max'=>10),
			array('fecha_registro, fecha_nacimiento, fecha', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, titulo, fecha_registro, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, fecha_nacimiento, medico_id, enfermero_id, telefono_1_codigo, telefono_1_numero, telefono_2_codigo, telefono_2_numero, celular_1_nr, celular_2_nr, email, numero_habitacion, fecha', 'safe', 'on'=>'search'),
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
			'medico' => array(self::BELONGS_TO, 'Medicos', 'medico_id'),
			'enfermero' => array(self::BELONGS_TO, 'Enfermeras', 'enfermero_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'titulo' => 'Titulo',
			'fecha_registro' => 'Fecha Registro',
			'primer_nombre' => 'Primer Nombre',
			'segundo_nombre' => 'Segundo Nombre',
			'primer_apellido' => 'Primer Apellido',
			'segundo_apellido' => 'Segundo Apellido',
			'fecha_nacimiento' => 'Fecha Nacimiento',
			'medico_id' => 'Medico',
			'enfermero_id' => 'Enfermero',
			'telefono_1_codigo' => 'Telefono 1 Codigo',
			'telefono_1_numero' => 'Telefono 1 Numero',
			'telefono_2_codigo' => 'Telefono 2 Codigo',
			'telefono_2_numero' => 'Telefono 2 Numero',
			'celular_1_nr' => 'Celular 1 Nr',
			'celular_2_nr' => 'Celular 2 Nr',
			'email' => 'Email',
			'numero_habitacion' => 'Numero Habitacion',
			'fecha' => 'Fecha',
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
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('fecha_registro',$this->fecha_registro,true);
		$criteria->compare('primer_nombre',$this->primer_nombre,true);
		$criteria->compare('segundo_nombre',$this->segundo_nombre,true);
		$criteria->compare('primer_apellido',$this->primer_apellido,true);
		$criteria->compare('segundo_apellido',$this->segundo_apellido,true);
		$criteria->compare('fecha_nacimiento',$this->fecha_nacimiento,true);
		$criteria->compare('medico_id',$this->medico_id);
		$criteria->compare('enfermero_id',$this->enfermero_id);
		$criteria->compare('telefono_1_codigo',$this->telefono_1_codigo,true);
		$criteria->compare('telefono_1_numero',$this->telefono_1_numero,true);
		$criteria->compare('telefono_2_codigo',$this->telefono_2_codigo,true);
		$criteria->compare('telefono_2_numero',$this->telefono_2_numero,true);
		$criteria->compare('celular_1_nr',$this->celular_1_nr,true);
		$criteria->compare('celular_2_nr',$this->celular_2_nr,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('numero_habitacion',$this->numero_habitacion,true);
		$criteria->compare('fecha',$this->fecha,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Directorio the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
