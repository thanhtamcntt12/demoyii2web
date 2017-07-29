<?php

use yii\db\Migration;

class m170729_022459_group extends Migration
{
    public function Up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%group}}', [
            'idGroups' => $this->primaryKey(),
            'groupsName' => $this->string(255)->notNull()->unique(),
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    public function Down()
    {
        // echo "m170729_021053_tbl_group cannot be reverted.\n";
        $this->dropTable('{{%group}}');
        // return false;
    }
}
