<?php

use yii\db\Migration;

class m171014_093946_dondathang extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%dondathang}}', [
            'sohoadon' => $this->primaryKey(),
            'makhachhang' => $this->integer()->notNull(),
            'maxe' => $this->integer()->notNull(),
            'manhanvien' => $this->integer()->notNull(),
            'ngaydathang' => $this->date(),
            'ngaygiaohang' => $this->date(),
            'noigiaohang' => $this->string(),
            
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%dondathang}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171014_093946_dondathang cannot be reverted.\n";

        return false;
    }
    */
}
