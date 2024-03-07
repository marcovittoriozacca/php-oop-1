<?php 

//classe Movie
class Movie{
    //variabili di classe
    public $title;
    public $releaseDate;
    public $director;
    public $actors;
    public $genres;

    //costruttore
    function __construct($_title, $_releaseDate, $_director, Actors $_actors, Genres $_genres){
        $this->title = $_title;
        $this->releaseDate = $_releaseDate;
        $this->director = $_director;
        $this->actors = $_actors;
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
class Actors{
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
$movie1 = new Movie('The Godfather', 1972, 'Francis Ford Coppola', new Actors(['Marlon Brando', 'Al Pacino', 'James Caan', 'Robert Duvall']), new Genres(['Crime', 'Drama']));
$movie2 = new Movie('Titanic', 1997, 'James Cameron', new Actors(['Leonardo DiCaprio', 'Kate Winslet', 'Billy Zane']), new Genres(['Crime', 'Romance']) );


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    

    <div class="p-2 border border-3">
        <h2>Movie1 output</h2>
        <?php foreach ($movie1 as $key => $element): ?>
            <!-- se il foreach incontra le chiavi actors e genres riconosce che sono array e stampa i valori interni, in questo caso la key è uguale al nome degli array -->
            <?php if($key == 'actors'|| $key == 'genres'):?>
                <h4 class="text-capitalize"><?= $key?></h4>
                <?php foreach ($element->$key as $subElement):?>
                    <p><?= $subElement?></p>
                <?php endforeach;?>
            
            <!-- altrimenti stampa i valori normalmente -->
            <?php else:?>
                <div class="d-flex column-gap-2">
                    <span class="fw-bolder text-capitalize"><?= $key?>:</span>
                    <p><?= $element?></p>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>            
    </div>

    <div class="p-2 border border-3">
        <h2>Movie2 output</h2>
        <?php foreach ($movie2 as $key => $element): ?>
            <!-- se il foreach incontra le chiavi actors e genres riconosce che sono array e stampa i valori interni, in questo caso la key è uguale al nome degli array -->
            <?php if($key == 'actors'|| $key == 'genres'):?>
                <h4 class="text-capitalize"><?= $key?></h4>
                <?php foreach ($element->$key as $subElement):?>
                    <p><?= $subElement?></p>
                <?php endforeach;?>
            
            <!-- altrimenti stampa i valori normalmente -->
            <?php else:?>
                <div class="d-flex column-gap-2">
                    <span class="fw-bolder text-capitalize"><?= $key?>:</span>
                    <p><?= $element?></p>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>            
    </div>

    <div>
        <?php 
            //cambio del titolo
            $movie1->changeTitle('Pulp Fiction');
            //cambio della data di pubblicazione
            $movie1->changeReleaseDate(1994);
            //cambio del regista
            $movie1->changeDirector('Quentin Tarantino');
            //cambio degli attori
            $movie1->actors->changeActors(['John Travolta', 'Uma Thurman', 'Samuel L. Jackson', 'Bruce Willis']);
            //cambio del genere
            $movie1->genres->changeGenres(['Crime', 'Drama', 'Black Comedy']);
        ?>

        <div class="p-2 border border-3">
            <h2>Funzioni che cambiano le variabili di classe all'istanza Movie1 + output</h2>
            <?php foreach ($movie1 as $key => $element): ?>
                <!-- se il foreach incontra le chiavi actors e genres riconosce che sono array e stampa i valori interni, in questo caso la key è uguale al nome degli array -->
                <?php if($key == 'actors'|| $key == 'genres'):?>
                    <h4 class="text-capitalize"><?= $key?></h4>
                    <?php foreach ($element->$key as $subElement):?>
                        <p><?= $subElement?></p>
                    <?php endforeach;?>
                
                <!-- altrimenti stampa i valori normalmente -->
                <?php else:?>
                    <div class="d-flex column-gap-2">
                        <span class="fw-bolder text-capitalize"><?= $key?>:</span>
                        <p><?= $element?></p>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>            
        </div>
    </div>

    <!-- sezione puramente informativa per capire come accedere ai vari valori delle classi dipendenti

        output sezione attori di movie1, aggiungere [i] dopo actors dove i è la posizione dell'attore per visualizzare solo quella voce
        - var_dump($movie1->actors->actors)
        
        output sezione generi di movie1, aggiungere [i] dopo genres dove i è la posizione dell'attore per visualizzare solo quella voce
        - var_dump($movie1->genres->genres)
         -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>