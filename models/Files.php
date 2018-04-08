<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "files".
 *
 * @property int $id
 * @property string $filepath
 * @property int $category_id
 * @property int $method_id
 */
class Files extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'files';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['filepath', 'category_id', 'method_id'], 'required'],
            [['category_id', 'method_id'], 'integer'],
            [['filepath'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'filepath' => Yii::t('app', 'Filepath'),
            'category_id' => Yii::t('app', 'Category ID'),
            'method_id' => Yii::t('app', 'Method ID'),
        ];
    }
}
