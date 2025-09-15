<?php
namespace DAO;
use Generic\MySqlFactory;

class FilmeDAO
{
    private MySqlFactory $factory;

    public function __construct()
    {
        $this->factory = new MySqlFactory();
    }

    public function listarFilmes()
    {
        $sql = "SELECT * FROM filmes";
        return $this->factory->banco->executar($sql)->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function inserir($titulo, $genero, $ano)
    {
        $sql = "INSERT INTO filmes (titulo, genero, ano) VALUES (:titulo, :genero, :ano)";
        return $this->factory->banco->executar($sql, [
            ':titulo' => $titulo,
            ':genero' => $genero,
            ':ano'    => $ano
        ]);
    }

    public function atualizarFilme($id, $titulo, $genero, $ano)
    {
        $sql = "UPDATE filmes SET titulo = :titulo, genero = :genero, ano = :ano WHERE id = :id";
        return $this->factory->banco->executar($sql, [
            ':id'     => $id,
            ':titulo' => $titulo,
            ':genero' => $genero,
            ':ano'    => $ano
        ]);
    }

    public function deletarFilme($id)
    {
        $sql = "DELETE FROM filmes WHERE id = :id";
        return $this->factory->banco->executar($sql, [':id' => $id]);
    }
}