/**
 * Função para criar um objeto XMLHTTPRequest
 */
function CriaRequest() {
    try{
        request = new XMLHttpRequest();
    }catch (IEAtual){

        try{
            request = new ActiveXObject("Msxml2.XMLHTTP");
        }catch(IEAntigo){

            try{
                request = new ActiveXObject("Microsoft.XMLHTTP");
            }catch(falha){
                request = false;
            }
        }
    }

    if (!request)
        alert("Seu Navegador não suporta Ajax!");
    else
        return request;
}

/**
 * Função para enviar os dados
 */
function getDadosBeneficiario() {

    // Declaração de Variáveis
    var codigo   = document.getElementById("codigo_beneficiario").value;
    var result = document.getElementById("nome_beneficiario");
    var xmlreq = CriaRequest();

    //Exibi a imagem de progresso
    //result.innerHTML = '<img src="../img/progresso.gif"/>';

    // Iniciar uma requisição
    xmlreq.open("GET", "scripts/nomeBeneficiario.php?codigo_beneficiario=" + codigo, true);

    // Atribui uma função para ser executada sempre que houver uma mudança de ado
    xmlreq.onreadystatechange = function(){

        // Verifica se foi concluído com sucesso e a conexão fechada (readyState=4)
        if (xmlreq.readyState == 4) {

            // Verifica se o arquivo foi encontrado com sucesso
            if (xmlreq.status == 200) {

                result.innerHTML = xmlreq.responseText;
                //result.innerHTML = "teste";

            }else{
                result.innerHTML = "Erro: " + xmlreq.statusText;
            }
        }
    };
    xmlreq.send(null);
}

function getDadosSolicitante() {

    // Declaração de Variáveis
    var codigo   = document.getElementById("codigo_contratado").value;
    var result = document.getElementById("nome_contratado");
    var xmlreq = CriaRequest();

    //Exibi a imagem de progresso
    //result.innerHTML = '<img src="../img/progresso.gif"/>';

    // Iniciar uma requisição
    xmlreq.open("GET", "scripts/dadosSolicitante.php?codigo_contratado=" + codigo, true);

    // Atribui uma função para ser executada sempre que houver uma mudança de ado
    xmlreq.onreadystatechange = function(){

        // Verifica se foi concluído com sucesso e a conexão fechada (readyState=4)
        if (xmlreq.readyState == 4) {

            // Verifica se o arquivo foi encontrado com sucesso
            if (xmlreq.status == 200) {
                result.innerHTML = xmlreq.responseText;
                //result.innerHTML = "teste";

            }else{
                result.innerHTML = "Erro: " + xmlreq.statusText;
            }
        }
    };
    xmlreq.send(null);
}

function getDadosProcedimento(varcodigo, x) {

    // Declaração de Variáveis
    var codigo   = varcodigo.value;
    var result = document.getElementById("descricao"+x);
    var xmlreq = CriaRequest();

    //Exibi a imagem de progresso
    //result.innerHTML = '<img src="../img/progresso.gif"/>';

    // Iniciar uma requisição
    xmlreq.open("GET", "scripts/dadosProcedimento.php?codigo=" + codigo, true);

    // Atribui uma função para ser executada sempre que houver uma mudança de ado
    xmlreq.onreadystatechange = function(){

        // Verifica se foi concluído com sucesso e a conexão fechada (readyState=4)
        if (xmlreq.readyState == 4) {

            // Verifica se o arquivo foi encontrado com sucesso
            if (xmlreq.status == 200) {
                //result.innerHTML = xmlreq.responseText;
                result.value = xmlreq.responseText;
            }else{
                result.innerHTML = "Erro: " + xmlreq.statusText;
            }
        }
    };
    xmlreq.send(null);
}/**
 * Created by tisede06 on 06/09/2018.
 */