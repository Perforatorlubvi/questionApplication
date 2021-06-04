<?php


namespace App\Models;

use CodeIgniter\Model;

class Question extends Model
{
    //Название таблицы
    protected $table = 'question';
    //отключение временной метки
    protected $useTimestamps = false;
    //первичный ключ
    protected $primaryKey = 'id';
    //разрешенные поля
    protected $allowedFields = [
        'author', 'email', 'content', 'title'
    ];
    protected $beforeInsert = ['callBeforeInsert'];

    //функция после вставки
    protected function callBeforeInsert(array $data = []): array
    {
        //запись даты пубцикации
        $data['data']['date_publish'] = date('Ymd');
        //вернуть данные
        return $data;
    }

}