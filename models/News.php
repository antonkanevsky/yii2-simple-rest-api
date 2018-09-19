<?php

namespace app\models;

use yii\behaviors\BlameableBehavior;
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
    const STATUS_ARCHIVED = 0;
    const STATUS_ADDED = 1;
    const STATUS_PUBLISHED = 2;

    /**
     * Возможные статусы.
     * @var array
     */
    const STATUSES = [
        self::STATUS_ARCHIVED,
        self::STATUS_ADDED,
        self::STATUS_PUBLISHED
    ];

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
            [
                'class' => BlameableBehavior::className(),
                'createdByAttribute' => 'author_id',
                'updatedByAttribute' => false,
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'html', 'status'], 'required'],
            [['html'], 'string'],
            [['status', 'created_at', 'updated_at', 'date_published'], 'integer'],
            ['status', 'in', 'range' => self::STATUSES],
            [['title'], 'string', 'max' => 255],
            [['seo'], 'string', 'max' => 64],
        ];
    }
}
