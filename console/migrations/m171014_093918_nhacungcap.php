<?php

use yii\db\Migration;

class m171014_093918_nhacungcap extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%nhacungcap}}', [
            'macongty' => $this->primaryKey(),
            'tencogty' => $this->string()->notNull(),
            'tenviethoadon' => $this->string(),
            'diachi' => $this->string()->notNull(),
            'dienthoai' => $this->string(),
            'fax' => $this->string(),
            'email' => $this->string(),
            'manhanvien' => $this->integer()->notNull(),
            
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%nhacungcap}}');
    }


    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171014_093918_nhacungcap cannot be reverted.\n";

        return false;
    }
    */
}
