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
    
    public function getMovieInformation() 
    {
        $request = $this->db->prepare("SELECT * FROM MOVIE WHERE id = :id");
        $request->execute([':id' => $this->id,
        ]);

        return $request->fetchAll(PDO::FETCH_ASSOC)[0];
    }

    public static function getAllMovies() 
    {
        $db = DB::getInstance();

        $request = $db->prepare("SELECT * FROM MOVIE ORDER BY TITLE ASC");
        $request -> execute();

        return $request->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getPictures() 
    {
        $db = DB::getInstance();
        // redo it properly with DB
        $request = $db->prepare("SELECT * FROM PICTURE JOIN MOVIE ON MOVIE_HAS_PICTURE ON PICTURE.ID = MOVIE_HAS_PHOTO.ID");
    }

}