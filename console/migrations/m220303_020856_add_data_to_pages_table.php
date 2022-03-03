<?php

use yii\db\Migration;

/**
 * Class m220303_020856_add_data_to_pages_table
 */
class m220303_020856_add_data_to_pages_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public $text_body = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.';

    public function safeUp()
    {
        Yii::$app->db->createCommand()->batchInsert('pages', ['name', 'text', 'static_page'], [
            ['Фрагмент текста №1', $this->text_body, 0],
            ['Фрагмент текста №2', $this->text_body, 0],
            ['Фрагмент текста №3', $this->text_body, 0],
            ['Фрагмент текста №4', $this->text_body, 1],
            ['Фрагмент текста №5', $this->text_body, 1],
            ['Фрагмент текста №6', $this->text_body, 1],
            ['Фрагмент текста №7', $this->text_body, 2],
            ['Фрагмент текста №8', $this->text_body, 2],
            ['Фрагмент текста №9', $this->text_body, 2],
        ])->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('pages');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220303_020856_add_data_to_pages_table cannot be reverted.\n";

        return false;
    }
    */
}
