<?php

use yii\db\Migration;

class m171016_160823_tbl_donvitinh extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tbl_donvitinh}}', [
            'id' => $this->primaryKey(),
            'tendvt' => $this->string()->notNull(),
                        
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tbl_donvitinh}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171016_160823_tbl_donvitinh cannot be reverted.\n";

        return false;
    }
    */
}
