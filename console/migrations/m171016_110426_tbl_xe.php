<?php

use yii\db\Migration;

class m171016_110426_tbl_xe extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tbl_xe}}', [
            'maxe' => $this->primaryKey(),
            'bks' => $this->string()->notNull(),
            'tenxe' => $this->string()->notNull(),
            'makhachhang' => $this->integer()->notNull(),
            'manhanvien' => $this->integer()->notNull(),
            
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tbl_xe}}');
    }
    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171016_110426_tbl_xe cannot be reverted.\n";

        return false;
    }
    */
}
