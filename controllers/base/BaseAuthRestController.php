<?php
/**
 * @copyright Copyright (c) 2018 Code Particles
 */

namespace app\controllers\base;

use app\controllers\base\BaseRestController as Controller;
use app\filters\auth\ApiUserAuth;

/**
 * BaseAuthRestController is a base controller class for rest controllers 
 * that require authentication
 * 
 * @author Henry Ohanga <ohanga.henry@gmail.com>
 * @since 1.0
 */
class BaseAuthRestController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        $behaviors = parent::behaviors();

        $behaviors['authenticator'] = [
            'class' => ApiUserAuth::className(),
        ];

        // remove authentication filter
        $auth = $behaviors['authenticator'];
        unset($behaviors['authenticator']);
        
        // add CORS filter
        $behaviors['corsFilter'] = [
            'class' => \yii\filters\Cors::className(),
        ];
        
        // re-add authentication filter
        $behaviors['authenticator'] = $auth;
        // avoid authentication on CORS-pre-flight requests (HTTP OPTIONS method)
        $behaviors['authenticator']['except'] = ['options'];

        return $behaviors;
    }
}