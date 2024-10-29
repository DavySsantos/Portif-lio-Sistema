<p>Administrativo > Porte da empresa</p>
                <div class="cards" >
                    <h1 class="form-title">Porte da empresa</h1>
                    <form method="post">
                        <div class="card-item">
                            <div class="user-input-box">
                                <label for="fname">Porte da empresa</label>
                                <input type="text" id="fname" name="empporte" value="<?=$porteEmp->nome;?>">
                            </div>
                        </div>
                        <div class="Salvar">
                            <input class="btn btn-success" type="submit" name="cadastrar" value="Cadastrar">

                            <a href="\administracao\porteempresa\lista.php"><button type="button" class="btn btn-danger">Cancelar</button></a>
                        </div>
                    </form>
        </div>
    </div>