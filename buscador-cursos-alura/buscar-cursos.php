<?php

require 'vendor/autoload.php';
use Testando\{Teste, Teste2};

Teste::metodo(); // As classes Teste e Teste2 foram importadas de um autoload classmap.
exibeMensagem(Teste2::metodo()); // exibeMensagem foi importada de um autoload file.

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;
use Alura\BuscadorDeCursos\Buscador; // Buscador foi baixada de um autoload PSR-4.

$client = new Client([
    'base_uri' => 'https://www.alura.com.br/', 
    // URI de onde as requisições vão partir.
    'verify' => false
    // O parâmetro verify informa se o certificado SSH será verificado.
]);
$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);
// $cursos = $buscador->buscar('/cursos-online-programacao/python');
$cursos = $buscador->buscar('/cursos-online-programacao/php');

foreach($cursos as $curso) {
    echo $curso . PHP_EOL;
}
