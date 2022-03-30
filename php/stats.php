<?php
    session_start();

    $_SESSION["quest"] = $_POST["quest"];

    function score() {
        $score = true;

        if ($_SESSION['Correct'] >= 13)
        {
            return true;
        }
        return false;
    }

if (score()) {

    echo "<a href = ''><img src = 'gif/terminator-ill-be-back.gif'></a>";
    

    } else {

    echo "<a href = ''><img src = 'gif/terminator-you-lose.gif'></a>";

    }
?>