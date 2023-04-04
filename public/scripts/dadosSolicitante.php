<?php
require '../Config/Config.php';
spl_autoload_register(function ($class_name) {
    require '../Classes/'.$class_name . '.class.php';
});


$prestador = new PrestadorServico;
$prestador->setCodigo($_GET['codigo_contratado']);
$array = $prestador->getDadosPrestador();

if (!empty($array)){
    echo $array['Nome'];
}else{
    echo "<span class='text-error'>Prestador não localizado, rever o codigo digitado</span>";
}


