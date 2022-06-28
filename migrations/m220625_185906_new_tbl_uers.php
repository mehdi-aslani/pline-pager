<?php

use yii\db\Migration;

/**
 * Class m220625_185906_new_tbl_uers
 */
class m220625_185906_new_tbl_uers extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tblUsers', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'password' => $this->string()->notNull(),
            'authKey' =>  $this->string()->notNull()->defaultValue(''),
            'accessToken' => $this->string()->notNull()->defaultValue(''),
        ]);

        $this->insert('tblUsers', [
            'username' => 'admin',
            'password' => md5('admin')
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220625_185906_new_tbl_uers cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220625_185906_new_tbl_uers cannot be reverted.\n";

        return false;
    }
    */
}