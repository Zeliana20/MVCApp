<?php

class controller{
    //handle model :
    //1. cek apakah file model ada?
    //2. jika ada maka require
    //3. instansiasi pada kelas model

    public function loadmodel($model){
        if (file_exists('apps/model/'.$model.'.php')) {
            require_once('apps/model/'.$model.'.php');
            $model = new $model;
        }
        return $model;
    }

    public function loadview($view, $data=null){
        if (file_exists('apps/views/'.$view.'.php')) {
            require_once('apps/views/'.$view.'.php');
        }
    }
}