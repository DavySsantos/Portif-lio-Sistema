let status = window.location.href;

const mensagemElement = document.querySelector('[data-mensagem]');

if (status.search('error') > 0) {
    document.querySelector('[data-mensagem]').classList.add('alert-danger');
    document.querySelector('[data-mensagem]').classList.remove('visible-none');
    mensagemElement.innerText = 'Ocorreu um erro';
    setTimeout(() => {
        document.querySelector('[data-mensagem]').classList.add('visible-none');
        document.querySelector('[data-mensagem]').classList.remove('alert-danger');
    }, 5000);
} else if (status.search('success') > 0) {
    document.querySelector('[data-mensagem]').classList.add('alert-success');
    document.querySelector('[data-mensagem]').classList.remove('visible-none');
    mensagemElement.innerText = 'Solicitação enviada com sucesso!';
    setTimeout(() => {
        document.querySelector('[data-mensagem]').classList.add('visible-none');
        document.querySelector('[data-mensagem]').classList.remove('alert-success');
    }, 5000);
} else if (status.search('warning') > 0) {
    document.querySelector('[data-mensagem]').classList.add('alert-warning');
    document.querySelector('[data-mensagem]').classList.remove('visible-none');
    mensagemElement.innerText = 'Um problema foi detectado!';
    setTimeout(() => {
        document.querySelector('[data-mensagem]').classList.add('visible-none');
        document.querySelector('[data-mensagem]').classList.remove('alert-warning');
    }, 5000);
}

function formatarTelefone(input) {
    let valor = input.value.replace(/\D/g, ''); // Remove caracteres não numéricos

    // Adiciona a formatação para (XX) XXXXX-XXXX
    if (valor.length > 10) {
        valor = valor.slice(0, 11); // Limita a 11 dígitos
    }
    if (valor.length > 6) {
        valor = valor.replace(/(\d{2})(\d{5})(\d{0,4})/, '($1) $2-$3');
    } else if (valor.length > 2) {
        valor = valor.replace(/(\d{2})(\d{0,5})/, '($1) $2');
    }

    input.value = valor;
}

function formatDocument(input) {
    let value = input.value.replace(/\D/g, ''); // Remove caracteres não numéricos

    // Limita a 14 caracteres para CNPJ
    if (value.length > 14) {
        value = value.slice(0, 14);
    }

    if (value.length <= 11) {
        // Formatar como CPF
        input.value = value.replace(/(\d{3})(\d)/, '$1.$2')
            .replace(/(\d{3})(\d)/, '$1.$2')
            .replace(/(\d{3})(\d{1,2})$/, '$1-$2');
    } else {
        // Formatar como CNPJ
        input.value = value.replace(/^(\d{2})(\d)/, '$1.$2')
            .replace(/^(\d{2})\.(\d{3})(\d)/, '$1.$2.$3')
            .replace(/\.(\d{3})(\d)/, '.$1/$2')
            .replace(/(\d{4})(\d)/, '$1-$2');
    }
}

function validarFormulario(event) {
    const cpfCnpj = document.getElementById('cpfpj').value;
            const telefone = document.getElementById('telefone').value;
            const apenasNumerosCpfCnpj = cpfCnpj.replace(/\D/g, ''); // Remove caracteres não numéricos
            const apenasNumerosTelefone = telefone.replace(/\D/g, ''); // Remove caracteres não numéricos
            const alertBox = document.getElementById('alert');
            let mensagensErro = [];

            if (apenasNumerosCpfCnpj.length !== 11 && apenasNumerosCpfCnpj.length !== 14) {
                mensagensErro.push('Erro: O CPF ou CNPJ inválido.');
            }

            if (apenasNumerosTelefone.length < 11) {
                mensagensErro.push('Erro: Telefone inválido.');
            }

            if (mensagensErro.length > 0) {
                event.preventDefault(); // Impede o envio do formulário
                alertBox.textContent = mensagensErro.join(' '); // Concatena as mensagens
                alertBox.style.display = 'block'; // Exibe o alerta
            } else {
                alertBox.style.display = 'none'; // Oculta o alerta se a validação passar
            }
        }

        
