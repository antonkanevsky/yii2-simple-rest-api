<?php

namespace app\modules\api\controllers;

use Yii;
use yii\rest\ActiveController;
use yii\filters\auth\HttpBearerAuth;
use yii\web\ForbiddenHttpException;
use app\modules\api\models\News;

/**
 * REST API контроллер для сущности 'Новость'.
 */
class NewsController extends ActiveController
{
    public $modelClass = 'app\modules\api\models\News';

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['authenticator'] = [
            'class' => HttpBearerAuth::className(),
        ];
        return $behaviors;
    }

    /**
     * Проверка доступа на api-метод.
     *
     * @param string    $action Идентификатор действия.
     * @param News|null $model  Модель.
     * @param array     $params Доп. параметры.
     *
     * @throws ForbiddenHttpException
     */
    public function checkAccess($action, $model = null, $params = [])
    {
        if ($action === 'update' || $action === 'delete') {
            if ($model->author_id !== Yii::$app->user->id)
                throw new ForbiddenHttpException(sprintf('You can only %s news that you\'ve created.', $action));
        }
    }
}
