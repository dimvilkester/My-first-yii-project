<?php

namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;
/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property string $name
 * @property string $code
 * @property string $colour
 * @property double $price
 * @property string $description
 * @property string $characteristic
 * @property string $size
 * @property integer $category_id
 * @property integer $manufacturer_id
 * @property integer $status
 */
class Product extends ActiveRecord
{
    /**
     * @return string название таблицы, сопоставленной с этим ActiveRecord-классом
     */
    public static function tableName()
    {
        return '{{product}}';
    }

    /**
     * @return array the validation rules for attributes
     */
    public function rules()
    {
        return [
            [['name', 'code', 'colour', 'price', 'description', 'characteristic', 'size', 'category_id', 'manufacturer_id', 'status'], 'required'],
            [['price'], 'number'],
            [['description'], 'string'],
            [['category_id', 'manufacturer_id', 'status'], 'integer'],
            [['name', 'code', 'colour', 'characteristic', 'size'], 'string', 'max' => 255],
        ];
    }
    
    /**
     * @return Category|NULL
     */
    public function getCategory() {
        return $this->hasOne(Category::className(), ['id' => 'category_id'])->one();
    }
    
    /**
     * @return string
     */
    public function getCategoryName() {
        if($category = $this->getCategory()){
            return $category->name;
        }
        
        return 'Category not set';
    }
    
    /**
     * @return Manufacturer|NULL
     */    
    public function getManufacturer() {
        return $this->hasOne(Manufacturer::className(), ['id' => 'manufacturer_id'])->one();
    }
    
    /**
     * @return string
     */
    public function getManufacturerName() {
        if($manufacturer = $this->getManufacturer()){
            return $manufacturer->name;
        }
        
        return 'Manufacturer not set';
    }
}
