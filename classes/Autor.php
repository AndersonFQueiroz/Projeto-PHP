<?php
/**
 * Classe Autor
 * Sistema de Divulgação de Publicações – FATEC Praia Grande
 * Disciplina: Linguagem de Programação IV – Internet
 * Professor: Jônatas Cerqueira Dias
 */

class Autor
{
    private ?int $id;
    private string $nome;
    private string $email;
    private ?int $id_classificacao;

    public function __construct(array $dados = [])
    {
        $this->carregar($dados);
    }

    public function carregar(array $dados): void
    {
        $this->id = $dados['id'] ?? null;
        $this->nome = $dados['nome'] ?? '';
        $this->email = $dados['email'] ?? '';
        $this->id_classificacao = $dados['id_classificacao'] ?? null;
    }

    public function validar(): bool
    {
        return !empty($this->nome) && 
               filter_var($this->email, FILTER_VALIDATE_EMAIL) && 
               $this->id_classificacao !== null;
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'nome' => $this->nome,
            'email' => $this->email,
            'id_classificacao' => $this->id_classificacao
        ];
    }

    // Getters and Setters
    public function getId(): ?int { return $this->id; }
    public function getNome(): string { return $this->nome; }
    public function setNome(string $nome): void { $this->nome = $nome; }
    public function getEmail(): string { return $this->email; }
    public function setEmail(string $email): void { $this->email = $email; }
    public function getIdClassificacao(): ?int { return $this->id_classificacao; }
    public function setIdClassificacao(?int $id_classificacao): void { $this->id_classificacao = $id_classificacao; }
}
