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

        public function __construct($_title, $_year)
        {

            $this->title = $_title;
            $this->year = $_year;
        }

        public function descrivi()
        {
            return "il film: $this->title è uscito nell'anno: $this->year";
        }
    }

    $inception = new Movie("Inception", 2010);

    $interstellar = new Movie("Interstellar", 2014);

    echo $inception->descrivi();

    echo "<br>";
    echo "<hr>";

    echo $interstellar->descrivi();



    ?>
</body>

</html>