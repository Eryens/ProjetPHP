<?php

class Movie {

    private $db;

    private $id;
    private $title;

    public $synopsis;
    public $releaseDate;
    public $rating;

    public function __construct(int $id)
    {
        $this->id = $id;
        $this->db = DB::getInstance();
    }
    
}