<?php

namespace Model;

class Posts
{
    protected $table = 'posts';
    private $pdf;

    public function __construct()
    {
        $this->pdf = new \Mpdf\Mpdf();
    }

    public function getAllPosts($app)
    {
        return  $app['db']->fetchAll("select * from " . $this->table);
    }

    public function getNomePDF(string $nome)
    {
        $this->pdf->WriteHTML("<h1>Olá senhor(a)</h1> <p>{$nome}</p>");
        $this->pdf->Output();
    }
    
    public function setPosts($app, $data = [])
    {
        return $app['db']->insert($this->table, $data);
    }
}