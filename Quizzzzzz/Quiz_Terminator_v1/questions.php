<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form method='post'>

    <?php
    
        include('quest.php');
        include('check.php');
        ShowQuestion($_SESSION['Question']);
        echo '<br>';
        print_r('Frage Nummer: ' .$_SESSION['Question']);
    ?>
    
</form>

</body>
</html>