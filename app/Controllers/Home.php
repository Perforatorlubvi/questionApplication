<?php

namespace App\Controllers;



use App\Models\Question;

class Home extends BaseController
{
    // переменная модели
    public $model;

    /**
     * Create model object on boot controller
     */
    public function boot()
    {
        //обьект модели
        $this->model = new Question();
    }

    public function index()
    {
        //получить все опубликованые записи
        $data['items'] = $this->model->orderBy('id', 'DESC')->findAll();
        //Главная страница
        return view('Templates/home', $data);
    }
}
