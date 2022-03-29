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

<form action='questions.php' method='post'>


    <?php
        session_start();
        $_SESSION['Question'] = 1;
        $_SESSION['Wrong'] = 0;
        $_SESSION['Correct'] = 0;

    ?>
    
    <button type='submit'>Start</button>
</form>

</body>
</html>