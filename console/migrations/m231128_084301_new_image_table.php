<?php

use yii\db\Migration;

/**
 * Class m231128_084301_new_image_table
 */
class m231128_084301_new_image_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('images', [
            'id' => $this->primaryKey(),
            'product_id' => $this->integer()->notNull(),
            'path' => $this->string()->notNull(),
            'sort' => $this->integer()
        ]);
        $this->createTable('compound', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'description' => $this->string()->notNull(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('images');
        $this->dropTable('compound');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231128_084301_new_image_table cannot be reverted.\n";

        return false;
    }
    */
}
