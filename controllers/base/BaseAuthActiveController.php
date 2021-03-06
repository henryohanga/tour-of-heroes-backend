<?php
/**
 * @copyright Copyright (c) 2018 Code Particles
 */

namespace app\controllers\base;

use app\controllers\base\BaseActiveController as Controller;
use app\filters\auth\ApiUserAuth;

/**
 * BaseActiveController is the base controller for active controller
 * that require authentication
 * 
 * @author Henry Ohanga <ohanga.henry@gmail.com>
 */
class BaseAuthActiveController extends Controller
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
    
    // public $modelClass = 'app\models\User';
}