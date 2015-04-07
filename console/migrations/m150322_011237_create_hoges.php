<?php

use yii\db\Schema;
use yii\db\Migration;

class m150322_011237_create_hoges extends Migration
{
    public function up()
    {
        $this->createTable('hoge', [
                    'id' => Schema::TYPE_PK,
                    'title' => Schema::TYPE_STRING . ' NOT NULL',
                    'content' => Schema::TYPE_TEXT,
                ]);
    }

    public function down()
    {
        $this->dropTable('hoge');
    }
    
    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }
    
    public function safeDown()
    {
    }
    */
}
