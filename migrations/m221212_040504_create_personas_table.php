<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%personas}}`.
 */
class m221212_040504_create_personas_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%personas}}', [
            'id' => $this->primaryKey(),
            'nombre' => $this->string(),
            'profesion' => $this->string(),
            'imagen' => $this->string(2500),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%personas}}');
    }
}
