<?php
    $highscoreFile = './highscore.txt';
    $curHighscore = (int) file_get_contents($highscoreFile);
    $curScore = (int) &_POST["curScoreKey"];
    if($curScore > $curHighscore)
    {
        file_put_contents($highscoreFile,$curHighscore);
        echo "New highscore updated succesfully\nHighscore is: " . $curScore;
    }
    else{
        echo $curScore . " is not a new highscore \nHighscore is: " . $curHighscore;
    }
?>