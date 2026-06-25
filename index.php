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
        public Genre $genre;

        public function __construct($_title, $_year, Genre $_genre)
        {

            $this->title = $_title;
            $this->year = $_year;
            $this->genre = $_genre;
        }

        public function descrivi()
        {
            return "il film: $this->title è uscito nell'anno: $this->year. Questo film è un genere: {$this->genre->movieGenre}";
        }
    }

    class Genre
    {
        public string $movieGenre;

        public function __construct($_movieGenre)
        {
            $this->movieGenre = $_movieGenre;
        }
    }

    $inception = new Movie("Inception", 2010, new Genre("Azione"));

    $interstellar = new Movie("Interstellar", 2014, new Genre("Fantascienza"));

    echo $inception->descrivi();

    echo "<br>";
    echo "<hr>";

    echo $interstellar->descrivi();



    ?>
</body>

</html>