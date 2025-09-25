<?php
$mensagem = "";
//$cep = trim(GET_['cepBuscado']);
$nome = filter_input(INPUT_GET, "name", FILTER_SANITIZE_SPECIAL_CHARS);
var_dump($nome);

if (!isset($nome) ) {
    $mensagem = "Cep Inválido";
} else {
    $url = "https://restcountries.com/v3.1/name/{$nome}";
    $configuracoes = [
        "http" => [
            "method" => "GET",
            "header" => "Content-Type: aplication/json"
        ]
    ];
    var_dump($configuracoes);
    #em option é a variável para receber os dados
    $contexto = stream_context_create($configuracoes); // contexto é a sua identificação para pegar os dados
    $resposta = file_get_contents($url, false, $contexto);  // consome api e guarda na $resposta

    if ($resposta == false) {
        $mensagem = "Erro ao consultar o CEP";
    } else {
        $dados = json_decode($resposta, true); // decodifica de json para array associativo
        
        if (isset($dados['']) == true) {
            $mensagem = "CEP não encontrado.";
        }}}
    
    print_r($dados);
   
   ?>
