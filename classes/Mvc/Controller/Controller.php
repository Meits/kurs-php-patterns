<?php
/**
 * Created by PhpStorm.
 * User: Meits
 * Date: 01-Apr-19
 * Time: 15:22
 */

namespace Mvc\Controller;


class Controller
{
    private $model;

    public function __construct($model){
        $this->model = $model;
    }

    public function action() {
        $this->model->string = "Updated Data, thanks to MVC and PHP!";
    }
}