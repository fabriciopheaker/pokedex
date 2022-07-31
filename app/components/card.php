<?php

class Card
{
  private $img;
  private $name;
  private $height;
  private $weight;
  private $candy;

  public function __construct($img, $name,  $height, $weight, $candy)
  {
    $this->img = $img;
    $this->name = $name;
    $this->height = $height;
    $this->weight = $weight;
    $this->candy = $candy;
  }

  public function show()
  {
    $img = $this->img;
    $name = $this->name;
    $height = $this->height;
    $weight = $this->weight;
    $candy = $this->candy;
    require __DIR__ . '/../view/components/card.html';
  }
}
