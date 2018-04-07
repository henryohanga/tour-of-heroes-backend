<?php
/**
 * @copyright Copyright (c) 2018 Code Particles
 * @link https://tour-of-heroes-back-end.herokuapp.com
 */
namespace app\controllers;

use app\controllers\base\BaseActiveController;
use app\models\Hero;

/**
 * HeroController class handles API requests for the base route "/heroes"
 * 
 * @author Henry Ohanga <ohanga.henry@gmail.com>
 */
class HeroController extends BaseActiveController
{
    /**
     * {@inheritdoc}
     */
    public $modelClass = 'app\models\Hero';

    /**
     * Action "search"
     * 
     * @return mixed|\yii\web\Response API response
     */
    public function actionSearch($name = '')
    {
        return Hero::find()->where(['like', 'name', $name]);
    }
}
