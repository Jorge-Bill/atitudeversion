<?php

namespace Atitude\Model\Controller;

use Atitude\Model\Database\Database;

//include '../Model/Database';

class Welcome
{
    private $model;

    public function __construct()
    {
        $this->model = new Database;
    }
}