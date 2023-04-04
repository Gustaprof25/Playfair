<?php
require '../Config/Config.php';
spl_autoload_register(function ($class_name) {
require '../Classes/'.$class_name . '.class.php';
});


$beneficiario = new Beneficiario();
$beneficiario->setCDUSUARIOPLANO($_GET['codigo_beneficiario']);
$array = $beneficiario->getDadosBeneficiario();

if (!empty($array)){
    echo strtoupper($array['NM_PESSOA_FISICA']);
}else {
    echo "<span class='text-error'>Beneficiário não localizado, rever o codigo digitado</span>";
}


