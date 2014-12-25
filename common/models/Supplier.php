<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "supplier".
 *
 * @property integer $id
 * @property string $name
 * @property string $link
 * @property string $description
 * @property string $catalog
 * @property integer $created_at
 * @property integer $updated_at
 */
class Supplier extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'supplier';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'link', 'description', 'catalog', 'created_at', 'updated_at'], 'required'],
            [['created_at', 'updated_at'], 'integer'],
            [['name'], 'string', 'max' => 30],
            [['link'], 'string', 'max' => 45],
            [['description'], 'string', 'max' => 255],
            [['catalog'], 'string', 'max' => 32]
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
            'link' => 'Link',
            'description' => 'Description',
            'catalog' => 'Catalog',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
