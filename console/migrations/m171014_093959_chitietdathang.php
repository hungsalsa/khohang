<?php

use yii\db\Migration;

class m171014_093959_chitietdathang extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%chitietdathang}}', [
            'sohoadon' => $this->primaryKey(),
            'mahang' => $this->integer()->notNull(),
            'giaban' => $this->integer(),
            'soluong' => $this->integer(),
            'mucgiamgia' => $this->float(),
            
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%chitietdathang}}');
    }


    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171014_093959_chitietdathang cannot be reverted.\n";

        return false;
    }
    */
}
