<?php


$servico = new  App\Models\TasyModel;
$codigo = trim($_POST['keyword']);

$data['coparticacao'] = $servico->findAll();

if (is_numeric($codigo)){
    $servico->setCDPROCEDIMENTO($codigo);
    $array = $servico->getProcedimentoByCodigo();
}else{
    $servico->setDSPROCEDIMENTO($codigo);
    $array = $servico->getProcedimentoByDescricao();
}

if(!empty($array)){

    foreach ($array as $a){
        //$exame = $a['DS_PROCEDIMENTO'];
        $exame = $a['CD_PROCEDIMENTO'].' - '.$a['DS_PROCEDIMENTO'];
        echo '<div class="text-alert" onclick="set_item(\''.trim($_POST['inputId']).'\',\''.$exame.'\')">'.$exame.'</div>';
    }


}else{
    echo '<div class="text-alert">Não encontrado</div>';
}

return $this->response->setJSON($data);










