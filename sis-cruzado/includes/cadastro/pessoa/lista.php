<p>Listas > Lista de Pessoas</p>
<div class="cards">
    <h1 class="form-title">Lista de Pessoas</h1>
    <form action="#">
    <div class="card-item">
        <a href="#"><button type="button" class="btn btn-primary Novo">Adicionar Pessoa</button></a>
        <div class="user-input-box">
            <div style="overflow: auto; height: 400px;">
                <table id="customers" class="tab_dados">
                    <tr>
                        <th>Nome Completo</th>
                        <th>Idade</th>
                        <th>Telefone</th>
                        <th>Endereço</th>
                        <th>Área de Atuação</th>
                    </tr>
                    <?php
                    $linhas = '';

                    foreach ($pessoas as $value) {
                        $linhas .= "<tr data-id=" . $value->cpfcnpj . " >
                                            <td>" . $value->nome . "</td>
                                            <td>" . $value->dt_nascimento . "</td>
                                            <td>" . $value->telefone . "</td>
                                            <td>" . $value->logradouro . "</td>
                                            <td></td>
                                        </tr>";
                    }

                    print_r($linhas);
                    ?>
                </table>
            </div>
    </form>
</div>
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