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
    function __construct($_title, $_releaseDate, $_director, $_starring, $_genres){
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

//creazione istanza della classe Movie
$movie1 = new Movie('The Godfather', 1972, 'Francis Ford Coppola', 'actors', 'genres');
$movie2 = new Movie('Titanic', 1997, 'James Cameron', 'actors', 'genres');


var_dump($movie1, $movie2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    
    <?php 
    
        $movie1->changeTitle('Pulp Fiction');

        $movie1->changeReleaseDate(1994);

        $movie1->changeDirector('Quentin Tarantino');

        var_dump($movie1);

    ?>

</body>
</html>