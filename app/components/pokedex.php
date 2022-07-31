<?php

require_once __DIR__ . '/card.php';
class Pokedex
{
  private $url = 'https://www.canalti.com.br/api/pokemons.json';
  protected $pokemon;


  function __construct()
  {
    $this->pokemon =  json_decode(file_get_contents($this->url));
  }

  public function show()
  {
    $pokemon =  $this->pokemon;
    foreach ($pokemon->pokemon as $pokemon) {
      (new Card($pokemon->img, $pokemon->name, $pokemon->height, $pokemon->weight, $pokemon->candy))->show();
    }
  }
}
