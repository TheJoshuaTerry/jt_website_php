<!-- Main page, serves as a nice intro, sets up mood and atmosphere -->
<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
    <title>Fasten SEATBELTS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/jpg" href="mediafiles/OIP.jfif"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <?php 
        include "accessories/header.php";
    ?>

    <?php
        include "accessories/top-background.php";
    ?>

    <div class="container">
        <div class="row indexClick">
            <div class="mainText">
                <div class="text-center">
                    <h3 class='front-page-name'>Joshua Terry</h3>
                </div>
                <div class="d-none d-sm-block text-center secondMainText">
                    <h5 class='front-page-intro'><a href=''>Networking</a>, Survielence and Access, Python Automation Developer, Back End Game Design
                    <br> Python, C\C++, JAVA, Javascript, PHP, SQL(SMSS, MYSQL)</h5>
                </div>
            </div>
            <button type="button" class="btn btn-dark clickmeButton" href="about.php">Get to Know ME!!!!</button>
            <button type="button" class="btn btn-dark clickmeButton" href="about.php">Hire Me!!!!!</button>
        </div>
    </div>

    <?php 
        include "accessories/cookie.php" 
    ?>

    <audio id="mainAudioplay" autoplay loop>
        <source src="mediafiles\typing.mp3">
    </audio>

    <link rel="stylesheet" type="text/css" href="styles.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.0-rc.1/dist/js.cookie.min.js"></script>
    <script src="jsActivated/cookieButton.js"></script>
    <script src="jsActivated/background-sound.js"></script>
    <script src="jsActivated/indexButtonListener.js"></script>
</body>
</html>