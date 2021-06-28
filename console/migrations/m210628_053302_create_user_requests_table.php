<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user_requests}}`.
 */
class m210628_053302_create_user_requests_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user_requests}}', [
            'id' => $this->primaryKey(),
            'fullName' => $this->char(200),
            'town' => $this->char(30),
            'address' => $this->char(255),
            'text' => $this->char(200),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%user_requests}}');
    }
}
