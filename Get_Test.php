<?php
    $curHighscore = file_get_contents('./highscore.txt');
    echo "Current highscore is: " . $curHighscore;
?>