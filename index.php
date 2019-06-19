<?php

require 'vendor/autoload.php';
$url = "https://ssw.inf.br/ws/sswColeta/index.php?wsdl";
$client = new nusoap_client($url, 'wsdl');


// chama a função que faz envio para webservice
$x = params($client);

//imprime retorno
print_r ($x);

/**
 * Função que envia dados para o webservice
 * @param object $client, instância do nusoap
 * @return string , retorna status da chamada
 */
function params($client){

    $schema = array(
        "dominio"       => "GRT",
        "login"         => "Cesar",
        "senha"         => "costa",
        "cnpjRemetente" => "05138578000122",
        "tipoPagamento" => "O",
        "cepEntrega"    => 81820020,
        "solicitante"   => "Cesar",
        "limiteColeta"  => "2019-06-18T22:00:00",
        "quantidade"    => 1,
        "peso"          => 10.0
    );
    $result = $client->call('coletar', $schema);        
    return $result;
}