<?php

/**
 * This is the model class for table "usuarios".
 *
 * The followings are the available columns in table 'usuarios':
 * @property integer $id
 * @property string $nombre
 * @property string $dni
 * @property string $roles
 * @property string $calle
 * @property string $poblacion
 * @property string $provincia
 * @property integer $cp
 * @property string $email
 * @property integer $telefono
 * @property string $fecha_alta
 * @property string $usuario
 * @property string $password
 */
class Usuarios extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuarios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, email, usuario, password', 'required'),
			array('cp, telefono', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>50),
			array('dni', 'length', 'max'=>10),
			array('roles', 'length', 'max'=>1),
			array('calle, email', 'length', 'max'=>100),
			array('poblacion, provincia', 'length', 'max'=>80),
			array('usuario', 'length', 'max'=>40),
			array('password', 'length', 'max'=>32),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombre, dni, roles, calle, poblacion, provincia, cp, email, telefono, fecha_alta, usuario, password', 'safe', 'on'=>'search'),
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
			'nombre' => 'Nombre',
			'dni' => 'Dni',
			'roles' => 'Roles',
			'calle' => 'Calle',
			'poblacion' => 'Poblacion',
			'provincia' => 'Provincia',
			'cp' => 'Cp',
			'email' => 'Email',
			'telefono' => 'Telefono',
			'fecha_alta' => 'Fecha Alta',
			'usuario' => 'Usuario',
			'password' => 'Password',
		);
	}
	
	/**
	 * Antes de ejecutar la acción de guardado realiza la operación indicada
	 * en ete caso asignar el valor de la fecha actual.
	 * Evento que se ejecuta antes de una acción.
	 */
	public function beforeSave() {
		if ($this->isNewRecord) {
			$this->fecha_alta = date ( 'd/m/Y' );
			$this->password = md5($this->password);
		}
		return parent::beforeSave ();
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
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('dni',$this->dni,true);
		$criteria->compare('roles',$this->roles,true);
		$criteria->compare('calle',$this->calle,true);
		$criteria->compare('poblacion',$this->poblacion,true);
		$criteria->compare('provincia',$this->provincia,true);
		$criteria->compare('cp',$this->cp);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('telefono',$this->telefono);
		$criteria->compare('fecha_alta',$this->fecha_alta,true);
		$criteria->compare('usuario',$this->usuario,true);
		$criteria->compare('password',$this->password,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuarios the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function scopes() {
		return array (
				"empleados" => array (
						'condition' => 'roles="E"',
						"order" => 'nombre'
				),
				"clientes" => array (
						'condition' => 'roles="C"',
						"order" => 'nombre'
				)
		);
	}
	
	public function behaviors() {
		return array (
				'datetimeI18NBehavior' => array (
						'class' => 'DateTimeI18NBehavior'
				)
		);
	}
	
}
