<?php

namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "publisher".
 *
 * @property integer $id
 * @property string $name
 * @property string $date_registered
 * @property integer $identity_number
 */
class Publisher extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{publisher}}';
    }
    
    public function rules() {
        return [
            [['name', 'date_registered', 'identity_number'], 'required'],
            [['name'], 'string', 'length' => [2, 10]],
            [['date_registered'], 'date', 'format' => 'php:Y-m-d'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'date_registered' => 'Date Registered',
            'identity_number' => 'Identity Number',
        ];
    }
        
    public static function getList() {
        $list = self::find()->asArray()->all();
        return ArrayHelper::map($list, 'id', 'name');
    }
}
