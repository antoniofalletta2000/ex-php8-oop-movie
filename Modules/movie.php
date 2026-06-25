<?php

require_once "./Modules/trait.php";

class Movie
    {

        use Rating;
        public string $title;
        public int $year;
        public array $genres;

        public function __construct($_title, $_year, array $_genres, $_vote)
        {

            $this->title = $_title;
            $this->year = $_year;
            $this->genres = $_genres;
            $this->vote = $_vote;
        }

        public function descrivi()
        {
            $generi = array_map(fn($genre) => $genre->movieGenre, $this->genres);
            return "il film: $this->title è uscito nell'anno: $this->year. Generi: " . implode(', ', $generi) . ". Voto: $this->vote";
        }
    }