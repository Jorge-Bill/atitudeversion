<?php

namespace Atitude\Model\Database\Driver;

require_once ('../../../../../.env');

//require('.env');

//console.log(process.env.DB_HOST);

use PDO;

class Mysql
{
    private $driver;
    private $port;
    private $user;
    private $pass;
    private $host;
    private $database;
    public $conn;

    public function config($name = 'mysql')
    {
        //@TODO: Deveria vir do .env
        $this->driver   = $name;
        $this->port     = 3306;
        $this->user     = 'root';
        $this->pass     = 'atitudephp';
        $this->host     = 'melhoridade-mysql';
        $this->database = 'atitudephp';

        return $this;
    }

    public function conectar()
    {
        $this->conn = new PDO($this->driver.':host='.$this->host.';dbname='.$this->database, $this->user, $this->pass);
    }
}