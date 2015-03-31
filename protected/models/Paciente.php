<?php

/**
 * This is the model class for table "paciente".
 *
 * The followings are the available columns in table 'paciente':
 * @property integer $id
 * @property string $fecha_registro
 * @property string $primer_nombre
 * @property string $segundo_nombre
 * @property string $primer_apellido
 * @property string $segundo_apellido
 * @property string $fecha_nacimiento
 * @property string $tipo_sangre
 * @property string $direccion
 * @property string $nacionalidad
 * @property string $telefono_1_codigo
 * @property string $telefono_1_numero
 * @property string $telefono_2_codigo
 * @property string $telefono_2_numero
 * @property string $celular_1_nr
 * @property string $celular_2_nr
 * @property string $email
 * @property string $estado_civil
 * @property string $sexo
 *
 * The followings are the available model relations:
 * @property Citas[] $citases
 * @property Admision[] $admisions
 * @property HistoriaClinica[] $historiaClinicas
 */
class Paciente extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'paciente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('primer_nombre, primer_apellido, segundo_apellido', 'required'),
			array('primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, email', 'length', 'max'=>60),
			array('tipo_sangre', 'length', 'max'=>2),
			array('direccion', 'length', 'max'=>255),
			array('nacionalidad, estado_civil', 'length', 'max'=>35),
			array('telefono_1_codigo, telefono_2_codigo', 'length', 'max'=>4),
			array('telefono_1_numero, telefono_2_numero', 'length', 'max'=>7),
			array('celular_1_nr, celular_2_nr', 'length', 'max'=>11),
			array('sexo', 'length', 'max'=>1),
			array('fecha_registro, fecha_nacimiento', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, fecha_registro, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, fecha_nacimiento, tipo_sangre, direccion, nacionalidad, telefono_1_codigo, telefono_1_numero, telefono_2_codigo, telefono_2_numero, celular_1_nr, celular_2_nr, email, estado_civil, sexo', 'safe', 'on'=>'search'),
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
			'citases' => array(self::HAS_MANY, 'Citas', 'paciente_id'),
			'admisions' => array(self::HAS_MANY, 'Admision', 'paciente_id'),
			'historiaClinicas' => array(self::HAS_MANY, 'HistoriaClinica', 'paciente_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'fecha_registro' => 'Fecha Registro',
			'primer_nombre' => 'Primer Nombre',
			'segundo_nombre' => 'Segundo Nombre',
			'primer_apellido' => 'Primer Apellido',
			'segundo_apellido' => 'Segundo Apellido',
			'fecha_nacimiento' => 'Fecha Nacimiento',
			'tipo_sangre' => 'Tipo Sangre',
			'direccion' => 'Direccion',
			'nacionalidad' => 'Nacionalidad',
			'telefono_1_codigo' => 'Telefono 1 Codigo',
			'telefono_1_numero' => 'Telefono 1 Numero',
			'telefono_2_codigo' => 'Telefono 2 Codigo',
			'telefono_2_numero' => 'Telefono 2 Numero',
			'celular_1_nr' => 'Celular 1 Nr',
			'celular_2_nr' => 'Celular 2 Nr',
			'email' => 'Email',
			'estado_civil' => 'Estado Civil',
			'sexo' => 'Sexo',
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
		$criteria->compare('fecha_registro',$this->fecha_registro,true);
		$criteria->compare('primer_nombre',$this->primer_nombre,true);
		$criteria->compare('segundo_nombre',$this->segundo_nombre,true);
		$criteria->compare('primer_apellido',$this->primer_apellido,true);
		$criteria->compare('segundo_apellido',$this->segundo_apellido,true);
		$criteria->compare('fecha_nacimiento',$this->fecha_nacimiento,true);
		$criteria->compare('tipo_sangre',$this->tipo_sangre,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('nacionalidad',$this->nacionalidad,true);
		$criteria->compare('telefono_1_codigo',$this->telefono_1_codigo,true);
		$criteria->compare('telefono_1_numero',$this->telefono_1_numero,true);
		$criteria->compare('telefono_2_codigo',$this->telefono_2_codigo,true);
		$criteria->compare('telefono_2_numero',$this->telefono_2_numero,true);
		$criteria->compare('celular_1_nr',$this->celular_1_nr,true);
		$criteria->compare('celular_2_nr',$this->celular_2_nr,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('estado_civil',$this->estado_civil,true);
		$criteria->compare('sexo',$this->sexo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Paciente the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
