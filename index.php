<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style2.css">
</head>

<body>
    <?php include 'inc/header.php' ?>
    <div class="hero">
        <div class="road"></div>
        <div class="city"></div>
        <div class="car">
            <img src="anim/BikeAnimation/bikenowheels.png">
        </div>
        <div class="wheel">
            <img src="anim/BikeAnimation/wheel.png" class="back-wheel">
            <img src="anim/BikeAnimation/wheel.png" class="front-wheel">
        </div>
        <div class="driver">
            <img src="anim/BikeAnimation/sitting.png" class="back-wheel">
        </div>
        <form action='questions.php' method='post'>
            <?php
            session_start();
            $_SESSION['Question'] = 1;
            $_SESSION['Wrong'] = 0;
            $_SESSION['Correct'] = 0;
            ?>
            <button type='submit'>Start</button>
        </form>

    </div>
    <?php include 'inc/footer.php' ?>
</body>



</html>