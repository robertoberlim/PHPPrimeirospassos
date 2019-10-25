<?php

$idade = 17;
$numeroDePessoas = 2;

echo "Você só pode entrar se tiver a partir de 18 anos ou ";
echo "a partir de 16 anos acompanhado" . PHP_EOL;

$mensagem = $idade >= 18 ? 'Voce tem mais que 18' : 'Voce tem menos que 18';
echo $mensagem;
echo PHP_EOL;
echo "Adeus!";