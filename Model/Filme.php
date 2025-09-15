<?php

class Filme {
    private int $id;
    private string $titulo;
    private string $descricao;
    private int $categoria_id;

    public function __construct($id, $titulo, $descricao, $categoria_id) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->descricao = $descricao;
        $this->categoria_id = $categoria_id;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getTitulo(): string {
        return $this->titulo;
    }

    public function getDescricao(): string {
        return $this->descricao;
    }

    public function getCategoriaId(): int {
        return $this->categoria_id;
    }

}