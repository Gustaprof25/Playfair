<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Gustavo de Lima Pereira">
    <link rel="icon" type="image/x-icon" href="public/img/unimed.ico">
    <title>Projetos Unimed Palmas</title>

    <!-- Bootstrap core CSS -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Favicons -->

    <link href="public/css/style.css" rel="stylesheet">

<body>

<div class="container mt-5">
    <div class="row">

        <div class="col-6">
            <img class="logo"  src="public\img\unimed.png" >
        </div>

    </div>
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4>Inserir Projeto</h4>
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url('salvar'); ?>" method="POST">
                        <div class="form-group">
                            <label for="nome">Nome:</label>
                            <input type="text" class="form-control" id="nome" name="nome" required>
                        </div>
                        <div class="form-group">
                            <label for="link_dev">Link de desenvolvimento:</label>
                            <input type="text" class="form-control" id="link_dev" name="link_dev" >
                        </div>
                        <div class="form-group">
                            <label for="link_prod">Link de produção:</label>
                            <input type="text" class="form-control" id="link_prod" name="link_prod" >
                        </div>
                        <div class="form-group">
                            <label for="estabelecimento">Estabelecimento</label>
                            <select class="form-control" id="estabelecimento" name="estabelecimento">
                                <option value="" disabled selected>-- SELECIONE --</option>
                                <option value="OPS">OPS</option>
                                <option value="HUP">HUP</option>
                                <option value="CEME">CEME</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="descricao">Descrição:</label>
                            <textarea class="form-control" id="descricao" name="descricao" rows="3" ></textarea>
                        </div>
                        <button type="submit" class="btn mt-3 btn-success">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col" style="text-align: right">
            <a href="/projetos_unimed" class="btn btn-warning">Voltar</a>
        </div>
    </div>
</div>

</body>

