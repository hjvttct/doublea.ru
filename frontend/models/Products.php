<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string $name
 * @property int $categori-id
 * @property string $description
 * @property int $quantity
 * @property string $cost
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
            [['name', 'categori-id', 'description', 'quantity', 'cost'], 'required'],
            [['categori-id', 'quantity'], 'integer'],
            [['name', 'description', 'cost'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'categori-id' => 'Categori ID',
            'description' => 'Description',
            'quantity' => 'Quantity',
            'cost' => 'Cost',
        ];
    }
}
