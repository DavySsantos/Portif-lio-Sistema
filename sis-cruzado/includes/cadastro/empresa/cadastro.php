<p>Cadastro > Cadastro de Empresas</p>
<div class="cards">
    <h1 class="form-title">Cadastro de Empresas</h1>
    <form method="post">
        <div class="card-item">
            <div class="user-input-box two">
                <label id="cpfpj" for="cnpj">CNPJ</label>
                <input type="text" autocomplete="off" maxlength="18" id="txtcnpj" name="cpfcnpj" placeholder="XX.XXX.XXX/0001-XX" value="<?= $emp->cpfcnpj; ?>" required>
            </div>
            <div class="radio" id="radio">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                        id="inlineRadio1" value="cnpj" checked required>
                    <label class="form-check-label" for="inlineRadio1">Pessoa Jurídica</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                        id="inlineRadio2" value="cpf" required>
                    <label class="form-check-label" for="inlineRadio2">Pessoa Física</label>
                </div>
            </div>
            <div class="user-input-box two">
                <label for="fname">Nome da Empresa</label>
                <input type="text" id="fname" name="nomeempresa" placeholder="Insira o nome" value="<?= $emp->nome; ?>">
            </div>
            <div class="user-input-box two">
                <label for="country">Porte da Empresa</label>
                <select id="country" name="porteemp">
                    <option value="-1">Selecione o porte da empresa</option>
                    <?php
                    $linhas = '';

                    foreach ($porteemp as $value) {
                        $linhas .= "<option value='{$value->codigo}'"
                            .
                            ($emp->cEmpresaPorte == $value->codigo ? 'selected' : '')
                            . ">{$value->nome}</option>";
                    }

                    echo $linhas;
                    ?>
                </select>
            </div>
            <div class="user-input-box two">
                <label for="country">Atividade Principal</label>
                <select id="country" name="atividadeeco">
                    <option value="" disabled selected>Selecione a atividade principal</option>
                    <?php
                    $linhas = '';
                    foreach ($economica as $value) {
                        $linhas .= "<option value='{$value->codigo}'"
                            .
                            ($emp->cAtividadeEconomica == $value->codigo ? 'selected' : '') . ">{$value->nome}</option>|";
                    }
                    print $linhas;
                    ?>
                </select>
            </div>
            <div class="user-input-box two">
                <label for="txtcep">CEP</label>
                <input type="text" id="txtcep" name="cep" placeholder="00000-000" maxlength="9" oninput="formatarCEP(this)" value="<?= $emp->cep; ?>" required>
            </div>
            <div class="user-input-box two">
                <label for="fname">Endereço</label>
                <input type="text" id="txtendereco" name="endereco" value="<?= $emp->logradouro; ?>" placeholder="Rua João das Neves,nº100">
            </div>
            <div class="user-input-box two">
                <label for="fname">Cidade</label>
                <input type="text" id="txtcidade" name="cidade" value="<?= $emp->cidade; ?>" placeholder="Rio de Janeiro">
            </div>
            <div class="user-input-box two">
                <label for="fname">Bairro</label>
                <input type="text" id="txtbairro" name="bairro" value="<?= $emp->bairro; ?>" placeholder="Butãtã">
            </div>
            <div class="user-input-box two">
                <label for="fname">Numero</label>
                <input type="text" id="fname" name="numero" value="<?= $emp->numero; ?>" placeholder="100" oninput="formatarNumero(this)" required>
            </div>
            <div class="user-input-box two">
                <label for="fname">Complemento</label>
                <input type="text" id="fname" name="complemento" value="<?= $emp->complemento; ?>" placeholder="Ao lado da merceria">
            </div>
            <div class="user-input-box two">
                <label for="telefone">Telefone</label>
                <input type="tel" id="telefone" name="telefone" placeholder="(21)91234-6789" value="<?= $emp->telefone; ?>" oninput="formatarTelefone(this)" required>
            </div>
            <div class="user-input-box two">
                <label for="fname">Site da Empresa</label>
                <input type="text" id="fname" name="siteemp" placeholder="www.exemplo.com.br">
            </div>
            <div class="user-input-box two">
                <label for="fname">Outras Atividades</label>
                <input type="text" id="fname" name="outrasatividades" placeholder="Escreva aqui">
            </div>
            <div class="user-input-box two">
                <label for="fname">Observações</label>
                <textarea name="observacoes" class="texto" placeholder="Escreva aqui"></textarea>
            </div>
        </div>
        <div class="form-submit-bnt">
        </div>
        <div class="Salvar">
            <input class="btn btn-success" name="cadastrar" type="submit" value="Cadastrar">

            <a href="/cadastro/empresa/lista.php"><button type="button" class="btn btn-danger">Cancelar</button></a>
        </div>
    </form>
</div>
</div>
</div>