<?php

namespace Atitude\Model\Database;

use Atitude\Model\Database\Driver\Mysql;
use PDO;

class Database extends Mysql
{
    public function __construct()
    {
        $this->config()->conectar();
    }

    public function findAll($table = '')
    {
        $listar = $this->conn->prepare("SELECT id,nome FROM $table");
        $listar->execute();
        $resultado = $listar->fetchAll( PDO::FETCH_ASSOC );
        var_dump($resultado);
    }

    public function inserir($table = '', $nome = '')
    {
        //@TODO: adicionarPessoa deveria ser um insert
        $inserir = $this->conn->prepare("INSERT INTO $table(nome) VALUES (:name)");
        $inserir->bindParam(':name', $nome, PDO::PARAM_STR);
        $inserir->execute();
        $inserir->debugDumpParams();
    }

    public function editar($table = '', $id = '', $nome)
    {
        $editar = $this->conn->prepare("UPDATE $table SET nome = (:nome) WHERE id = (:id)");
        $editar->bindParam(':nome', $nome, PDO::PARAM_STR);
        $editar->bindParam(':id', $id, PDO::PARAM_STR);
        $editar->execute();
        $editar->debugDumpParams();
    }

    public function remover($table = '', $id = '')
    {
        $remover = $this->conn->prepare("DELETE FROM $table WHERE  id = (:id)");
        $remover->bindParam(':id', $id, PDO::PARAM_STR);
        $remover->execute();
        $remover->debugDumpParams();
    }

}