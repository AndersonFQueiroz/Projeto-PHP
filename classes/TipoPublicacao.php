<?php
/**
 * Classe TipoPublicacao
 * Sistema de Divulgação de Publicações – FATEC Praia Grande
 * Disciplina: Linguagem de Programação IV – Internet
 * Professor: Jônatas Cerqueira Dias
 */

class TipoPublicacao
{
    private ?int $id;
    private string $nome;

    public function __construct(array $dados = [])
    {
        $this->carregar($dados);
    }

    public function carregar(array $dados): void
    {
        $this->id = $dados['id'] ?? null;
        $this->nome = $dados['nome'] ?? '';
    }

    public function validar(): bool
    {
        return !empty($this->nome);
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'nome' => $this->nome
        ];
    }

    // Getters and Setters
    public function getId(): ?int { return $this->id; }
    public function getNome(): string { return $this->nome; }
    public function setNome(string $nome): void { $this->nome = $nome; }
}
