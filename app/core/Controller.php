<?php
class Controller
{
    public function view($view, $data = [])
    {
        //mencari file di dalam nya view
        require_once '../app/views/' . $view . '.php';
    }

    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }
}
