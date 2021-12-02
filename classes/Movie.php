<?php

// CLASSE
class Movie
{
  public $movieData = [
    "title" => "",
    "director" => "",
    "minutes" => "",
    "year" => null,
    "rating" => null,
  ];
  // COSTRUTTORE
  function __construct($_movieData)
  {
    $this->movieData["title"] = $_movieData["title"];
    $this->movieData["director"] = $_movieData["director"];
    $this->movieData["minutes"] = $_movieData["minutes"];
    $this->movieData["year"] = $_movieData["year"];
    $this->movieData["rating"] = $_movieData["rating"];
  }

  // FUNZIONI
  public function getTitle()
  {
    return $this->movieData["title"];
  }

  public function getDirector()
  {
    return $this->movieData["director"];
  }

  public function getMinutes()
  {
    return $this->movieData["minutes"];
  }

  public function getYear()
  {
    return $this->movieData["year"];
  }

  public function getRating()
  {
    return $this->movieData["rating"];
  }
}
