<p>Administrativo > Nível Vaga</p>
                <div class="cards" >
                    <h1 class="form-title">Nível da Vaga</h1>
                    <form method="post">
                        <div class="card-item">
                            <div class="user-input-box">
                                <label for="fname">Nível da vaga</label>
                                <input type="text" id="fname" name="nivelvaga" value="<?=$nivelVaga->nome;?>">
                            </div>
                        </div>
                        <div class="Salvar">
                            <input class="btn btn-success" type="submit" name="cadastrar" value="Cadastrar">

                            <a href="\administracao\nivelvaga\lista.php"><button type="button" class="btn btn-danger">Cancelar</button></a>
                        </div>
                    </form>
        </div>
    </div>