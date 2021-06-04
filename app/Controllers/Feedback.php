<?php


namespace App\Controllers;


use App\Models\Question;

class Feedback extends BaseController
{
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
        return view('Feedback/index.php');
    }
    public function add()
    {

        //правила валидации
        $rules = [
            'author' => 'required|max_length[32]|min_length[2]',
            'title' => 'required|max_length[255]|min_length[10]',
            'email' => 'required|valid_email|max_length[128]',
            'content' => 'required',
        ];
        //если есть ошибки то перенаправляем на главную и показываем ошибки
        if (!$this->validate($rules)) {
            return redirect()->to(base_url('/feedback'))
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }
        //добавление данных в бд;
        $this->model->insert([
            'author' => $this->request->getVar('author'),
            'title' => $this->request->getVar('title'),
            'email' => $this->request->getVar('email'),
            'content' => $this->request->getVar('content')
        ]);
        //редирект на главную
        return $this->response->redirect(base_url('/'));

    }
}