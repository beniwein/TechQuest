<?php
session_start();


//Main Function for displaying question with the answers and inputfields

function ShowQuestion($QuestionNumber)
{
    
    //Array of all Questions as Strings
    $AllQuestions = array(

       
        //Question 1
        1 => 'What technology is used to record '.'<br>'.'cryptocurrency transactions?',
        //Question 2
        'What does it mean to uncloud?',
        //Question 3
        'How many words does Arnie say '.'<br>'.'in the original first “Terminator” movie?',
        //Question 4
        'In which country is cellphone throwing '.'<br>'.'an official sport?',
        //Question 5 / Placeholder: Beni (inkl. 10/15/20)
        '',
        //Question 6
        'The QR code was invented in Japan. What were '.'<br>'.'QR codes first used for?',
        //Question 7
        'Most cell phones in Japan are also..., '.'<br>'.'- why?',
        //Question 8
        'What year was the iPhone released?',
        //Question 9
        'What is finding and fixing errors in programs?',
        //Question 10
        '',
        //Question 11
        'What is an error in a program that prevents '.'<br>'.'the program from running as expected?',
        //Question 12
        'A label for a characteristic of a sprite, '.'<br>'.'such as its location and appearance',
        //Question 13
        'A piece of code that you can call over '.'<br>'.'and over again.',
        //Question 14
        'An instruction for the computer',
        //Question 15
        '',
        //Question 16
        'An action that causes something to happen.',
        //Question 17
        'The action of doing something over and '.'<br>'.'over again.',
        //Question 18 (Beni: Einschub bis Question 29)
        'An algorithm that has been coded into '.'<br>'.'something that can be run by a machine.',
        //Question 19
        'Who was the first programmer?',
        //Question 20
        '',
        //Question 21
        'Which of the following is the incorrect '.'<br>'.'way to declare a PHP variable?',
        //Question 22 
        'How many computer languages are in use?',
        //Question 23
        'Which of these are not Early computer?',
        //Question 24
        'What was the fastest growing '.'<br>'.'web browser in 2020?',
        //Question 25
        'Which model of computer is the best '.'<br>'.'selling of all time?',
        //Question 26
        'What year was the oldest programming '.'<br>'.'language still in use invented?',
        //Question 27
        'What is the name of the oldest '.'<br>'.'programming language still in use?',
        //Question 28
        'What was the first mobile phone with '.'<br>'.'internet connectivity?',
        //Question 29
        'What was the first item sold on Ebay '.'<br>'.'in 1995?',
        //The End
        'You have completed the quiz'
                        
    );
    // Beni: Einschub - Result after 'You have completed the quiz'
    $score = $_SESSION['Correct'];

    if ($QuestionNumber === 30) {
        if ($score > 13) {
            echo "<h1>You win - to be continue...</h1>" . "<br>";
            echo "<img id='beBack' src = 'gif/terminator-ill-be-back.gif' alt='I will be back'>";
        } else {
            echo "<h1>You lose - robots wins...</h1>" . "<br>";
            echo "<img id='robot' src = 'gif/terminator-you-lose.gif' alt='Terminator wins'>";
        }
    }

    print_r ('Score: ' . $score);
    // Beni: Einschub - Ende

    //Array of all answer options
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

            '',
            '',
            '',
            ''
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

        array (

            '',
            '',
            '',
            ''
        ),

        array(
            'Algorithm',
            'Program',
            'Bug',
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

        array (

            '',
            '',
            '',
            ''
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

        array (

            '',
            '',
            '',
            ''
        ),

        array(
            '$aVariable;',
            '$a_Variable = 9;',
            '$AVariable;',
            '$a Variable;'

        ),
        //Answer 18 (Beni: Einschub bis Answer 25)
        array(
            '26',
            '139',
            '436',
            'countless'

        ),

        array(
            'Eriac',
            'Univac',
            'Sage',
            'Nasa'

        ),

        array(
            'Microsoft Edge',
            'Firefox',
            'DuckDuckGo',
            'Internet Explorer'

        ),

        array(
            'Apple II',
            'IBM PC (5150)',
            'Commodore 64',
            'Sinclair ZX Spectrum'

        ),

        array(
            '1957',
            '1952',
            '1960',
            '1974'

        ),

        array(
            'Matlab',
            'FORTRAN',
            'ADA',
            'COBOL'

        ),

        array(
            'iPhone',
            'Nokia 9000 Communicator',
            'Motorolla 7500',
            'Blackberry 850'

        ),

        array(
            'A rusty bucket',
            'A computer mouse',
            'A broken laser pointer',
            'A Jurassic Park T-shirt'

        ),


        array('')


    );

   //Array of all Answer Input Types for each Question (1 = multiple choice question buttons, 2 = numberfield, 0 = no continue button)

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

  
    //Set all current Values for the current Question Number

    $currentQuestion = $AllQuestions[$QuestionNumber];
    $currentAnswers = $Answers[$QuestionNumber];
    $numberAnswers = count($Answers[$QuestionNumber]);
    $currentAnswerInput =  $AnswerInput[$QuestionNumber];


    //Print the question to questions.php

    print_r("<h1>".$currentQuestion."</h1>");

    //Print the inputfield (multiple choice if 1, number field if 2)

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
    else if($currentAnswerInput == 2)
    {

        echo "<input type='number' name='answernumber' id='answerfield'/> <br/>";
        echo "<input type='submit' name='next' id='answerfield' value='Next' /> <br/>";

    }


    //Set Animation scenes if question number = 5, 10, 15 or 20

    if(($QuestionNumber == 5))
    {

        
        $_SESSION['Question']++;
        animDirect('/anim/BornAnimation/born.html');

    }

    else if($QuestionNumber == 10)
    {

        
        $_SESSION['Question']++;
        animDirect('/anim/ScanAnimation/scan.html');

    }

    else if($QuestionNumber == 15)
    {

        
        $_SESSION['Question']++;
        animDirect('/anim/RobotAnimation/robot.html');

    }

    else if($QuestionNumber == 20)
    {

        
        $_SESSION['Question']++;
        animDirect('/anim/CrushAnimation/crush.html');

    }

    
    //Create Reset and Back to Menu Button

    echo '<br> <br>';
    echo "<input type='submit' name='reset' id='reset' value='Reset' />"; echo "<input type='submit' name='back' id='back' value='Menu' />";
    echo '<br> <br>';

    //Print correct and wrong question
    echo '<br> <br>';
    print_r('Richtige Antworten: ' .  $_SESSION['Correct']) . '<br>';
    echo '<br> <br>';
    print_r('Falsche Antworten: ' .  $_SESSION['Wrong']) . '<br>';
    echo '<br> <br>';
    print_r('Anzahl Jokers gezeigt: ' .  $_SESSION['jokers']) . '<br>';
    echo '<br> <br>';
    //Calculate difference between correct and wrong questions
    $NumCorrect = $_SESSION['Correct'];
    $NumWrong= $_SESSION['Wrong'];
    $Difference = $NumCorrect - $NumWrong;

  

    //Check difference for changing terminator mascot

    if( $Difference  >= 3  )
    {
        echo '<img id="terminatorimg" src="img/termin4.png" alt="">';


    }

    else  if($Difference  <= -3 && $Difference  >=-6)
    {
        echo '<img id="terminatorimg" src="img/termin2.png" alt="">';


    }

    else  if($Difference  < -6)
    {
        echo '<img id="terminatorimg" src="img/termin3.png" alt="">';


    }
    else if($Difference  < 3 && $Difference > -3)
    {
        echo '<img id="terminatorimg" src="img/termin1.png" alt="">';


    }

   
}

//Quick function for redirection to index with back to menu button

function redirect($url) {
    $_SESSION['Question'] = 1;
    ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();
}

function animDirect($url) {
    ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();
}


?>