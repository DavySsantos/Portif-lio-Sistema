<p>Cadastro > Empresas</p>
<div class="cards">
    <h1 class="form-title">Empresas</h1>
    <form data-form-lista="pessoa">
    <a href="/cadastro/empresa/cadastro.php?acao=inserir"><button type="button" class="btn btn-primary Novo">Novo</button></a>
    <div class="user-input-box">
        <div style="overflow: auto; height: 260px;">
            <table id="customers">
                <tr>
                    <th>CPF / CNPJ</th>
                    <th>Nome da Empresa</th>
                    <th>Situação</th>
                    <th>Telefone</th>
                    <th>Responsável</th>
                    <th>Número de Vagas</th>
                    <th></th>
                </tr>
                <?php
                $linhas = '';

                foreach ($pessoas as $value) {
                    $situacao = (!$value->situacao == 1) ?                   "<div class='situacao1'></div>" : "<div class='situacao2'></div>";

                    $linhas .= "<tr data-id=" . $value->cpfcnpj . " >
                                            <td>" . $value->cpfcnpj . "</td>
                                            <td>" . $value->nome . "</td>
                                            <td>" . $situacao  . "</td>
                                            <td>" . $value->telefone . "</td>
                                            <td>" . $value->responsavel_empresa . "</d>
                                            <td>" . $value->logradouro . "</td>
                                            <td><a class='btn btn-primary' href='/cadastro/empresa/cadastro.php?acao=alterar&id=" . $value->cpfcnpj . "'>
                                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-fill' viewBox='0 0 16 16'>
  <path d='M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z'/>
</svg></a>

                                        <a class='btn btn-danger' id='myBtn' href='/cadastro/empresa/excluir.php?acao=excluir&id=" . $value->cpfcnpj . "' data-id=" . $value->cpfcnpj . " data-bs-toggle='modal' data-bs-target='#mdlExclusao''>
                                        " . "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor'class='bi bi-trash' viewBox='0 0 16 16'>
  '<path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z'/>
  '<path d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z'/>
</svg>" . "</a></td>
            </tr>";
                }
                print_r($linhas);
                ?>
            </table>
        </div>
    </div>
</form>
</div>
<div class="rodape">
    <label for="fname">Mostrar</label>
    <select id="country" name="country">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
    </select>
</div>
<div class="btn-toolbar Barra" role="toolbar" aria-label="Toolbar with button groups">
    <div class="btn-group me-2 Barra" role="group" aria-label="First group">
        <button type="button" class="btn btn-primary"><i class="lni lni-angle-double-left"></i></button>
        <button type="button" class="btn btn-primary">1</button>
        <button type="button" class="btn btn-primary">2</button>
        <button type="button" class="btn btn-primary">3</button>
        <button type="button" class="btn btn-primary">4</button>
        <button type="button" class="btn btn-primary"><i class="lni lni-angle-double-right"></i></button>
    </div>
</div>
</div>