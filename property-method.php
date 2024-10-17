<?php
class Film
{
    public $title = "Judul Film";
    public $duration = "Durasi Film";
    public $genre = "Genre Film";
    public $rating = 0;
    public $isRilis = false;

    public function nonton(){
        if($this->isRilis){
            echo "Film ini sedang tayang ";
        }else{
            echo "Film ini belum tayang ";
        }
    }
}

$filmAvenger = new Film();
$filmAvenger->title = "Avenger";
$filmAvenger->duration = "120 Menit";
$filmAvenger->genre = "Action";
$filmAvenger->rating = 8;
$filmAvenger->isRilis = false;

$filmAvenger->nonton();
echo $filmAvenger->title . PHP_EOL;
echo $filmAvenger->duration ;