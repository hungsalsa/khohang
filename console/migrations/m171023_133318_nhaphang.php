<?php

use yii\db\Migration;

class m171023_133318_nhaphang extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%nhaphang}}', [
            'mahdn' => $this->primaryKey(),
            'macongty' => $this->integer()->notNull(), //ma nha san xuat nhap
            'manhanvien' => $this->integer()->notNull(),
            'mahang' => $this->string()->notNull(),
            'soluong' => $this->integer(),
            'gianhap' => $this->integer(),
            'donvitinh' => $this->string(50)->notNull(),
            
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%nhaphang}}');
    }


    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171023_133318_nhaphang cannot be reverted.\n";

        return false;
    }
    */
}
