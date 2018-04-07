<?php
/**
 * @copyright Copyright (c) 2018 Code Particles
 * @link https://tour-of-heroes-backend.herokuapp.com
 */
namespace app\controllers;

use app\controllers\base\BaseActiveController;
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
}
