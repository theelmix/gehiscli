<?php

/**
 * This is the model class for table "noticias".
 *
 * The followings are the available columns in table 'noticias':
 * @property integer $id
 * @property integer $numero_articulo
 * @property string $categoria
 * @property string $estatus
 * @property string $titulo
 * @property string $prefacio
 * @property string $cuerpo_principal
 * @property string $autor
 * @property string $fecha
 */
class Noticias extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'noticias';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('numero_articulo, titulo, prefacio', 'required'),
			array('numero_articulo', 'numerical', 'integerOnly'=>true),
			array('categoria, autor', 'length', 'max'=>30),
			array('estatus', 'length', 'max'=>10),
			array('titulo, prefacio', 'length', 'max'=>255),
			array('cuerpo_principal, fecha', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, numero_articulo, categoria, estatus, titulo, prefacio, cuerpo_principal, autor, fecha', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'numero_articulo' => 'Numero Articulo',
			'categoria' => 'Categoria',
			'estatus' => 'Estatus',
			'titulo' => 'Titulo',
			'prefacio' => 'Prefacio',
			'cuerpo_principal' => 'Cuerpo Principal',
			'autor' => 'Autor',
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
		$criteria->compare('numero_articulo',$this->numero_articulo);
		$criteria->compare('categoria',$this->categoria,true);
		$criteria->compare('estatus',$this->estatus,true);
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('prefacio',$this->prefacio,true);
		$criteria->compare('cuerpo_principal',$this->cuerpo_principal,true);
		$criteria->compare('autor',$this->autor,true);
		$criteria->compare('fecha',$this->fecha,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Noticias the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
