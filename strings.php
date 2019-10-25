<?php

$idade = 16;

echo "Olá mundo!" . PHP_EOL;
echo "Eu tenho \"$idade\" anos";

echo PHP_EOL . PHP_EOL;

echo "Você só pode entrar, se tiver mais de 18 anos\n";
if ($idade > 18) { 
    echo "Você tem $idade anos." . PHP_EOL;
    echo "Pode entrar";
}
