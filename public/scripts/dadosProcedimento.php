<?php
require '../Config/Config.php';
spl_autoload_register(function ($class_name) {
    require '../Classes/'.$class_name . '.class.php';
});


$servico = new ServicoOperadora();
$servico->setCodigo($_GET['codigo']);
$array = $servico->getDadosByCodigo();

if (!empty($array)){
    echo $array['Nome'];
}else{
    echo "Procedimento não localizado, rever a informação digitada";
}


