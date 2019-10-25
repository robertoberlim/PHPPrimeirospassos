<?php
$contasCorrentes = [
    '111.111.111-11' => [
        'titular'=> 'Vinicius',
        'saldo'=>1000
    ],
    '222.222.222-22' => [
        'titular'=> 'Maria',
        'saldo'=>10000
    ],
    '333.333.333-33' => [
        'titular'=> 'Alberto',
    'saldo'=>300
    ]

    ];



foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}
