<?php

/**
 * This is the model class for table "detalle_carrera".
 *
 * The followings are the available columns in table 'detalle_carrera':
 * @property integer $id
 * @property string $id_carrera
 * @property string $titulo
 * @property string $subtitulo
 * @property string $fecha
 * @property string $distancia
 * @property string $horario
 * @property integer $cupo
 * @property string $rutaImg
 * @property string $rutaKit
 * @property string $rutaFile
 * @property string $fecha_evento
 * @property string $img_paisaje
 */
class DetalleCarerra extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return DetalleCarerra the static model class
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
		return 'detalle_carrera';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cupo', 'numerical', 'integerOnly'=>true),
			array('id_carrera, titulo, subtitulo, fecha, distancia, horario, rutaImg, rutaKit, rutaFile, img_paisaje', 'length', 'max'=>255),
			array('fecha_evento', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, id_carrera, titulo, subtitulo, fecha, distancia, horario, cupo, rutaImg, rutaKit, rutaFile, fecha_evento, img_paisaje', 'safe', 'on'=>'search'),
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
			'id_carrera' => 'Id Carrera',
			'titulo' => 'Titulo',
			'subtitulo' => 'Subtitulo',
			'fecha' => 'Fecha',
			'distancia' => 'Distancia',
			'horario' => 'Horario',
			'cupo' => 'Cupo',
			'rutaImg' => 'Ruta Img',
			'rutaKit' => 'Ruta Kit',
			'rutaFile' => 'Ruta File',
			'fecha_evento' => 'Fecha Evento',
			'img_paisaje' => 'Img Paisaje',
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
		$criteria->compare('id_carrera',$this->id_carrera,true);
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('subtitulo',$this->subtitulo,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('distancia',$this->distancia,true);
		$criteria->compare('horario',$this->horario,true);
		$criteria->compare('cupo',$this->cupo);
		$criteria->compare('rutaImg',$this->rutaImg,true);
		$criteria->compare('rutaKit',$this->rutaKit,true);
		$criteria->compare('rutaFile',$this->rutaFile,true);
		$criteria->compare('fecha_evento',$this->fecha_evento,true);
		$criteria->compare('img_paisaje',$this->img_paisaje,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}