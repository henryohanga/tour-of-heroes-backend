<?php
/**
 * @copyright Copyright (c) 2018 Code Particles
 * @link https://tour-of-heroes-back-end.herokuapp.com
 */
namespace app\models;

use app\models\base\BaseActiveRecordModel;
use yii\web\Link;
use yii\helpers\Url;

/**
 * Hero is the model class for the table "hero".
 * 
 * @author Henry Ohanga <ohanga.henry@gmail.com>
 */
class Hero extends BaseActiveRecordModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hero';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLinks()
    {
        return [
            Link::REL_SELF => Url::to(['hero/view', 'id' => $this->id], true),
            'index' => Url::to(['hero/index'], true),
        ];
    }
}