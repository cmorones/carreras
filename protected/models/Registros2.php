<?php

/**
 * This is the model class for table "registros".
 *
 * The followings are the available columns in table 'registros':
 * @property integer $id
 * @property integer $carrera
 * @property integer $distancia
 * @property integer $tipo_usuario
 * @property string $id_empleado
 * @property string $id_invitado
 * @property string $nombre
 * @property string $apellido_paterno
 * @property string $apellido_materno
 * @property string $email
 * @property integer $edad
 * @property integer $sexo
 * @property string $ciudad
 * @property string $telefono
 * @property integer $talla
 * @property integer $status
 * @property string $paypal
 * @property integer $sindicalizado
 * @property integer $dorsal
 * @property string $fecha
 */
class Registros extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Registros the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'registros';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('carrera, distancia, nombre, apellido_paterno, apellido_materno, email, edad, sexo, ciudad, telefono, talla, status, paypal, sindicalizado, dorsal', 'required'),
			//array('carrera, distancia, tipo_usuario, edad, sexo, talla, status, sindicalizado, dorsal', 'numerical', 'integerOnly'=>true),
			array('id_empleado, id_invitado, nombre, apellido_paterno, apellido_materno, email, ciudad, telefono, paypal', 'length', 'max'=>100),
			array('fecha', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, carrera, distancia, tipo_usuario, id_empleado, id_invitado, nombre, apellido_paterno, apellido_materno, email, edad, sexo, ciudad, telefono, talla, status, paypal, sindicalizado, dorsal, fecha', 'safe', 'on'=>'search'),
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
			'carrera' => 'Carrera',
			'distancia' => 'Distancia',
			'tipo_usuario' => 'Tipo Usuario',
			'id_empleado' => 'Id Empleado',
			'id_invitado' => 'Id Invitado',
			'nombre' => 'Nombre',
			'apellido_paterno' => 'Apellido Paterno',
			'apellido_materno' => 'Apellido Materno',
			'email' => 'Email',
			'edad' => 'Edad',
			'sexo' => 'Sexo',
			'ciudad' => 'Ciudad',
			'telefono' => 'Telefono',
			'talla' => 'Talla',
			'status' => 'Status',
			'paypal' => 'Paypal',
			'sindicalizado' => 'Sindicalizado',
			'dorsal' => 'Dorsal',
			'fecha' => 'Fecha',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('carrera',$this->carrera);
		$criteria->compare('distancia',$this->distancia);
		$criteria->compare('tipo_usuario',$this->tipo_usuario);
		$criteria->compare('id_empleado',$this->id_empleado,true);
		$criteria->compare('id_invitado',$this->id_invitado,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido_paterno',$this->apellido_paterno,true);
		$criteria->compare('apellido_materno',$this->apellido_materno,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('edad',$this->edad);
		$criteria->compare('sexo',$this->sexo);
		$criteria->compare('ciudad',$this->ciudad,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('talla',$this->talla);
		$criteria->compare('status',$this->status);
		$criteria->compare('paypal',$this->paypal,true);
		$criteria->compare('sindicalizado',$this->sindicalizado);
		$criteria->compare('dorsal',$this->dorsal);
		$criteria->compare('fecha',$this->fecha,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}