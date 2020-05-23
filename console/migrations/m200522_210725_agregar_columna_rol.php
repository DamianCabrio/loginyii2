<?php

use yii\db\Migration;

/**
 * Class m200522_210725_agregar_columna_rol
 */
class m200522_210725_agregar_columna_rol extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%user}}', 'rol', $this->integer()->defaultValue(1));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%user}}', 'rol');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200522_210725_agregar_columna_rol cannot be reverted.\n";

        return false;
    }
    */
}
