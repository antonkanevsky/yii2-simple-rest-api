<?php

namespace app\modules\api\controllers;

use yii\rest\ActiveController;

/**
 * REST API контроллер для сущности 'Новость'.
 */
class NewsController extends ActiveController
{
    public $modelClass = 'app\models\News';
}
