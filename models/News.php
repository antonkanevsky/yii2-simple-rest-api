<?php

namespace app\models;

use yii\behaviors\TimestampBehavior;

/**
 * Модель для сущности "Новость".
 *
 * @property int $id Идентификатор
 * @property string $title Заголовок
 * @property string $seo SEO URL
 * @property int author_id Автор
 * @property string $html Содержимое
 * @property int $status Статус
 * @property int $created_at Дата создания
 * @property int $updated_at Дата обновления
 * @property int $date_published Дата публикации
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%news}}';
    }

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'html', 'status', 'created_at', 'updated_at'], 'required'],
            [['html'], 'string'],
            [['status', 'created_at', 'updated_at', 'date_published'], 'integer'],
            [['title'], 'string', 'max' => 255],
            [['seo'], 'string', 'max' => 32],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Идентификатор',
            'title' => 'Заголовок',
            'seo' => 'SEO URL',
            'author_id' => 'Автор',
            'html' => 'Содержимое',
            'status' => 'Статус',
            'created_at' => 'Дата создания',
            'updated_at' => 'Дата обновления',
            'date_published' => 'Дата публикации',
        ];
    }
}
