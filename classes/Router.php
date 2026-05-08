<?php
/**
 * Classe Router
 * Sistema de Divulgação de Publicações – FATEC Praia Grande
 * Disciplina: Linguagem de Programação IV – Internet
 * Professor: Jônatas Cerqueira Dias
 */

class Router
{
    private array $rotas = [];

    public function registrar_rota(string $caminho, callable $acao): void
    {
        $this->rotas[$caminho] = $acao;
    }

    public function disparar(): void
    {
        $caminho = $_GET['url'] ?? '/';
        $caminho = '/' . trim($caminho, '/');

        if (isset($this->rotas[$caminho])) {
            call_user_func($this->rotas[$caminho], $this->obter_parametros());
        } else {
            http_response_code(404);
            echo "404 - Página não encontrada";
        }
    }

    public function obter_parametros(): array
    {
        return array_merge($_GET, $_POST);
    }
}
