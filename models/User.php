<?php

namespace app\models;

use Yii;
use app\models\base\BaseUserModel;
use yii\filters\RateLimitInterface;

class User extends BaseUserModel implements RateLimitInterface
{
    /**
     * @inheritdoc
     */
    public function getRateLimit($request, $action)
    {
        return [1, 100]; // $rateLimit requests per second
    }

    /**
     * {@inheritdoc}
     */
    public function loadAllowance($request, $action)
    {
        return [$this->rate_allowance, $this->rate_allowance_updated_at];
    }

    /**
     * {@inheritdoc}
     */
    public function saveAllowance($request, $action, $allowance, $timestamp)
    {
        $this->rate_allowance = $allowance;
        $this->rate_allowance_updated_at = $timestamp;
        $this->save();
    }
}
