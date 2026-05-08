<?php
/**
 * Classe Publicacao
 * Sistema de Divulgação de Publicações – FATEC Praia Grande
 * Disciplina: Linguagem de Programação IV – Internet
 * Professor: Jônatas Cerqueira Dias
 */

class Publicacao
{
    private ?int $id;
    private string $titulo;
    private string $resumo;
    private ?int $id_autor;
    private ?int $id_tipo_publicacao;
    private ?int $id_divulgacao;

    public function __construct(array $dados = [])
    {
        $this->carregar($dados);
    }

    public function carregar(array $dados): void
    {
        $this->id = $dados['id'] ?? null;
        $this->titulo = $dados['titulo'] ?? '';
        $this->resumo = $dados['resumo'] ?? '';
        $this->id_autor = $dados['id_autor'] ?? null;
        $this->id_tipo_publicacao = $dados['id_tipo_publicacao'] ?? null;
        $this->id_divulgacao = $dados['id_divulgacao'] ?? null;
    }

    public function validar(): bool
    {
        return !empty($this->titulo) && 
               !empty($this->resumo) && 
               $this->id_autor !== null && 
               $this->id_tipo_publicacao !== null && 
               $this->id_divulgacao !== null;
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'titulo' => $this->titulo,
            'resumo' => $this->resumo,
            'id_autor' => $this->id_autor,
            'id_tipo_publicacao' => $this->id_tipo_publicacao,
            'id_divulgacao' => $this->id_divulgacao
        ];
    }

    // Getters and Setters
    public function getId(): ?int { return $this->id; }
    public function getTitulo(): string { return $this->titulo; }
    public function setTitulo(string $titulo): void { $this->titulo = $titulo; }
    public function getResumo(): string { return $this->resumo; }
    public function setResumo(string $resumo): void { $this->resumo = $resumo; }
    public function getIdAutor(): ?int { return $this->id_autor; }
    public function setIdAutor(?int $id_autor): void { $this->id_autor = $id_autor; }
    public function getIdTipoPublicacao(): ?int { return $this->id_tipo_publicacao; }
    public function setIdTipoPublicacao(?int $id_tipo_publicacao): void { $this->id_tipo_publicacao = $id_tipo_publicacao; }
    public function getIdDivulgacao(): ?int { return $this->id_divulgacao; }
    public function setIdDivulgacao(?int $id_divulgacao): void { $this->id_divulgacao = $id_divulgacao; }
}
