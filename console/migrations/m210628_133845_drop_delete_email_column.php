<?php

use yii\db\Migration;

/**
 * Class m210628_133845_drop_delete_email_column
 */
class m210628_133845_drop_delete_email_column extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropIndex('email', 'user');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->createIndex('email', 'user', 'email', $unique = true );
    }
}
