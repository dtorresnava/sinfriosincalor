<?php

/**
 * This is the model class for table "productos".
 *
 * The followings are the available columns in table 'productos':
 * @property integer $id
 * @property string $modelo
 * @property integer $fabricante_id
 * @property integer $codigo
 * @property string $descripcion
 * @property string $tipo
 * @property double $precio
 * @property integer $alta_especificaciones
 *
 * The followings are the available model relations:
 * @property Especificaciones[] $especificaciones
 * @property Fabricante $fabricante
 */
class Productos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'productos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('modelo, fabricante_id, codigo, descripcion, tipo, precio, alta_especificaciones', 'required'),
			array('fabricante_id, codigo, alta_especificaciones', 'numerical', 'integerOnly'=>true),
			array('precio', 'numerical'),
			array('modelo, tipo', 'length', 'max'=>20),
			array('descripcion', 'length', 'max'=>400),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, modelo, fabricante_id, codigo, descripcion, tipo, precio, alta_especificaciones', 'safe', 'on'=>'search'),
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
			'especificaciones' => array(self::HAS_MANY, 'Especificaciones', 'producto_id'),
			'fabricante' => array(self::BELONGS_TO, 'Fabricante', 'fabricante_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'modelo' => 'Modelo',
			'fabricante_id' => 'Fabricante',
			'codigo' => 'Codigo',
			'descripcion' => 'Descripcion',
			'tipo' => 'Tipo',
			'precio' => 'Precio',
			'alta_especificaciones' => 'Alta Especificaciones',
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
		$criteria->compare('modelo',$this->modelo,true);
		$criteria->compare('fabricante_id',$this->fabricante_id);
		$criteria->compare('codigo',$this->codigo);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('tipo',$this->tipo,true);
		$criteria->compare('precio',$this->precio);
		$criteria->compare('alta_especificaciones',$this->alta_especificaciones);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Productos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
