
<?php

    $NumCorrect = $_SESSION['Correct'];
    $NumWrong= $_SESSION['Wrong'];
    $Difference = $NumCorrect - $NumWrong;

    //Check difference for adding Joker Button ( if difference < -3)
    if($Difference  <= -3 )
    {

        echo "<button id='jokerbutton' onClick='FiftyFitfyJoker()' ></button>";
        $_SESSION['Joker']++;

    }

    ?>