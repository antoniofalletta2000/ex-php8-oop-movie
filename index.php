<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex-php8-oop-movie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">
        <?php

        require_once "./Modules/genre.php";
        require_once "./Modules/movie.php";



        $inception = new Movie("Inception", 2010, [new Genre("Azione"), new Genre("Fantascienza")], 9);

        $interstellar = new Movie("Interstellar", 2014, [new Genre("Fantascienza"), new Genre("Drammatico")], 10);

        echo $inception->descrivi();

        echo "<br>";
        echo "<hr>";

        echo $interstellar->descrivi();



        ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>