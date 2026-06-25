<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex-php8-oop-movie</title>
</head>

<body>

    <?php

    require_once "./Modules/genre.php";
    require_once "./Modules/movie.php";



    $inception = new Movie("Inception", 2010, [new Genre("Azione"), new Genre("Fantascienza")]);

    $interstellar = new Movie("Interstellar", 2014, [new Genre("Fantascienza"), new Genre("Drammatico")]);

    echo $inception->descrivi();

    echo "<br>";
    echo "<hr>";

    echo $interstellar->descrivi();



    ?>
</body>

</html>