<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "address".
 *
 * @property int $id
 * @property string $gorod
 * @property string $adres
 * @property int $dom
 * @property string $korpus
 * @property int $kvartira
 *
 */
class Houses extends CActiveRecord
{
    /**
     */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
    /**
     */

    /**
     */
    public function tablename()
    {
        return 'address';
    }
    /**
     */

    /**
     * @return array validation rules for model attributes
     */
    public function rules()
    {
        return array(
            array('id,dom,kvartira', 'numerical', 'integerOnly'=>true),
            array('gorod', 'length', 'max'=>50),
            array('adres', 'length', 'max'=>100),
            array('korpus', 'length', 'max'=>10));
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'gorod' => 'Город',
            'adres' => 'Улица',
            'dom' => 'Дом',
            'korpus' => 'Корпус',
            'kvartira' => 'Квартира'
        ];
    }
}