<?php

use yii\db\Migration;

class m171014_093833_khachhang extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%khachhang}}', [
            'makhachhang' => $this->primaryKey(),
            'tenkhachhang' => $this->string()->notNull(),
            'dienthoai' => $this->string(100),
            'diachi' => $this->string(100),
            'email' => $this->string(100),
            'manhanvien' => $this->integer()->notNull(),
            
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%khachhang}}');
    }


    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171014_093833_khachhang cannot be reverted.\n";

        return false;
    }
    */
}
