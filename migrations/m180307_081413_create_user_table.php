<?php

use app\helpers\MigrationHelper;
use yii\helpers\ArrayHelper;

/**
 * Handles the creation of table `user`.
 */
class m180307_081413_create_user_table extends MigrationHelper
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user', ArrayHelper::merge([
            'id' => $this->primaryKey(),
            'username' => $this->string(45),
            'password' => $this->string(),
            'auth_key' => $this->string(),
            'access_token' => $this->string(),
            'rate_allowance' => $this->integer(),
            'rate_allowance_updated_at' => $this->integer(),
        ], $this->behavioralColumns()));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user');
    }
}
