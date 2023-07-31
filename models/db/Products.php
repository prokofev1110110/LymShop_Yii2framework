<?php

namespace app\models\db;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string $title
 * @property int $price
 * @property string $image
 * @property int $category_id
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'price', 'image', 'category_id'], 'required'],
            [['price', 'category_id'], 'integer'],
            [['title', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'price' => 'Price',
            'image' => 'Image',
            'category_id' => 'Category ID',
        ];
    }
}
