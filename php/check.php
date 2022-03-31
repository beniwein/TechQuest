<?php

$AnswersResult= array(

    1 => 'Blockchain',

    'Organize cloud storage',

    '53',

    'Finnland',

    // Beni: Platzhalter für Animation 'redirect'
    '',

    'Logistics, shipping car parts (Toyota)',

    'waterproof so you can talk on the phone in the shower',

    '2007',

    'Debugging',

    // Beni: Platzhalter für Animation 'redirect'
    '',

    'Bug',

    'Programming',

    'Variable',

    'Call',

    // Beni: Platzhalter für Animation 'redirect'
    '',

    'Event',

    'Algorithm',

    'Code',

    'Ada Lovelace',

    // Beni: Platzhalter für Animation 'redirect'
    '',

    '$a Variable;',

    'countless',

    'Sage',

    'Microsoft Edge',

    'Commodore 64',

    '1957',

    'FORTRAN',

    'Nokia 9000 Communicator',

    'A broken laser pointer'


);



if(array_key_exists('answer', $_POST)) {
    
    if($_POST['answer'] == $AnswersResult[$_SESSION['Question']])
    {
        $_SESSION['Question']++;
        $_SESSION['Correct']++;
    }

    else
    {
        $_SESSION['Question']++;
        $_SESSION['Wrong']++;

    }

    
}

if(isset($_POST['next'])){
    if(!empty($_POST['answernumber'])) {
        
        $numberVal = $_POST["answernumber"];
        //echo $numberVal . $AnswersResult[$_SESSION['Question']];
        if($numberVal > 48 &&  $numberVal < 58)
        {
            $_SESSION['Question']++;
            $_SESSION['Correct']++;
        }

        else
        {
            $_SESSION['Question']++;
            $_SESSION['Wrong']++;

        }
        
    }
}



if(array_key_exists('reset', $_POST)) {

    
    $_SESSION['Question'] = 1;
    $_SESSION['Wrong'] = 0;
    $_SESSION['Correct'] = 0;


}


if(array_key_exists('back', $_POST)) {

    
    redirect('index.php');


}


?>