<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php

    class Movie {
        public $titolo;
        public $sottotitolo;
        public $regista;
        public $cast;
        public $durata;
        public $lingua;
        public $bg;

        function __construct($_titolo, $_sottotitolo, $_regista, $_cast, $_durata, $_lingua, $_bg)
        {
            $this->titolo = $_titolo;
            $this->sottotitolo = $_sottotitolo;
            $this->regista = $_regista;
            $this->cast = $_cast;
            $this->durata = $_durata;
            $this->lingua = $_lingua;
            $this->bg = $_bg;

        }

        function getTitolo()
        {
            return $this->titolo;
        }

        function setTitolo($_titolo)
        {
            $this->titolo = $_titolo;
        }

        function getSottotitolo()
        {
            if($this->sottotitolo == '')
                return '---';
            return $this->sottotitolo;
        }

        function setSottotitolo($_sottotitolo)
        {
            $this->sottotitolo = $_sottotitolo;
        }

        function getRegista()
        {
            return $this->regista;
        }

        function setRegista($_regista)
        {
            $this->regista = $_regista;
        }

        function getCast()
        {
            return $this->cast;
        }

        function setCast($_cast)
        {
            $this->cast = $_cast;
        }

        function getDurata()
        {
            return $this->durata;
        }

        function setDurata($_durata)
        {
            $this->durata = $_durata;
        }

        function getLingua()
        {
            return $this->lingua;
        }

        function setLingua($_lingua)
        {
            $this->lingua = $_lingua;
        }

        function getBg()
        {
            return $this->bg;
        }

        function setBg($_bg)
        {
            $this->bg = $_bg;
        }
    }

    $movies = [

        new Movie('Spider-Man:', 'Homecoming', 'Jon Watts', 'Tom Holland, Michael Keaton, Jon Favreau, Zendaya, Donald Glover, Tyne Daly, Marisa Tomei e Robert Downey Jr', 133, 'en', 'img-1'),

        new Movie('Thor:', 'Ragnarok', 'Taika Waititi', 'Chris Hemsworth, Tom Hiddleston, Cate Blanchett, Idris Elba, Jeff Goldblum, Tessa Thompson, Karl Urban, Mark Ruffalo e Anthony Hopkins', 130, 'en', 'img-2'),

        new Movie('Il talento del calabrone', '', 'Giacomo Cimini', 'Sergio Castellitto, Lorenzo Richelmy, Anna Foglietta, Gianluca Gobbi, David Coco', 93, 'ita', 'img-3'),
    
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Iniziamo il viaggio nella Programmazione ad Oggetti</title>
</head>
<body>
    <div class="wrapper">
        <?php
        foreach($movies as $movie) {?>
            <div class="container" style="background-image: url('img/<?php echo $movie->getBg(); ?>.jpg');">
                <div class="overlay"></div>
                <div class="text">
                    <h1><?php echo $movie->getTitolo(); ?></h1>
                    <h3><?php echo $movie->getSottotitolo(); ?></h3>
                    <h5><?php echo $movie->getRegista(); ?></h5>
                    <p><?php echo $movie->getCast(); ?></p>
                    <span><?php echo $movie->getDurata(); ?> min</span>
                    <span>Lenguage: <?php echo $movie->getLingua(); ?></span>
                </div>   
            </div>
            <?php }
        ?>
    </div>
</body>
</html>