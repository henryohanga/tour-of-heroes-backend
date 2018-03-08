<?php
/**
 * @copyright Copyright (c) 2018 Code Particles
 */

namespace app\helpers;

use yii\db\Migration;

/**
 * MigrationHelper class provides additional helper functions for database migrations
 * 
 * @author Henry Ohanga <ohanga.henry@gmail.com>
 * @since 1.0
 */
class MigrationHelper extends Migration
{
    /**
     * Addtional columns for model behaviors
     * 
     * ```php
     * created_at
     * updated_at
     * 
     * created_by
     * updated_by
     * ```
     */
    public function behavioralColumns()
    {
        return [
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),

            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
        ];
    }
}