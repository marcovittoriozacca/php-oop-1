<?php 

//classe Movie
class Movie{
    //variabili di classe
    public $title;
    public $releaseDate;
    public $director;
    public $starring;
    public $genres;

    //costruttore
    function __construct($_title, $_releaseDate, $_director, Starring $_starring, Genres $_genres){
        $this->title = $_title;
        $this->releaseDate = $_releaseDate;
        $this->director = $_director;
        $this->starring = $_starring;
        $this->genres = $_genres;
    }

    //metodi/funzioni di classe
    public function changeTitle($newTitle){
        return $this->title = $newTitle;
    }

    public function changeReleaseDate($newReleaseDate){
        return $this->releaseDate = $newReleaseDate;
    }
    public function changeDirector($newDirector){
        return $this->director = $newDirector;
    }

}

//classe attori
class Starring{
    public $actors = [];

    public function __construct($_actors){
        $this->actors = $_actors;
    }
    //la funzione accetta un array come parametro
    public function changeActors($_arrNewActors){
        $this->actors = $_arrNewActors;
    }
}

class Genres{
    public $genres = [];

    public function __construct($_genres){
        $this->genres = $_genres;
    }

    public function changeGenres($_arrNewGenres){
        $this->genres = $_arrNewGenres;
    }
}

//creazione istanza della classe Movie
$movie1 = new Movie('The Godfather', 1972, 'Francis Ford Coppola', new Starring(['Marlon Brando', 'Al Pacino', 'James Caan', 'Robert Duvall']), new Genres(['Crime', 'Drama']));
$movie2 = new Movie('Titanic', 1997, 'James Cameron', new Starring(['Leonardo DiCaprio', 'Kate Winslet', 'Billy Zane']), new Genres(['Crime', 'Romance']) );


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <style>
        div{
            border: 1px solid gray;
            padding:20px;
        }
    </style>
</head>
<body>
    
    <div>
        <h2>Movie1 output</h2>
        <?php var_dump($movie1) ?>
    </div>
    <div>
        <h2>Movie2 output</h2>
        <?php var_dump($movie2) ?>
    </div>

    <div>
    <h2>Funzioni che cambiano le variabili di classe all'istanza Movie1 + output</h2>
    <?php 
        //cambio del titolo
        $movie1->changeTitle('Pulp Fiction');
        //cambio della data di pubblicazione
        $movie1->changeReleaseDate(1994);
        //cambio del regista
        $movie1->changeDirector('Quentin Tarantino');
        //cambio degli attori
        $movie1->starring->changeActors(['John Travolta', 'Uma Thurman', 'Samuel L. Jackson', 'Bruce Willis']);
        //cambio del genere
        $movie1->genres->changeGenres(['Crime', 'Drama', 'Black Comedy']);
        var_dump($movie1);
    ?>
    </div>

    <div>
        <h2>Output attori movie1 (già modificati dalle funzioni sopra)</h2>
        <?php
            //output sezione attori di movie1, aggiungere [i] dopo actors dove i è la posizione dell'attore per visualizzare solo quella voce
            var_dump($movie1->starring->actors)
        ?>
    </div>
    <div>
        <h2>Output generi movie1 (già modificati dalle funzioni sopra)</h2>
        <?php
            //output sezione generi di movie1, aggiungere [i] dopo genres dove i è la posizione dell'attore per visualizzare solo quella voce
            var_dump($movie1->genres->genres)
        ?>
    </div>

</body>
</html>