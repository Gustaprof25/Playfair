<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Charles Mousinho Santiago">
    <link rel="icon" type="image/x-icon" href="public/img/unimed.ico">
    <title>Projetos Unimed Palmas</title>

    <!-- Bootstrap core CSS -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Favicons -->

    <link href="public/css/style.css" rel="stylesheet">
    <link href="node_modules/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        a{
            color: #00995d;
        }

    </style>
<body>

<section id="hero" class="d-flex align-items-center">

    <div class="container">

        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-9 text-center">
                <h1>Cifrador Playfair</h1>
            </div>
            <form action="<?php echo base_url('/playfair'); ?>" method="post">
                <div class="">
                    <label for="mensagem">Mensagem:</label>
                    <textarea required class="form-control" type="text" id="mensagem" name="mensagem"></textarea>

                    <label for="chave">Chave:</label>
                    <input required class="form-control" type="text" id="chave" name="chave">
                    <br>
                    <button class="btn btn-primary" type="submit">Criptografar</button>
                </div>
            </form>
        </div>

    </div>
</section>
</body>

