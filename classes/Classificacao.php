<?php
/**
 * Classe Classificacao
 * Sistema de Divulgação de Publicações – FATEC Praia Grande
 * Disciplina: Linguagem de Programação IV – Internet
 * Professor: Jônatas Cerqueira Dias
 */

class Classificacao
{
    private ?int $id;
    private string $descricao;

    public function __construct(array $dados = [])
    {
        $this->carregar($dados);
    }

    public function carregar(array $dados): void
    {
        $this->id = $dados['id'] ?? null;
        $this->descricao = $dados['descricao'] ?? '';
    }

    public function validar(): bool
    {
        return !empty($this->descricao);
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'descricao' => $this->descricao
        ];
    }

    // Getters and Setters
    public function getId(): ?int { return $this->id; }
    public function getDescricao(): string { return $this->descricao; }
    public function setDescricao(string $descricao): void { $this->descricao = $descricao; }
}
