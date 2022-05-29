<?php

/**
 * This is the model class for table "bill".
 *
 * The followings are the available columns in table 'bill':
 * @property integer $id
 * @property integer $foreignID
 * @property integer $nomer
 * @property string $usluga
 * @property string $data
 *
 * The followings are the available model relations:
 * @property Address $foreign
 */
class Bill extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'bill';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('foreignID, nomer', 'required'),
			array('foreignID, nomer', 'numerical', 'integerOnly'=>true),
			array('usluga', 'length', 'max'=>80),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('foreignID, nomer, usluga, data', 'safe', 'on'=>'search'),
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
			'foreign' => array(self::BELONGS_TO, 'Address', 'id'),
		);
	}

	// public function getAddress()
	// {
	// 	return $this->hasOne(Address::className(), ['foreignID' => 'id']);
	// }

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID счета',
			'foreignID' => 'ID адреса',
			'nomer' => 'Номер счёта',
			'usluga' => 'Наименование услуги',
			'data' => 'Дата',
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

		// $criteria->compare('id',$this->id);
		$criteria->compare('foreignID',$this->foreignID);
		$criteria->compare('nomer',$this->nomer);
		$criteria->compare('usluga',$this->usluga,true);
		$criteria->compare('data',$this->data,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Bill the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
