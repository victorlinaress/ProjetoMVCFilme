<?php
namespace Model;

class Avaliacao {
    private int $id;
    private int $id_usuario;
    private int $id_filme;
    private float $nota;
    private ?string $comentario;

    public function __construct(int $id_usuario, int $id_filme, float $nota, ?string $comentario = null) {
        $this->id_usuario = $id_usuario;
        $this->id_filme = $id_filme;
        $this->nota = $nota;
        $this->comentario = $comentario;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getIdUsuario(): int {
        return $this->id_usuario;
    }

    public function getIdFilme(): int {
        return $this->id_filme;
    }

    public function getNota(): float {
        return $this->nota;
    }

    public function getComentario(): ?string {
        return $this->comentario;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setNota(float $nota): void {
        $this->nota = $nota;
    }

    public function setComentario(?string $comentario): void {
        $this->comentario = $comentario;
    }
}
