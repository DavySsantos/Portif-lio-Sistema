const toggle = document.querySelector("#alt-bnt");

toggle.addEventListener("click",function(){
    document.querySelector("#sidebar").classList.toggle("expand");
});

// Função para formatar o telefone
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

function formatarDependentes(input) {
    let depend = input.value.replace(/\D/g, '');

    if (depend.length > 2) {
        depend = depend.slice(0, 2);
    }

    input.value = depend;
}


function formatarSalario(input) {
    let valor = input.value.replace(/\D/g, ''); // Remove caracteres não numéricos

    // Converte o valor para o formato monetário
    if (valor.length > 2) {
        valor = valor.replace(/(\d)(\d{2})$/, '$1,$2'); // Adiciona a vírgula decimal
        valor = valor.replace(/\B(?=(\d{3})+(?!\d))/g, '.'); // Adiciona os pontos de milhar
    }

    // Adiciona o prefixo "R$" e atualiza o campo
    input.value = valor ? `R$${valor}` : '';
}

function formatarUltsalario(input) {
    let valor = input.value.replace(/\D/g, ''); // Remove caracteres não numéricos

    // Converte o valor para o formato monetário
    if (valor.length > 2) {
        valor = valor.replace(/(\d)(\d{2})$/, '$1,$2'); // Adiciona a vírgula decimal
        valor = valor.replace(/\B(?=(\d{3})+(?!\d))/g, '.'); // Adiciona os pontos de milhar
    }

    // Adiciona o prefixo "R$" e atualiza o campo
    input.value = valor ? `R$${valor}` : '';
}

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

document.querySelectorAll('#myBtn').forEach(el => {
    el.onclick = function(event){
        event.preventDefault();   
        mdlExclusao.querySelector('[data-codigo]').setAttribute('data-codigo', el.getAttribute('data-id'));
    }
})
    

mdlExclusao.addEventListener('shown.bs.modal', (e) => {
    let btnApagar = mdlExclusao.querySelector('[name="excluir"]');
    
    btnApagar.onclick = function(){
        form = document.querySelector('form').getAttribute('data-form-lista');
        let codigo = mdlExclusao.querySelector('[data-codigo]').getAttribute('data-codigo');
        switch (form) {
            case 'atividadeeconomica':
                fetch(`/Middleware/AtividadeEconomica.php?acao=excluir&codigo=${codigo}`, { method: 'GET' })
                    .then(response => response.text())
                    .then(texto => {
                        console.log("retorno " . texto);
                        if(texto){
                            window.location.href = `${window.location.pathname}?status=success`;
                        }
                    })
                    .catch(err => console.log(err.message));
                break;
                    
            case 'nivelvaga':
                fetch(`/Middleware/VagaNivel.php?acao=excluir&codigo=${codigo}`, { method: 'GET' })
                    .then(response => response.text())
                    .then(texto => {
                        console.log("retorno " . texto);
                        if(texto){
                            window.location.href = `${window.location.pathname}?status=success`;
                        }
                    })
                    .catch(err => console.log(err.message));
                break;

            case 'porteempresa':
                fetch(`/Middleware/EmpresaPorte.php?acao=excluir&codigo=${codigo}`, { method: 'GET' })
                    .then(response => response.text())
                    .then(texto => {
                        if(texto){
                            window.location.href = `${window.location.pathname}?status=success`;
                        }
                    })
                    .catch(err => console.log(err.message));
                break;

            case 'pessoa':
                fetch(`/Middleware/Pessoa.php?acao=excluir&codigo=${codigo}`,
                    { method: 'GET' })
                    .then(response => response.text())
                    .then(texto => {
                        console.log("retorno " . texto);
                        if(texto){
                            window.location.href = `${window.location.pathname}?status=success`;
                        }
                    })
                    .catch(err => console.log(err.message));
                break;
        
            default:
                break;
        }
        
        
    }
})

