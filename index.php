<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex-php8-oop-movie</title>
</head>

<body>

    <?php

    class Movie
    {
        public string $title;
        public int $year;
        public array $genres;

        public function __construct($_title, $_year, array $_genres)
        {

            $this->title = $_title;
            $this->year = $_year;
            $this->genres = $_genres;
        }

        public function descrivi()
        {
            $generi = array_map(fn($genre) => $genre->movieGenre, $this->genres);
            return "il film: $this->title è uscito nell'anno: $this->year. Generi: " . implode(', ', $generi);
        }
    }

    class Genre
    {
        public  $movieGenre;

        public function __construct($_movieGenre)
        {
            $this->movieGenre = $_movieGenre;
        }
    }

    $inception = new Movie("Inception", 2010, [new Genre("Azione"), new Genre("Fantascienza")]);

    $interstellar = new Movie("Interstellar", 2014, [new Genre("Fantascienza"), new Genre("Drammatico")]);

    echo $inception->descrivi();

    echo "<br>";
    echo "<hr>";

    echo $interstellar->descrivi();



    ?>
</body>

</html>