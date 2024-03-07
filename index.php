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
    function __construct($_title, $_releaseDate, $_director, Starring $_starring, $_genres){
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

//classe attori, max 3 attori
class Starring{
    public $actor1;
    public $actor2;
    public $actor3;

    public function __construct($_actor1, $_actor2, $_actor3){
        $this->actor1 = $_actor1;
        $this->actor2 = $_actor2;
        $this->actor3 = $_actor3;
    }

    public function changeActors($num, $_actor1, $_actor2, $_actor3){
        switch ($num) {
            case 1:
                $this->actor1 = $_actor1;
                break;
            case 2:
                $this->actor1 = $_actor1;
                $this->actor2 = $_actor2;
                break;
            case 3:
                $this->actor1 = $_actor1;
                $this->actor2 = $_actor2;
                $this->actor3 = $_actor3;
                break;
            default:
                echo("Error: invalid arguments");
                break;
        }
    }
}

//creazione istanza della classe Movie
$movie1 = new Movie('The Godfather', 1972, 'Francis Ford Coppola', new Starring('Marlon Brando', 'Al Pacino', 'Robert Duvall'), 'genres');
$movie2 = new Movie('Titanic', 1997, 'James Cameron', new Starring('Leonardo DiCaprio', 'Kate Winslet', 'Billy Zane'), 'genres');


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

        $movie1->starring->changeActors(3,'John Travolta', 'Uma Thurman', 'Samuel L. Jackson');
        
        var_dump($movie1);
        

    ?>

</body>
</html>