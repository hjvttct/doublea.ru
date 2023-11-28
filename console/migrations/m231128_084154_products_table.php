<?php

use yii\db\Migration;

/**
 * Class m231128_084154_products_table
 */
class m231128_084154_products_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('products', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'categori-id' => $this->integer()->notNull(),
            'description' => $this->string()->notNull(),
            'quantity' => $this->integer()->notNull(),
            'cost' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('products');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231128_084154_products_table cannot be reverted.\n";

        return false;
    }
    */
}
