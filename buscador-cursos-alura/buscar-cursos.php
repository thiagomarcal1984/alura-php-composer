<?php

require 'vendor/autoload.php';

use \GuzzleHttp\Client;
use \Symfony\Component\DomCrawler\Crawler;


$client = new Client(['verify' => false]);
$resposta = $client->request('GET', 'https://www.alura.com.br/cursos-online-tecnologia');
// O parâmetro verify informa se o certificado SSH será verificado.
// Outra alternativa para o código de cima é colocar o array no método request:
// $client = new Client();
// $resposta = $client->request('GET', 'https://www.alura.com.br/cursos-online-tecnologia', ['verify' => false]);

$html = $resposta->getBody();

$crawler = new Crawler();
$crawler->addHtmlContent($html);

$cursos = $crawler->filter('span.card-curso__nome');

foreach($cursos as $curso) {
    echo $curso->textContent . PHP_EOL;
}
