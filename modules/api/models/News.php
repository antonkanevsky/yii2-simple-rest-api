<?php
/**
 * News.php
 */

namespace app\modules\api\models;

use app\models\News as AppNews;
use yii\web\Link;
use yii\web\Linkable;
use yii\helpers\Url;

/**
 * Модель для REST API.
 */
class News extends AppNews implements Linkable
{
    /**
     * {@inheritdoc}
     */
    public function getLinks()
    {
        return [
            Link::REL_SELF => Url::to(['news/view', 'id' => $this->id], true),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function fields()
    {
        return [
            'id',
            'title',
            'author_id',
            'html',
            'status',
            'created_at',
            'updated_at',
            'date_published'
        ];
    }
}
