<?php

/**
 * @copyright Copyright (c) 2018 Code Particles
 */

 namespace app\filters\auth;

 use Yii;
 use yii\filters\auth\AuthMethod;

 /**
  * ApiUserAuth is an action filter that supports authentication based on access token passed in through header
  *
  * @author Henry Ohanga <ohanga.henry@gmail.com>
  * @since 1.0
  */
class ApiUserAuth extends AuthMethod
{
    /**
     * @var string the parameter name for passing the access token
     */
    public $tokenParam = 'Authorization';

    /**
     * @var string the parameter name for passing the app key
     */
    public $appKey = 'AppKey';

    /**
     * @inheritdoc
     */
    public function authenticate($user, $request, $response)
    {
        $accessToken = $request->headers->get($this->tokenParam);
        $appKey = $request->headers->get($this->appKey);

        if (is_null($accessToken) || is_null($appKey)) {
            $this->handleFailure($response);
        }

        // check that app key is valid - edit appropriately
        if (in_array($appKey, Yii::$app->params['appKeys'])) {
            if (is_string($accessToken)) {
                $identity = $user->loginByAccessToken($accessToken, get_class($this));
                if (!is_null($identity)) {
                    return $identity;
                } else {
                    $this->handleFailure($response);
                }
            }else {
                $this->handleFailure($response);
            }
    
        } else {
            $this->handleFailure($response);
        }
        
        return null;
    }
}