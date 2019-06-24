<?php

require 'vendor/autoload.php';
$url = "https://homologacao.nfce.fazenda.pr.gov.br/nfce/NFeConsulta3?wsdl";
$client = new nusoap_client($url, 'wsdl');
$header = 
'<nfeCabecMsg xmlns="http://www.portalfiscal.inf.br/sce/wsdl/NFeConsulta3">
    <versaoDados>"3.10"</versaoDados>
    <cUF>PR</cUF>
</nfeCabecMsg>';
$client->setHeaders($header);


// chama a função que faz envio para webservice
$x = params($client);

//imprime retorno
echo "<pre>";
print_r ($client);

/**
 * Função que envia dados para o webservice
 * @param object $client, instância do nusoap
 * @return string , retorna status da chamada
 */
function params($client){

    $schema = array(
        "tpAmb"         => 2,
        "xServ" => "CONSULTAR",
        "chNFe" => "41190111137051013083550010005496471487876729",

    );
    $result = $client->call('nfeConsultaNF3', $schema,"http://www.w3.org/2000/09/xmldsig#");        
    return $result;
}