document.addEventListener('DOMContentLoaded', function () {
    const radioButtons = document.querySelectorAll('input[name="inlineRadioOptions"]');
    const documentInput = document.getElementById('txtcnpj');
    const documentLabel = document.getElementById('cpfpj');

    function formatCPF(value) {
        return value
            .replace(/\D/g, '')
            .replace(/(\d{3})(\d)/, '$1.$2')
            .replace(/\.(\d{3})(\d)/, '.$1.$2')
            .replace(/\.(\d{3})(\d)/, '.$1-$2')
            .replace(/(-\d{2})\d+?$/, '$1');
    }

    // .replace(/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/, "$1.$2.$3/$4-$5");
    function formatCNPJ(value) {
        return value
            .replace(/\D/g, '')
            .replace(/(\d{2})(\d)/, '$1.$2')
            .replace(/\.(\d{3})(\d)/, '.$1.$2')
            .replace(/\.(\d{3})(\d)/, '.$1/$2')
            .replace(/(\/\d{4})(\d)/, '$1-$2')
            .replace(/(-\d{2})\d+?$/, '$1');
    }


    function applyMask() {
        const selectedValue = document.querySelector('input[name="inlineRadioOptions"]:checked').value;
        let value = documentInput.value;

        if (selectedValue === 'cpf') {
            documentInput.value = formatCPF(value);
        } else if (selectedValue === 'cnpj') {
            documentInput.value = formatCNPJ(value);
        }
    }

    function updateInput() {
        const selectedValue = document.querySelector('input[name="inlineRadioOptions"]:checked').value;

        if (selectedValue === 'cnpj') {
            documentInput.placeholder = 'XX.XXX.XXX/0001-XX';
            documentLabel.textContent = 'CNPJ:';
            documentInput.value = '';
        } else if (selectedValue === 'cpf') {
            documentInput.placeholder = 'XXX.XXX.XXX-XX';
            documentLabel.textContent = 'CPF:';
            documentInput.value = '';
        }

    }

    radioButtons.forEach(button => {
        button.addEventListener('change', updateInput);
    });

    documentInput.addEventListener('input', applyMask);
    document.getElementById('txtcnpj').click();

    // updateInput();
});

function checkURL() {
    const url = window.location.href;
    const inputElement = document.querySelector('#txtcnpj');
    const radio2Element = document.querySelector('#inlineRadio2');
    const radioElement = document.querySelector('input[name="inlineRadioOptions"]');
    const labelElement = document.querySelector('label[for="cnpj"]'); 


    if (url.includes('alterar')) { 
        inputElement.disabled = true; 
        radio2Element.disabled = true; 
        radioElement.disabled = true; 

        labelElement.style.color = 'gray'; 
        labelElement.style.pointerEvents = 'none';
    }
}
window.onload = checkURL;

function formatarCEP(input) {
    let valor = input.value.replace(/\D/g, ''); // Remove caracteres não numéricos
    if (valor.length > 5) {
        valor = valor.slice(0, 5) + '-' + valor.slice(5, 8); // Formata o CEP
    }
    input.value = valor;

    // Se o campo de CEP estiver vazio, limpar os outros campos
    if (valor === '') {
        limparCampos();
    }
}


function buscacep() {
    let cep = document.getElementById('txtcep').value;
    if (cep !== "") {
        let url = `https://viacep.com.br/ws/${cep}/json/`;

        let req = new XMLHttpRequest();
        req.open("GET", url);
        req.send();

        req.onload = function () {
            if (req.status === 200) {
                let endereco = JSON.parse(req.response);
                document.getElementById("txtendereco").value = endereco.logradouro;
                document.getElementById("txtcidade").value = endereco.localidade;
                document.getElementById("txtbairro").value = endereco.bairro;
            }
            else if (req.status === 404) {
                alert("CEP inválido");
            }
            else {
                alert("Erro ao fazer a requisição");
            }
        }
    }
}

function limparCampos() {
    document.getElementById("txtendereco").value = '';
    document.getElementById("txtbairro").value = '';
    document.getElementById("txtcidade").value = '';
    document.getElementById("error-message").textContent = '';
}

window.onload = function () {
    let txtcep = document.getElementById("txtcep");
    txtcep.addEventListener("blur", buscacep);
}

// mdlExclusao.addEventListener('shown.bs.modal', (e) => {
//     let btnApagar = mdlExclusao.querySelector('[name="excluir"]');
//     let btnCancelar = mdlExclusao.querySelector('[name="cancelar"]');
//     // Middleware/atividadeeconomica/AtividadeEconomica.php?acao=excluir&codigo=26
//     btnApagar.onclick = function(){
//         fetch('/Middleware/atividadeeconomica/AtividadeEconomica.php?acao=todos', { method: 'GET' })
//         .then(response => response.json())
//         .then(texto => {
//             exto.forEach(el => {
//            console.log(el.texto)
//            });
//         })
//         .catch(err => console.log(err.message))
//     }
// })







