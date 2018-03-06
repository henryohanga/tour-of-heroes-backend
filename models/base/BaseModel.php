<?php
/**
 * @copyright Copyright (c) 2018 Code Particles
 */

namespace app\models\base;

use yii\base\Model;
use yii\web\Link; // represents a link object as defined in JSON Hypermedia API Language.
use yii\web\Linkable;
use yii\helpers\Url;

/**
 * BaseModel is a base class for model classes
 * 
 * @author Henry Ohanga <ohanga.henry@gmail.com>
 * Since 1.0
 */
class BaseModel extends Model
{
    // easily implement fields(), extraFields(), getLinks()
}