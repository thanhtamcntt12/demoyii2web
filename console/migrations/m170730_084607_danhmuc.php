<?php

use yii\db\Migration;

class m170730_084607_danhmuc extends Migration
{
    public function Up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%danhmuc}}', [
            'idCate' => $this->primaryKey(),
            'Icon' => $this->string(),
            'CateName' => $this->string(150)->notNull()->unique(),
            'Parentid' => $this->smallInteger()->notNull()->defaultValue(0),
            'Keywords' => $this->string(),
            'Description' => $this->string(),
            'Order' => $this->string()->notNull(),
            'Groupsid' => $this->integer(),
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    public function Down()
    {
        // echo "m170729_021053_tbl_group cannot be reverted.\n";
        $this->dropTable('{{%danhmuc}}');
        // return false;
    }
}
