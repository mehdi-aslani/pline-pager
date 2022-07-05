<?php

use yii\db\Migration;

/**
 * Class m220705_033458_new_tbl_pagers
 */
class m220705_033458_new_tbl_pagers extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tblPagers', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->unique()->notNull(),
            'password' => $this->string()->defaultValue('')->notNull(),
            'type_pager' => $this->integer()->notNull(),
            'zone_id' => $this->integer()->notNull(),
            'enable' => $this->boolean()->defaultValue(true)->notNull(),
            'desc' => $this->string(1024)->notNull()->defaultValue(''),
        ]);
        $this->addForeignKey('tblPagers_id_zone', 'tblPagers', 'zone_id', 'tblZones', 'id', 'NO ACTION', 'CASCADE');
        $this->createIndex('tblPagers_id', 'tblPagers', 'id', true);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('tblPagers');
        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220705_033458_new_tbl_pagers cannot be reverted.\n";

        return false;
    }
    */
}
