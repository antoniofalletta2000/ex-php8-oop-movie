<?php

require_once "./Modules/trait.php";

class Movie
    {

        use Rating;
        public string $title;
        public int $year;
        public array $genres;

        public function __construct(string $_title, int $_year, array $_genres, int $_vote)
        {

            $this->title = $_title;
            $this->year = $_year;
            $this->genres = $_genres;
            $this->vote = $_vote;
        }

        public function descrivi()
        {
            $generi = array_map(fn($genre) => $genre->movieGenre, $this->genres);
            return "il film: $this->title è uscito nell'anno: $this->year <br> Generi: " . implode(', ', $generi) . "<br> Voto: $this->vote";
        }
    }