<?php
$nome= "name";
$_GET["name"];
$nome=$_GET["name"];
print $nome;
$contexto = stream_context_create ($configuracoes);
$resposta = file_get_contents($url, false, $contexto);

$url = "https://restcountries.com/v3.1/name/{$nome}";
$configuracoes = [
    "http" => [
        "method" => "GET",
        "header" => "Content-Type: aplication/json"
    ]];


$dados = json_decode($resposta);
?>