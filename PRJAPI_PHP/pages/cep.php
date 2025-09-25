<?php
$mensagem = "";
//$cep = trim(GET_['cepBuscado']);
$cep = filter_input(INPUT_GET, "cepBuscado", FILTER_VALIDATE_INT);

if (!isset($cep) || strlen($cep) != 8) {
    $mensagem = "Cep Inválido";
} else {
    $url = "https://viacep.com.br/ws/{$cep}/json/";
    $configuracoes = [
        "http" => [
            "method" => "GET",
            "header" => "Content-Type: aplication/json"
        ]
    ];

    #em option é a variável para receber os dados
    $contexto = stream_context_create($configuracoes); // contexto é a sua identificação para pegar os dados
    $resposta = file_get_contents($url, false, $contexto);  // consome api e guarda na $resposta

    if ($resposta == false) {
        $mensagem = "Erro ao consultar o CEP";
    } else {
        $dados = json_decode($resposta, true); // decodifica de json para array associativo

        if (isset($dados['erro']) == true) {
            $mensagem = "CEP não encontrado.";
        }
        // else {
        //     echo "<h2> Endereço encontrado </h2>";
        //     echo "<input type='text' value='{$dados['logradouro']}' disabled><br>";
        //     echo "<input type='text' value='{$dados['complemento']}' disabled><br>";
        //     echo "<input type='text' value='{$dados['bairro']}' disabled><br>";
        //     echo "<input type='text' value='{$dados['localidade']}' disabled><br>";
        //     echo "<input type='text' value='{$dados['estado']}' disabled><br>";
        // }
    }
    // echo "<p> CEP Inválido </p>";
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        header {
            text-align: center;
            width: 100%;
            height: 25vh;
            padding: 20px;
        }
        div {
            display: flex;
            justify-content: center;
            gap: 8px;
        }

        #cep-buscado {
            width: 40%;
            gap: 12px;
            margin: auto;
            flex-direction: column;
            justify-content: center;
        }

        label {
            width: 16%;
        }

        input {
            width: 40%;
        }

        #error{
            color:brown;
            font-style: italic;
            font-size:1rm;
            text-align: center;
        }
    </style>
    <header>
        <h1>Array busca CEP Json</h1>
    </header>
    <div id="cep-buscado">
        <span id="error"><?=$mensagem?></span>
        <div>
            <label for="">Logradouro: </label>
            <input type="text" value="<?= isset($dados['logradouro']) ? $dados['logradouro'] : $mensagem ?>" disabled>
        </div>
        <div>
            <label for="">Complemento: </label>
            <input type="text" value="<?= isset($dados['complemento']) ? $dados['complemento']: $mensagem ?>" disabled>
        </div>
        <div>
            <label for="">Bairro: </label>
            <input type="text" value="<?= isset($dados['bairro']) ? $dados ['bairro']: $mensagem ?>" disabled>
        </div>
        <div>
            <label for="">Cidade: </label>
            <input type="text" value="<?= isset($dados['localidade']) ? $dados ['localidade']: $mensagem ?>" disabled>

        </div>
        <div>
            <label for="">Estado: </label>
            <input type="text" value="<?= isset($dados['estado']) ? $dados ['estado']: $mensagem ?>" disabled>

        </div>
    </div>

</html>