<!-- - è definita una classe ‘Movie’
   => all’interno della classe sono dichiarate delle variabili d’istanza
   => all’interno della classe è definito un costruttore
   => all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php

class Movie
{
    public $title;
    public $length;
    public $genre;
    public $language;
    public $year;
    public $director;

    public function __construct($title, $year, $genre)
    {
        $this->title = $title;
        $this->year = $year;
        $this->genre = $genre;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setYear($year)
    {
        $this->year = $year;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setGenre($genre)
    {
        $this->genre = $genre;
    }

    public function getGenre()
    {
        return $this->genre;
    }

    public function setLanguage($language)
    {
        $this->language = $language;
    }

    public function getLanguage()
    {
        return $this->language;
    }

    public function setLength($length)
    {
        $this->length = $length;
    }

    public function getLength()
    {
        return $this->length;
    }

    public function setDirector($director)
    {
        $this->director = $director;
    }

    public function getDirector()
    {
        return $this->director;
    }
}

$movie = new Movie ('Quasi Amici', 2011, 'drammatico');
$movie->setLength(112);
$movie->setDirector('Olivier Nakache');
$movie->setLanguage('francese');
var_dump($movie);

$movie2 = new Movie ('The French Dispatch', 2021, 'commedia');
$movie2->setLength(108);
$movie2->setDirector('Wes Anderson');
$movie2->setLanguage('inglese');
var_dump($movie2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>Titolo: <?=$movie->getTitle()?></li>
        <li>Anno: <?=$movie->getYear()?></li>
        <li>Genere: <?=$movie->getGenre()?></li>
        <li>Regista: <?=$movie->getDirector()?></li>
        <li>Lingua: <?=$movie->getLanguage()?></li>
        <li>Durata: <?=$movie->getLength()?></li>
    </ul>
    <ul>
        <li>Titolo: <?=$movie2->getTitle()?></li>
        <li>Anno: <?=$movie2->getYear()?></li>
        <li>Genere: <?=$movie2->getGenre()?></li>
        <li>Regista: <?=$movie2->getDirector()?></li>
        <li>Lingua: <?=$movie2->getLanguage()?></li>
        <li>Durata: <?=$movie2->getLength()?></li>
    </ul>
</body>
</html>