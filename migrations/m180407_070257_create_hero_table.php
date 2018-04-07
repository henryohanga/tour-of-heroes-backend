<?php

use app\helpers\MigrationHelper;
use yii\helpers\ArrayHelper;

/**
 * Handles the creation of table `hero`.
 */
class m180407_070257_create_hero_table extends MigrationHelper
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('hero', ArrayHelper::merge([
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
        ], $this->behavioralColumns()));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('hero');
    }
}
