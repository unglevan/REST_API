<?php

use yii\db\Schema;
use yii\db\Migration;

class m141225_123559_spullier extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%supplier}}', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . '(30) NOT NULL',
            'link' => Schema::TYPE_STRING . '(45) NOT NULL',
            'description' => Schema::TYPE_STRING . '(255) NOT NULL',
            'catalog' => Schema::TYPE_STRING . '(32) NOT NULL',
            'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%supplier}}');
    }
}
