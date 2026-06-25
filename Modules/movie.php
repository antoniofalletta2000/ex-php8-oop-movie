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