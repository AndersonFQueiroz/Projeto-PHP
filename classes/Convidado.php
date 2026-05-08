<?php
/**
 * Classe Convidado
 * Sistema de Divulgação de Publicações – FATEC Praia Grande
 * Disciplina: Linguagem de Programação IV – Internet
 * Professor: Jônatas Cerqueira Dias
 */

class Convidado
{
    private ?int $id;
    private string $nome;
    private string $email;

    public function __construct(array $dados = [])
    {
        $this->carregar($dados);
    }

    public function carregar(array $dados): void
    {
        $this->id = $dados['id'] ?? null;
        $this->nome = $dados['nome'] ?? '';
        $this->email = $dados['email'] ?? '';
    }

    public function validar(): bool
    {
        return !empty($this->nome) && filter_var($this->email, FILTER_VALIDATE_EMAIL);
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'nome' => $this->nome,
            'email' => $this->email
        ];
    }

    // Getters and Setters
    public function getId(): ?int { return $this->id; }
    public function getNome(): string { return $this->nome; }
    public function setNome(string $nome): void { $this->nome = $nome; }
    public function getEmail(): string { return $this->email; }
    public function setEmail(string $email): void { $this->email = $email; }
}
