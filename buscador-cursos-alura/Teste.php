<?php
// Note que o namespace não obedece o padrão da PSR-4.
namespace Testando;

class Teste
{
    public static function metodo()
    {
        echo "Teste" . PHP_EOL;
    }
}

class Teste2
{
    public static function metodo() : string
    {
        return "Teste2" . PHP_EOL;
    }
}