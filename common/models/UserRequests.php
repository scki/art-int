<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%user_requests}}".
 *
 * @property int $id
 * @property string|null $fullName
 * @property string|null $town
 * @property string|null $address
 * @property string|null $text
 */
class UserRequests extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%user_requests}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['address', 'town', 'fullName', 'text'], 'required'],
            [['fullName', 'text'], 'string', 'max' => 200],
            [['town'], 'string', 'max' => 30],
            [['address'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fullName' => 'ФИО',
            'town' => 'Город',
            'address' => 'Адрес',
            'text' => 'Текст заявки',
        ];
    }
}
