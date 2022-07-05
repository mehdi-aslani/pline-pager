<?php

use yii\db\Migration;

/**
 * Class m220705_033622_new_tbl_azans
 */
class m220705_033622_new_tbl_azans extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tblAzans', [
            'id' => $this->primaryKey(),
            'date' => $this->string(10)->unique()->notNull(),
            'time1' => $this->string(8)->notNull(),
            'zones1' => $this->string(1024)->notNull(),
            'sounds1' => $this->string(1024)->notNull(),
            'volume1' => $this->integer()->defaultValue(0)->notNull(),
            'enable1' => $this->boolean()->notNull()->defaultValue(true),

            'time2' => $this->string(8)->notNull(),
            'zones2' => $this->string(1024)->notNull(),
            'sounds2' => $this->string(1024)->notNull(),
            'volume2' => $this->integer()->defaultValue(0)->notNull(),
            'enable2' => $this->boolean()->notNull()->defaultValue(true),

            'time3' => $this->string(8)->notNull(),
            'zones3' => $this->string(1024)->notNull(),
            'sounds3' => $this->string(1024)->notNull(),
            'volume3' => $this->integer()->defaultValue(0)->notNull(),
            'enable3' => $this->boolean()->notNull()->defaultValue(true),

            'desc' => $this->string(1024)->notNull()->defaultValue(''),
        ]);
        $this->createIndex('tblAzans_id', 'tblAzans', 'date', true);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('tblAzans');
        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220705_033622_new_tbl_azans cannot be reverted.\n";

        return false;
    }
    */
}
