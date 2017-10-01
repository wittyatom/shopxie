<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "city".
 *
 * @property string $country_code
 * @property string $city_name
 * @property integer $city_population
 * @property integer $city_id
 *
 * @property Country $countryCode
 */
class City extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'city';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['country_code', 'city_name', 'city_population'], 'required'],
            [['city_population'], 'integer'],
            [['country_code'], 'string', 'max' => 2],
            [['city_name'], 'string', 'max' => 50],
            [['country_code'], 'exist', 'skipOnError' => true, 'targetClass' => Country::className(), 'targetAttribute' => ['country_code' => 'code']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'country_code' => 'Country Code',
            'city_name' => 'City Name',
            'city_population' => 'City Population',
            'city_id' => 'City ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCountryCode()
    {
        return $this->hasOne(Country::className(), ['code' => 'country_code']);
    }
}
