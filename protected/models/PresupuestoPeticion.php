<?php

/**
 * This is the model class for table "presupuesto_peticion".
 *
 * The followings are the available columns in table 'presupuesto_peticion':
 * @property integer $id
 * @property integer $peticion_cliente_id
 * @property integer $producto_id
 * @property integer $servicio_id
 * @property integer $presupuesto_producto
 * @property integer $presupuesto_servicio
 * @property string $fecha_presupuesto
 * @property string $fecha_alta_presupuesto
 * @property integer $validar
 *
 * The followings are the available model relations:
 * @property PeticionCliente $peticionCliente
 * @property Productos $producto
 * @property Servicios $servicio
 */
class PresupuestoPeticion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'presupuesto_peticion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('peticion_cliente_id, fecha_presupuesto, validar', 'required'),
			array('peticion_cliente_id, producto_id, servicio_id, presupuesto_producto, presupuesto_servicio, validar', 'numerical', 'integerOnly'=>true),
			array('fecha_alta_presupuesto', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, peticion_cliente_id, producto_id, servicio_id, presupuesto_producto, presupuesto_servicio, fecha_presupuesto, fecha_alta_presupuesto, validar', 'safe', 'on'=>'search'),
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
			'peticionCliente' => array(self::BELONGS_TO, 'PeticionCliente', 'peticion_cliente_id'),
			'producto' => array(self::BELONGS_TO, 'Productos', 'producto_id'),
			'servicio' => array(self::BELONGS_TO, 'Servicios', 'servicio_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'peticion_cliente_id' => 'Peticion Cliente',
			'producto_id' => 'Producto',
			'servicio_id' => 'Servicio',
			'presupuesto_producto' => 'Presupuesto Producto',
			'presupuesto_servicio' => 'Presupuesto Servicio',
			'fecha_presupuesto' => 'Fecha Presupuesto',
			'fecha_alta_presupuesto' => 'Fecha Alta Presupuesto',
			'validar' => 'Validar',
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
		$criteria->compare('peticion_cliente_id',$this->peticion_cliente_id);
		$criteria->compare('producto_id',$this->producto_id);
		$criteria->compare('servicio_id',$this->servicio_id);
		$criteria->compare('presupuesto_producto',$this->presupuesto_producto);
		$criteria->compare('presupuesto_servicio',$this->presupuesto_servicio);
		$criteria->compare('fecha_presupuesto',$this->fecha_presupuesto,true);
		$criteria->compare('fecha_alta_presupuesto',$this->fecha_alta_presupuesto,true);
		$criteria->compare('validar',$this->validar);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PresupuestoPeticion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	
	public function behaviors() {
		return array (
				'datetimeI18NBehavior' => array (
						'class' => 'DateTimeI18NBehavior'
				)
		);
	}
	
}
