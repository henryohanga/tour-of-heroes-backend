<?php
/**
 * @copyright Copyright (c) 2018 Code Particles
 */

namespace app\controllers\base;

use yii\rest\ActiveController;

/**
 * BaseActiveController is the base controller for active controller
 * 
 * @author Henry Ohanga <ohanga.henry@gmail.com>
 */
class BaseActiveController extends ActiveController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        $behaviors = parent::behaviors();

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
    
    /**
     * {@inheritdoc}
     */
    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];

}