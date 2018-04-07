<?php
/**
 * @copyright Copyright (c) 2018 Code Particles
 */

namespace app\models\base;

use yii\db\ActiveRecord;
use yii\web\Linkable;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;

/**
 * BaseActiveRecordModel is the base class for active record models
 * 
 * @author Henry Ohanga <ohanga.henry@gmail.com> 
 */
class BaseActiveRecordModel extends ActiveRecord implements Linkable
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

    /**
     * {@inheritdoc}
     */
    public function fields()
    {
        $fields = parent::fields();

        unset($fields['created_at'], $fields['created_by'], $fields['updated_at'], $fields['updated_by']);

        return $fields;
    }

    /**
     * {@inheritdoc}
     */
    public function getLinks() {}
}