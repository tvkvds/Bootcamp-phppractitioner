<?php

class Lesson {
     

    /*

     base for class:
     name
     focus  -- php -- mysql -- html -- laravel -- soft skills -- somethingelse
     source 
     score - thumbs up and down? Likes vs dislikes Moeilijk vs makkelijk - 1 to 5 range
     comments ??
     */

    public $completed = false;
    public $score = null;

    public function __construct($name, $focus, $source){
        $this->name = $name;
        $this->focus = $focus;
        $this->source = $source;
    }

    public function scoreLesson($score){
        $this->score = $score;
    }

}

$lessonsWeekOne = [
    new Lesson('php for beginners 3', 'php', 'https://laracasts.com/series/php-for-beginners/episodes/3'),
    new Lesson('php for beginners 4', 'php', 'https://laracasts.com/series/php-for-beginners/episodes/4'),
    new Lesson('php for beginners 5', 'php', 'https://laracasts.com/series/php-for-beginners/episodes/5'),
    new Lesson('php for beginners 6', 'php', 'https://laracasts.com/series/php-for-beginners/episodes/6'),
    new Lesson('php for beginners 7', 'php', 'https://laracasts.com/series/php-for-beginners/episodes/7'),
    new Lesson('php for beginners 8', 'php', 'https://laracasts.com/series/php-for-beginners/episodes/8'),
    new Lesson('php for beginners 9', 'php', 'https://laracasts.com/series/php-for-beginners/episodes/9'),
    new Lesson('php for beginners 10', 'php', 'https://laracasts.com/series/php-for-beginners/episodes/10'),
    new Lesson('php for beginners 11', 'mysql', 'https://laracasts.com/series/php-for-beginners/episodes/11')

];

#var_dump($lessonsWeekOne);