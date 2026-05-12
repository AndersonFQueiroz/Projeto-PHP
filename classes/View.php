<?php
/**
 * Classe View
 * Sistema de Divulgação de Publicações – FATEC Praia Grande
 * Disciplina: Linguagem de Programação IV – Internet
 * Professor: Jônatas Cerqueira Dias
 */

class View
{
    public function render(string $template, array $dados = []): void
    {
        $project_root = dirname(__DIR__);
        $caminho = $project_root . '/pages/' . $template . '.php';
        if (file_exists($caminho)) {
            extract($dados);
            include $project_root . '/header.php';
            include $caminho;
            include $project_root . '/footer.php';
        } else {
            $this->exibir_erro("Template '$template' não encontrado.");
        }
    }

    public function exibir_erro(string $mensagem): void
    {
        echo "<div style='color: red; padding: 10px; border: 1px solid red; margin: 10px;'>";
        echo '<strong>Erro:</strong> ' . htmlspecialchars($mensagem);
        echo '</div>';
    }
}
