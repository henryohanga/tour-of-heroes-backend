<?php
/**
 * @copyright Copyright (c) 2018 Code Particles
 */

namespace app\models\base;

use yii\db\ActiveRecord;
use yii\web\Link; // represents a link object as defined in JSON Hypermedia API Language.
use yii\web\Linkable;
use yii\helpers\Url;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;

/**
 * BaseActiveRecordModel is the base class for active record models
 * 
 * @author Henry Ohanga <ohanga.henry@gmail.com> 
 */
class BaseActiveRecordModel extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
            BlameableBehavior::className(),
        ];
    }
}