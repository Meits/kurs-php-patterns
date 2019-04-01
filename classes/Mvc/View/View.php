<?php
/**
 * Created by PhpStorm.
 * User: Meits
 * Date: 01-Apr-19
 * Time: 15:23
 */

namespace Mvc\View;


class View
{
    private $model;
    private $controller;

    public function __construct($controller,$model) {
        $this->controller = $controller;
        $this->model = $model;
    }

    public function output() {
        return '<p><a href="mvc.php?action=action">' . $this->model->string . "</a></p>";
    }
}