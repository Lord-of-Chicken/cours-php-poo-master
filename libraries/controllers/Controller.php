<?php

namespace Controllers;

abstract class Controller
{
    protected $model;
    protected $modelName = "\models\Article";
    public function __construct()
    {
        $this->model = new $this->modelName();
    }
}
