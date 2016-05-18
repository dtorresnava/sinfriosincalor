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
 * @property integer $dimencion_alto_ue
 * @property integer $dimencion_ancho_ue
 * @property integer $dimencion_largo_ue
 * @property integer $peso_ue
 * @property integer $conexion_pequenya
 * @property integer $conexion_grande
 * @property string $tipo_caudal
 * @property string $posicion_tubos_conextion
 * @property integer $peso_ui
 * @property integer $dimencion_alto_ui
 * @property integer $dimencion_ancho_ui
 * @property integer $dimencion_largo_ui
 * @property integer $cantidad_unidades
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
			array('producto_id, potencia_frio, potencia_calor, eficiencia_frio, eficiencia_calor, consumo_frio, consumo_calor, dimencion_alto_ue, dimencion_ancho_ue, dimencion_largo_ue, peso_ue, conexion_pequenya, conexion_grande, tipo_caudal, posicion_tubos_conextion, peso_ui, dimencion_alto_ui, dimencion_ancho_ui, dimencion_largo_ui, cantidad_unidades', 'required'),
			array('producto_id, dimencion_alto_ue, dimencion_ancho_ue, dimencion_largo_ue, peso_ue, conexion_pequenya, conexion_grande, peso_ui, dimencion_alto_ui, dimencion_ancho_ui, dimencion_largo_ui, cantidad_unidades', 'numerical', 'integerOnly'=>true),
			array('potencia_frio, potencia_calor, eficiencia_frio, eficiencia_calor, consumo_frio, consumo_calor', 'numerical'),
			array('tipo_caudal', 'length', 'max'=>8),
			array('posicion_tubos_conextion', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, producto_id, potencia_frio, potencia_calor, eficiencia_frio, eficiencia_calor, consumo_frio, consumo_calor, dimencion_alto_ue, dimencion_ancho_ue, dimencion_largo_ue, peso_ue, conexion_pequenya, conexion_grande, tipo_caudal, posicion_tubos_conextion, peso_ui, dimencion_alto_ui, dimencion_ancho_ui, dimencion_largo_ui, cantidad_unidades', 'safe', 'on'=>'search'),
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
			'dimencion_alto_ue' => 'Dimencion Alto Ue',
			'dimencion_ancho_ue' => 'Dimencion Ancho Ue',
			'dimencion_largo_ue' => 'Dimencion Largo Ue',
			'peso_ue' => 'Peso Ue',
			'conexion_pequenya' => 'Conexion Pequenya',
			'conexion_grande' => 'Conexion Grande',
			'tipo_caudal' => 'Tipo Caudal',
			'posicion_tubos_conextion' => 'Posicion Tubos Conextion',
			'peso_ui' => 'Peso Ui',
			'dimencion_alto_ui' => 'Dimencion Alto Ui',
			'dimencion_ancho_ui' => 'Dimencion Ancho Ui',
			'dimencion_largo_ui' => 'Dimencion Largo Ui',
			'cantidad_unidades' => 'Cantidad Unidades',
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
		$criteria->compare('dimencion_alto_ue',$this->dimencion_alto_ue);
		$criteria->compare('dimencion_ancho_ue',$this->dimencion_ancho_ue);
		$criteria->compare('dimencion_largo_ue',$this->dimencion_largo_ue);
		$criteria->compare('peso_ue',$this->peso_ue);
		$criteria->compare('conexion_pequenya',$this->conexion_pequenya);
		$criteria->compare('conexion_grande',$this->conexion_grande);
		$criteria->compare('tipo_caudal',$this->tipo_caudal,true);
		$criteria->compare('posicion_tubos_conextion',$this->posicion_tubos_conextion,true);
		$criteria->compare('peso_ui',$this->peso_ui);
		$criteria->compare('dimencion_alto_ui',$this->dimencion_alto_ui);
		$criteria->compare('dimencion_ancho_ui',$this->dimencion_ancho_ui);
		$criteria->compare('dimencion_largo_ui',$this->dimencion_largo_ui);
		$criteria->compare('cantidad_unidades',$this->cantidad_unidades);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function beforeSave() {
		if ($this->isNewRecord) {
			$producto=Productos::model()->findByAttributes(array(
					'id' => $this->producto_id
			));
			$producto->alta_especificaciones=1;
			$producto->save();
		}
		return parent::beforeSave ();
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
