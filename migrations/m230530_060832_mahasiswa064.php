<?php

use yii\db\Migration;

/**
 * Class m230530_060832_mahasiswa064
 */
class m230530_060832_mahasiswa064 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{mahasiswa064}}', [
            'id064' => $this->primaryKey(),
            'nim064' => $this->string(25)->notNull()->unique(),
            'nama064' => $this->string(225)->notNull(),
            'kelas064' => $this->string(10)->notNull(),
            'status064' => $this->string(50)->notNull(),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230530_060832_mahasiswa064 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230530_060832_mahasiswa064 cannot be reverted.\n";

        return false;
    }
    */
}
