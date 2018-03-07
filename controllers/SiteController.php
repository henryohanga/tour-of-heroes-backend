<?php

namespace app\controllers;

use Yii;
use app\controllers\base\BaseAuthRestController;
use yii\web\Response;
use yii\filters\VerbFilter;

class SiteController extends BaseAuthRestController
{
    /**
     *  Error handler action
     */
    public function actionError()
    {
        $exception = Yii::$app->errorHandler->exception;
        if (!is_null($exception)) {
            return ['exception' => $exception];
        }
    }

    /**
     * /site/index
     */
    public function actionIndex()
    {
        return [
            'message' => 'Hello World!',
        ];
    }
}
