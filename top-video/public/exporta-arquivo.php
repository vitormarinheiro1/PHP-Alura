<?php

$filme = [

    'nome' => $_POST['nome'],
    'anoLancamento' => $_POST['ano'],
    'nota' => $_POST['nota'],
    'genero' => $_POST['genero']
];

file_put_contents('./public/filme.json', json_encode($filme));

header('Location: /sucesso.php?filme=' . $filme['nome'] );
