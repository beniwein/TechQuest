<?php
session_start();




function ShowQuestion($QuestionNumber)
{
    
    
    
    $AllQuestions = array(

       
        //Question 1
        1 => 'What technology is used to record cryptocurrency transactions?',
        //Question 2
        'What does it mean to uncloud?',
        //Question 3
        'How many words does Arnie say '.'<br>'.'in the original first “Terminator” movie?',


        //Question 4
        'In which country is cellphone throwing an official sport?',
        //Question 5
        'The QR code was invented in Japan. What were QR codes first used for?',
        //Question 6
        'Most cell phones in Japan are also..., - why?',
        //Question 7
        'What year was the iPhone released?',
        //Question 8
        'What is finding and fixing errors in programs?',
        //Question 9
        'What is an error in a program that prevents the program from running as expected?',
        //Question 10
        'A label for a characteristic of a sprite, such as its location and appearance',
        //Question 11
        'A piece of code that you can call over and over again.',
        //Question 12
        'An instruction for the computer',
        //Question 13
        'An action that causes something to happen.',
        //Question 14
        'The action of doing something over and over again.',
        //Question 15
        'An algorithm that has been coded into something that can be run by a machine.',
        //Question 16
        'Who was the first programmer?',
        //Question 17
        'Which of the following is the incorrect way to declare a PHP variable?',
        //The End
        'You have completed the quiz'


    );

    $Answers= array(

        1 => array (

        'Digital wallet',
        'Mining',
        'Blockchain',
        'Token'
        ),

        array (

        'Organize cloud storage',
        'Remove all files from the cloud',
        'Print a file from the cloud',
        'Delete a cloud service account'

        ),
        array (

        'Organize cloud storage',
        'Remove all files from the cloud',
        'Print a file from the cloud',
        'Delete a cloud service account'

        ),

        array (

            'USA',
            'China',
            'Finnland',
            'Malaysia'
        ),

        array (
            'Logistics, shipping car parts (Toyota)',
            'Substitute for postal addresses (Japan Post)',
            'Encryption of prescriptions in pharmacies',
            'Menu in a take-away sushi restaurant'
        ),

        array (
            'waterproof so you can talk on the phone in the shower',
            'Barrier-free, with Braille on the keys, for the blind',
            'configured as a remote control for TV and garage to save space',
            'Equipped with sensors to send earthquake alerts'

        ),

        array(
            '1995',
            '2000',
            '2007',
            '2010'

        ),

        array(
            'Debugging',
            'Program',
            'Bug',
            'Code'

        ),

        array(
            'Bug',
            'Program',
            'Algorithm',
            'Code'

        ),

        array(
            'Property',
            'Programming',
            'Program',
            'Parameter'

        ),

        array(
            'Loop',
            'Function',
            'Variable',
            'Event'

        ),

        array(
            'Algorithm',
            'Command',
            'Code',
            'Call'

        ),

        array(
            'Event',
            'ComCodingmand',
            'Variable',
            'Programming'

        ),

        array(
            'Function',
            'Algorithm',
            'Loop',
            'Iteration'

        ),

        array(
            'Sprite',
            'Program',
            'Property',
            'Code'

        ),

        array(
            'Bill Gates',
            'Ada Lovelace'

        ),

        array(
            '$aVariable;',
            '$a_Variable = 9;',
            '$AVariable;',
            '$a Variable;'

        ),


        array('')


    );

   

    $AnswerInput=array(

        1 => 1,
        1,
        2,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        1,
        0


    );

  
    $currentQuestion = $AllQuestions[$QuestionNumber];
    $currentAnswers = $Answers[$QuestionNumber];
    $numberAnswers = count($Answers[$QuestionNumber]);
    
    //$currentResults= $AnswersResult[$QuestionNumber];
    $currentAnswerInput =  $AnswerInput[$QuestionNumber];

    print_r("<h1>".$AllQuestions[$QuestionNumber]."</h1>");

    if($currentAnswerInput == 1)
    {

        for ($i=0; $i < $numberAnswers; $i++) { 

            echo "<input type='submit' name='answer' id='" . $currentAnswers[$i] . "' value='" . $currentAnswers[$i] . "' />";
            echo '<br> <br>';

            //if($i == 1)
            //{echo '<br> <br>';}
            
        }
        //echo '<br> <br>';
        //print_r('Anzahl Antworten: ' . $numberAnswers) . '<br>';
    }
    else
    {

        echo "<input type='number' name='answernumber' id='answerfield'/> <br/>";
        echo "<input type='submit' name='next' id='answerfield' value='Next' /> <br/>";

    }
    
    echo '<br> <br>';
    echo "<input type='submit' name='reset' id='reset' value='Reset' />"; echo "<input type='submit' name='back' id='back' value='Menu' />";
    echo '<br> <br>';

   
    echo '<br> <br>';
    print_r('Richtige Antworten: ' .  $_SESSION['Correct']) . '<br>';
    echo '<br> <br>';
    print_r('Falsche Antworten: ' .  $_SESSION['Wrong']) . '<br>';
    echo '<br> <br>';

   
}

function redirect($url) {
    $_SESSION['Question'] = 1;
    ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();
}



?>