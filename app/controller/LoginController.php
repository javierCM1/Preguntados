<?php

class LonginController
{

    private $model;
    private $presenter;

    public function __construct($model, $presenter)
    {
        $this->model = $model;
        $this->presenter = $presenter;
    }

    public function showLogin()
    {
        $this->presenter->show('login');
    }
}