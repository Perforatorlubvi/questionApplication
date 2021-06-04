<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateQuestionTable extends Migration
{
    private $table = 'question';

	public function up()
	{
        $this->forge->addField([
            'id' => [
                'type' => 'bigint',
                'unsigned' => true,
                'auto_increment' => true,
                'comment' => "Первичный ключ"
            ],
            'author' => [
                'type' => 'varchar',
                'constraint' => 32,
                'comment' => "Автор вопроса"
            ],
            'email' => [
                'type' => 'varchar',
                'constraint' => 128,
                'comment' => "Почта автора"
            ],
            'title'=>[
                'type' => 'varchar',
                'constraint' => 255,
                'comment' => "Тема вопроса"
            ],
            'content' => [
                'type' => 'text',
                'comment' => "Содержимое вопроса"
            ],
            'date_publish' => [
                'type' => 'date',
                'comment' => "Дата добавления отзыва"
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable($this->table, true);
	}

	public function down()
	{
        $this->forge->dropTable($this->table, true);
	}
}
