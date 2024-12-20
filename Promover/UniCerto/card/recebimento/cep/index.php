<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uni - Faça seu Cartão</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
    
<script
  src="https://cdn.utmify.com.br/scripts/utms/latest.js"
  async
  defer
></script>

<script>
  window.pixelId = "66bb763debbcebab27d68442";
  var a = document.createElement("script");
  a.setAttribute("async", "");
  a.setAttribute("defer", "");
  a.setAttribute("src", "https://cdn.utmify.com.br/scripts/pixel/pixel.js");
  document.head.appendChild(a);
</script>
    
</head><body>
    <link rel="stylesheet" href="../../../assets/style.css">
    <style>
         html, body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }
        .main-content {
            max-width: 400px;
            margin: 30px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease; /* Transição suave ao expandir */
        }
        .footer {
            background-color: #ffffff;
            border-top: solid 1px #e6dddd;
            color: #000;
            text-align: center;
            padding: 10px 0;
            padding-top: 10px;
            padding-bottom: 10px;
            /* position: fixed !important;  */
            width: 100%;
            bottom: 0;
        }
        .mensagem-erro {
            color: red;
            font-size: 12px;
            margin-top: 5px;
        }

        .campo-erro {
            border-color: red;
        }

    </style>

<div style="
  display: grid;
  grid-template-areas:
    'top-bar'
    'content'
    'footer';
  grid-template-rows: auto 1fr auto;
  min-height: 100vh;
">   
    <div class="header">
        <img style="width: 120px;" src="https://i.imgur.com/Q0PyyEg.png" alt="Imagem Centralizada">
    </div>

    <div style="grid-area: content; padding: 0 1rem;">
        <div class="main-content">
            <!-- Formulário de endereço -->
            <h4>Vamos enviar seu cartão pelos Correios.</h4>
            <p>Informe seu endereço:</p>
            
            <form id="form-endereco" class="text-start">
                <div class="mb-3">
                    <label for="cep" class="form-label">CEP</label>
                    <input type="text" class="form-control" id="cep" placeholder="00000-000" onblur="buscarCEP()">
                </div>
                <div id="endereco-completo">
                    <div class="mb-3">
                        <label for="rua" class="form-label">Rua</label>
                        <input type="text" class="form-control" id="rua">
                    </div>
                    <div class="mb-3">
                        <label for="numero" class="form-label">Número</label>
                        <input type="text" class="form-control" id="numero">
                    </div>
                    <div class="mb-3">
                        <label for="complemento" class="form-label">Complemento</label>
                        <input type="text" class="form-control" id="complemento">
                    </div>
                    <div class="mb-3">
                        <label for="bairro" class="form-label">Bairro</label>
                        <input type="text" class="form-control" id="bairro">
                    </div>
                    <div class="mb-3">
                        <label for="cidade" class="form-label">Cidade</label>
                        <input type="text" class="form-control" id="cidade">
                    </div>
                    <div class="mb-3">
                        <label for="estado" class="form-label">Estado</label>
                        <select class="form-select" id="estado">
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                        </select>
                    </div>
    
                    <button type="submit" id="continuarAg" class="btn btn-custom w-100 rounded-pill">Continuar</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function buscarCEP() {
            const cep = document.getElementById('cep').value;
            if (cep) {
                fetch(`https://viacep.com.br/ws/${cep}/json/`)
                    .then(response => response.json())
                    .then(data => {
                        if (!data.erro) {
                            // Grava os novos dados no localStorage
                            localStorage.setItem('rua', data.logradouro);
                            localStorage.setItem('numero', '');
                            localStorage.setItem('complemento', '');
                            localStorage.setItem('bairro', data.bairro);
                            localStorage.setItem('cidade', data.localidade);
                            localStorage.setItem('estado', data.uf);
                            localStorage.setItem('cep', cep);

                            document.getElementById('rua').value = data.logradouro;
                            document.getElementById('bairro').value = data.bairro;
                            document.getElementById('cidade').value = data.localidade;
                            document.getElementById('estado').value = data.uf;

                            // Exibe os campos de endereço
                            document.getElementById('footerChg').style.position = "relative";
                          //  document.getElementById('endereco-completo').style.display = 'block';
                        } else {
                            alert('CEP não encontrado.');
                        }
                    })
                    .catch(error => {
                        alert('Erro ao buscar CEP.');
                        console.error('Erro:', error);
                    });
            }
        }
        
        document.getElementById('form-endereco').addEventListener('submit', function(event) {
            event.preventDefault(); // Previne o comportamento padrão do formulário
            
            const rua = document.getElementById('rua');
            const bairro = document.getElementById('bairro');
            const numero = document.getElementById('numero');
            const complemento = document.getElementById('complemento');
            const cidade = document.getElementById('cidade');
            const estado = document.getElementById('estado');
            const cep = document.getElementById('cep');
            let formValido = true;

            // Função para exibir erro
            function mostrarErro(campo, mensagem) {
                const mensagemErro = document.createElement('div');
                mensagemErro.className = 'mensagem-erro';
                mensagemErro.innerText = mensagem;
                campo.classList.add('campo-erro');
                campo.parentNode.appendChild(mensagemErro);
                formValido = false;
            }

            // Função para limpar erros
            function limparErros(campo) {
                campo.classList.remove('campo-erro');
                const erroAnterior = campo.parentNode.querySelector('.mensagem-erro');
                if (erroAnterior) {
                    erroAnterior.remove();
                }
            }

            // Limpa erros prévios
            limparErros(rua);
            limparErros(bairro);

            // Validação do campo "Rua"
            if (rua.value.trim() === '') {
                mostrarErro(rua, 'Por favor, preencha este campo.');
            }

            // Validação do campo "Bairro"
            if (bairro.value.trim() === '') {
                mostrarErro(bairro, 'Por favor, preencha este campo Bairro.');
            }
            
            if(formValido){
                // Atualiza os valores no localStorage antes de redirecionar
                localStorage.setItem('rua', rua.value.trim());
                localStorage.setItem('numero', numero.value.trim());
                localStorage.setItem('complemento', complemento.value.trim());
                localStorage.setItem('bairro', bairro.value.trim());
                localStorage.setItem('cidade', cidade.value.trim());
                localStorage.setItem('estado', estado.value);
                localStorage.setItem('cep', cep.value.trim());

                window.location.href = 'confirma/index.php';
            }
        });
        
    </script>

    <div class="footer py-4" id="footerChg">
        © 2024 Uni S/A. CNPJ 68.842.676/0001-66. <br>
         Av. paulista 1320, São Paulo/SP - CEP 01310-930
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

</div>