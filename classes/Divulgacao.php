<?php
/**
 * Classe Divulgacao
 * Sistema de Divulgação de Publicações – FATEC Praia Grande
 * Disciplina: Linguagem de Programação IV – Internet
 * Professor: Jônatas Cerqueira Dias
 */

class Divulgacao
{
    private ?int $id;
    private string $evento;
    private string $data;
    private ?int $id_convidado;

    public function __construct(array $dados = [])
    {
        $this->carregar($dados);
    }

    public function carregar(array $dados): void
    {
        $this->id = $dados['id'] ?? null;
        $this->evento = $dados['evento'] ?? '';
        $this->data = $dados['data'] ?? '';
        $this->id_convidado = $dados['id_convidado'] ?? null;
    }

    public function validar(): bool
    {
        return !empty($this->evento) && !empty($this->data) && $this->id_convidado !== null;
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'evento' => $this->evento,
            'data' => $this->data,
            'id_convidado' => $this->id_convidado
        ];
    }

    // Getters and Setters
    public function getId(): ?int { return $this->id; }
    public function getEvento(): string { return $this->evento; }
    public function setEvento(string $evento): void { $this->evento = $evento; }
    public function getData(): string { return $this->data; }
    public function setData(string $data): void { $this->data = $data; }
    public function getIdConvidado(): ?int { return $this->id_convidado; }
    public function setIdConvidado(?int $id_convidado): void { $this->id_convidado = $id_convidado; }
}
