<?php

/**
 * This is the model class for table "especificaciones".
 *
 * The followings are the available columns in table 'especificaciones':
 * @property integer $id
 * @property integer $producto_id
 * @property double $potencia_frio
 * @property double $potencia_calor
 * @property double $eficiencia_frio
 * @property double $eficiencia_calor
 * @property double $consumo_frio
 * @property double $consumo_calor
 * @property double $dimencion_alto
 * @property double $dimencion_ancho
 * @property double $dimencion_largo
 * @property double $peso
 * @property integer $conexion_peque単a
 * @property integer $conexion_grande
 * @property string $tipo_caudal
 * @property string $posicion_tubos_conextion
 *
 * The followings are the available model relations:
 * @property Productos $producto
 */
class Especificaciones extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'especificaciones';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('producto_id, potencia_frio, potencia_calor, eficiencia_frio, eficiencia_calor, consumo_frio, consumo_calor, dimencion_alto, dimencion_ancho, dimencion_largo, peso, conexion_peque単a, conexion_grande, tipo_caudal, posicion_tubos_conextion', 'required'),
			array('producto_id, conexion_peque単a, conexion_grande', 'numerical', 'integerOnly'=>true),
			array('potencia_frio, potencia_calor, eficiencia_frio, eficiencia_calor, consumo_frio, consumo_calor, dimencion_alto, dimencion_ancho, dimencion_largo, peso', 'numerical'),
			array('tipo_caudal', 'length', 'max'=>8),
			array('posicion_tubos_conextion', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, producto_id, potencia_frio, potencia_calor, eficiencia_frio, eficiencia_calor, consumo_frio, consumo_calor, dimencion_alto, dimencion_ancho, dimencion_largo, peso, conexion_peque単a, conexion_grande, tipo_caudal, posicion_tubos_conextion', 'safe', 'on'=>'search'),
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
			'producto' => array(self::BELONGS_TO, 'Productos', 'producto_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'producto_id' => 'Producto',
			'potencia_frio' => 'Potencia Frio',
			'potencia_calor' => 'Potencia Calor',
			'eficiencia_frio' => 'Eficiencia Frio',
			'eficiencia_calor' => 'Eficiencia Calor',
			'consumo_frio' => 'Consumo Frio',
			'consumo_calor' => 'Consumo Calor',
			'dimencion_alto' => 'Dimencion Alto',
			'dimencion_ancho' => 'Dimencion Ancho',
			'dimencion_largo' => 'Dimencion Largo',
			'peso' => 'Peso',
			'conexion_peque単a' => 'Conexion Peque祓a',
			'conexion_grande' => 'Conexion Grande',
			'tipo_caudal' => 'Tipo Caudal',
			'posicion_tubos_conextion' => 'Posicion Tubos Conextion',
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
		$criteria->compare('producto_id',$this->producto_id);
		$criteria->compare('potencia_frio',$this->potencia_frio);
		$criteria->compare('potencia_calor',$this->potencia_calor);
		$criteria->compare('eficiencia_frio',$this->eficiencia_frio);
		$criteria->compare('eficiencia_calor',$this->eficiencia_calor);
		$criteria->compare('consumo_frio',$this->consumo_frio);
		$criteria->compare('consumo_calor',$this->consumo_calor);
		$criteria->compare('dimencion_alto',$this->dimencion_alto);
		$criteria->compare('dimencion_ancho',$this->dimencion_ancho);
		$criteria->compare('dimencion_largo',$this->dimencion_largo);
		$criteria->compare('peso',$this->peso);
		$criteria->compare('conexion_peque単a',$this->conexion_peque単a);
		$criteria->compare('conexion_grande',$this->conexion_grande);
		$criteria->compare('tipo_caudal',$this->tipo_caudal,true);
		$criteria->compare('posicion_tubos_conextion',$this->posicion_tubos_conextion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Especificaciones the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
