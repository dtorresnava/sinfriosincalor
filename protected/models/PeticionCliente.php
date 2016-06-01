<?php

/**
 * This is the model class for table "peticion_cliente".
 *
 * The followings are the available columns in table 'peticion_cliente':
 * @property integer $id
 * @property integer $cliente_id
 * @property integer $numero_pedido
 * @property string $largo_habitacion
 * @property string $ancho_habitacion
 * @property string $alto_habitacion
 * @property integer $orientacion
 * @property integer $matirial_ventana_id
 * @property string $alto_ventana
 * @property string $ancho_ventana
 * @property string $fecha_pedido
 * @property string $imagen_id
 *
 * The followings are the available model relations:
 * @property Usuarios $cliente
 * @property OrientacionMetadata $orientacion0
 * @property MaterialVentanaMetadata $matirialVentana
 * @property PresupuestoPeticion[] $presupuestoPeticions
 */
class PeticionCliente extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'peticion_cliente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cliente_id, numero_pedido, largo_habitacion, ancho_habitacion, alto_habitacion, orientacion, matirial_ventana_id, alto_ventana, ancho_ventana, fecha_pedido', 'required'),
			array('cliente_id, numero_pedido, orientacion, matirial_ventana_id', 'numerical', 'integerOnly'=>true),
			array('largo_habitacion, ancho_habitacion, alto_habitacion, alto_ventana, ancho_ventana, imagen_id', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, cliente_id, numero_pedido, largo_habitacion, ancho_habitacion, alto_habitacion, orientacion, matirial_ventana_id, alto_ventana, ancho_ventana, fecha_pedido, imagen_id', 'safe', 'on'=>'search'),
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
			'cliente' => array(self::BELONGS_TO, 'Usuarios', 'cliente_id'),
			'orientacion0' => array(self::BELONGS_TO, 'OrientacionMetadata', 'orientacion'),
			'matirialVentana' => array(self::BELONGS_TO, 'MaterialVentanaMetadata', 'matirial_ventana_id'),
			'presupuestoPeticions' => array(self::HAS_MANY, 'PresupuestoPeticion', 'peticion_cliente_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'cliente_id' => 'Cliente',
			'numero_pedido' => 'Numero Pedido',
			'largo_habitacion' => 'Largo Habitacion (cm)',
			'ancho_habitacion' => 'Ancho Habitacion (cm)',
			'alto_habitacion' => 'Alto Habitacion (cm)',
			'orientacion' => 'Orientacion',
			'matirial_ventana_id' => 'Matirial Ventana',
			'alto_ventana' => 'Alto Ventana (cm)',
			'ancho_ventana' => 'Ancho Ventana (cm)',
			'fecha_pedido' => 'Fecha Pedido',
			'imagen_id' => 'Imagen',
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
		$criteria->compare('cliente_id',$this->cliente_id);
		$criteria->compare('numero_pedido',$this->numero_pedido);
		$criteria->compare('largo_habitacion',$this->largo_habitacion,true);
		$criteria->compare('ancho_habitacion',$this->ancho_habitacion,true);
		$criteria->compare('alto_habitacion',$this->alto_habitacion,true);
		$criteria->compare('orientacion',$this->orientacion);
		$criteria->compare('matirial_ventana_id',$this->matirial_ventana_id);
		$criteria->compare('alto_ventana',$this->alto_ventana,true);
		$criteria->compare('ancho_ventana',$this->ancho_ventana,true);
		$criteria->compare('fecha_pedido',$this->fecha_pedido,true);
		$criteria->compare('imagen_id',$this->imagen_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PeticionCliente the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	
	public function beforeSave() {
		if ($this->isNewRecord) {		
			$this->fecha_pedido=date ( 'd/m/Y' );
		}
		return parent::beforeSave ();
	}
	
	public function behaviors() {
		return array (
				'datetimeI18NBehavior' => array (
						'class' => 'DateTimeI18NBehavior'
				)
		);
	}
}
