<?php

namespace app\controllers;

use Yii;
use app\controllers\base\BaseRestController;
use yii\web\Response;
use yii\filters\VerbFilter;

class SiteController extends BaseRestController
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

    
}
