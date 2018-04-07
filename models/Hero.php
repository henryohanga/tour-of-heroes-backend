<?php
/**
 * @copyright Copyright (c) 2018 Code Particles
 * @link https://tour-of-heroes-backend.herokuapp.com
 */
namespace app\models;

use app\models\base\BaseActiveRecordModel;

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
}