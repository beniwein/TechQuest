<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
   
</head>
<body>

<!-- <div id="hints"> </div> -->

<div id="hint"></div>
<form method='post'>

    <?php
    
        include('php/quest.php');
        include('php/check.php');
        ShowQuestion($_SESSION['Question']);
        echo '<br>';
        print_r("Frage Nummer: " . "<p id='questNum'>" . $_SESSION['Question'] . "</p>");
        
    ?>
    
</form>




<img id="terminatorimg" src="img/termin1.png" alt="">

<script src="js/hints.js"></script>
<script src="js/joker.js"></script>
<script>ShowHints();</script>

</body>
</html>