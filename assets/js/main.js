/**
 * Scripts globais — Sistema de Divulgação de Publicações
 * FATEC Praia Grande — validação de formulários e navegação responsiva
 */
(function () {
    'use strict';

    var navToggle = document.getElementById('nav-toggle');
    var nav = document.getElementById('nav-principal');

    if (navToggle && nav) {
        navToggle.addEventListener('click', function () {
            var aberto = nav.classList.toggle('is-open');
            navToggle.setAttribute('aria-expanded', aberto ? 'true' : 'false');
        });

        nav.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', function () {
                if (window.matchMedia('(max-width: 960px)').matches) {
                    nav.classList.remove('is-open');
                    navToggle.setAttribute('aria-expanded', 'false');
                }
            });
        });
    }

    /**
     * Exibe mensagem de erro em um campo.
     */
    function marcarErro(campo, mensagem) {
        var wrap = campo.closest('.field');
        if (!wrap) {
            return;
        }
        wrap.classList.add('field--error');
        var existente = wrap.querySelector('.field-error');
        if (existente) {
            existente.textContent = mensagem;
        } else {
            var span = document.createElement('span');
            span.className = 'field-error';
            span.textContent = mensagem;
            wrap.appendChild(span);
        }
    }

    function limparErros(form) {
        form.querySelectorAll('.field--error').forEach(function (el) {
            el.classList.remove('field--error');
        });
        form.querySelectorAll('.field-error').forEach(function (el) {
            el.remove();
        });
    }

    function validarEmail(valor) {
        if (!valor || typeof valor !== 'string') {
            return false;
        }
        var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(valor.trim());
    }

    document.querySelectorAll('form[data-validate]').forEach(function (form) {
        form.addEventListener('submit', function (evento) {
            limparErros(form);
            var valido = true;
            var tipo = form.getAttribute('data-validate');

            if (tipo === 'publicacao') {
                var titulo = form.querySelector('#titulo');
                var resumo = form.querySelector('#resumo');
                var idAutor = form.querySelector('#id_autor');
                var idTipo = form.querySelector('#id_tipo_publicacao');
                var idDiv = form.querySelector('#id_divulgacao');
                if (titulo && !titulo.value.trim()) {
                    marcarErro(titulo, 'Informe o título.');
                    valido = false;
                }
                if (resumo && !resumo.value.trim()) {
                    marcarErro(resumo, 'Informe o resumo.');
                    valido = false;
                }
                if (idAutor && !idAutor.value) {
                    marcarErro(idAutor, 'Selecione o autor.');
                    valido = false;
                }
                if (idTipo && !idTipo.value) {
                    marcarErro(idTipo, 'Selecione o tipo de publicação.');
                    valido = false;
                }
                if (idDiv && !idDiv.value) {
                    marcarErro(idDiv, 'Selecione a divulgação.');
                    valido = false;
                }
            } else if (tipo === 'autor') {
                var nome = form.querySelector('#nome');
                var email = form.querySelector('#email');
                var idClass = form.querySelector('#id_classificacao');
                if (nome && !nome.value.trim()) {
                    marcarErro(nome, 'Informe o nome.');
                    valido = false;
                }
                if (email && !validarEmail(email.value)) {
                    marcarErro(email, 'Informe um e-mail válido.');
                    valido = false;
                }
                if (idClass && !idClass.value) {
                    marcarErro(idClass, 'Selecione a classificação.');
                    valido = false;
                }
            } else if (tipo === 'divulgacao') {
                var evento = form.querySelector('#evento');
                var data = form.querySelector('#data');
                var idConv = form.querySelector('#id_convidado');
                if (evento && !evento.value.trim()) {
                    marcarErro(evento, 'Informe o nome do evento.');
                    valido = false;
                }
                if (data && !data.value) {
                    marcarErro(data, 'Informe a data.');
                    valido = false;
                }
                if (idConv && !idConv.value) {
                    marcarErro(idConv, 'Selecione o convidado.');
                    valido = false;
                }
            } else if (tipo === 'convidado') {
                var n = form.querySelector('#nome');
                var em = form.querySelector('#email');
                if (n && !n.value.trim()) {
                    marcarErro(n, 'Informe o nome.');
                    valido = false;
                }
                if (em && !validarEmail(em.value)) {
                    marcarErro(em, 'Informe um e-mail válido.');
                    valido = false;
                }
            } else if (tipo === 'classificacao') {
                var desc = form.querySelector('#descricao');
                if (desc && !desc.value.trim()) {
                    marcarErro(desc, 'Informe a descrição.');
                    valido = false;
                }
            } else if (tipo === 'tipo_publicacao') {
                var nomeTipo = form.querySelector('#nome');
                if (nomeTipo && !nomeTipo.value.trim()) {
                    marcarErro(nomeTipo, 'Informe o nome do tipo.');
                    valido = false;
                }
            }

            if (!valido) {
                evento.preventDefault();
                var primeiroErro = form.querySelector('.field--error input, .field--error select, .field--error textarea');
                if (primeiroErro) {
                    primeiroErro.focus();
                }
            }
        });
    });

    document.querySelectorAll('form[data-confirm-delete]').forEach(function (form) {
        form.addEventListener('submit', function (e) {
            var msg = form.getAttribute('data-confirm-message') || 'Confirmar exclusão?';
            if (!window.confirm(msg)) {
                e.preventDefault();
            }
        });
    });
})();
