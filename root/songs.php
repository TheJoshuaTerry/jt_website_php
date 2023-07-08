<!-- Some of my favorite songs alltogether in a page, to listen to some treasures, Tank! is the most popular one, worth a listen -->
<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
    <title>Listen up!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/jpg" href="mediafiles/seatbelts.jpg"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <?php 
        include "accessories/header.php";
    ?>

    <?php
        include "accessories/top-background.php";
    ?>

    <div class="container music">
        <div class="row musicPlayer">
            <div class="col-sm-4 albums">
                <img src="mediafiles/album.jpeg" class="topLogo mx-auto d-block" alt="">
                <div class="rest">
                    <button type="button" class="btn btn-dark moreAlbums">More Albums</button>
                </div>
            </div>
            <div class="col-sm-8 allsongs">
                <div class="songs">
                    Bad Dog No Biscuits<br>
                    <audio class="Songplay" controls>
                        <source src="allsongs/Bad Dog No Biscuits.mp3">
                    </audio>
                </div>
                <div class="songs">
                    Car 24<br>
                    <audio class="Songplay" controls>
                        <source src="allsongs/Car 24.mp3">
                    </audio>
                </div>  
                <div class="songs">
                    Cat Blues<br>
                    <audio class="Songplay" controls>
                        <source src="allsongs/Cat Blues.mp3">
                    </audio>
                </div>
                <div class="songs">
                    Cosmos<br>
                    <audio class="Songplay" controls>
                        <source src="allsongs/Cosmos.mp3">
                    </audio>
                </div>
                <div class="songs">
                    Digging My Potato<br>
                    <audio class="Songplay" controls>
                        <source src="allsongs/Digging My Potato.mp3">
                    </audio>
                </div>
                <div class="songs">
                    Felt Tip Pen<br>
                    <audio class="Songplay" controls>
                        <source src="allsongs/Felt Tip Pen.mp3">
                    </audio>
                </div>
                <div class="songs">
                    Memory<br>
                    <audio class="Songplay" controls>
                        <source src="allsongs/Memory.mp3">
                    </audio>
                </div>
                <div class="songs">
                    Piano Black<br>
                    <audio class="Songplay" controls>
                        <source src="allsongs/Piano Black.mp3">
                    </audio>
                </div>
                <div class="songs">
                    Pot City<br>
                    <audio class="Songplay" controls>
                        <source src="allsongs/Pot City.mp3">
                    </audio>
                </div>
                <div class="songs">
                    Rain<br>
                    <audio class="Songplay" controls>
                        <source src="allsongs/Rain.mp3">
                    </audio>
                </div>
                <div class="songs">
                    Space Lion<br>
                    <audio class="Songplay" controls>
                        <source src="allsongs/Space Lion.mp3">
                    </audio>
                </div>
                <div class="songs">
                    Spokey Dokey<br>
                    <audio class="Songplay" controls>
                        <source src="allsongs/Spokey Dokey.mp3">
                    </audio>
                </div>
                <div class="songs">
                    Tank!<br>
                    <audio class="Songplay" controls>
                        <source src="allsongs/Tank!.mp3">
                    </audio>
                </div>
                <div class="songs">
                    The Egg and I<br>
                    <audio class="Songplay" controls>
                        <source src="allsongs/The Egg and I.mp3">
                    </audio>
                </div>
                <div class="songs">
                    Too Good Too Bad<br>
                    <audio class="Songplay" controls>
                        <source src="allsongs/Too Good Too Bad.mp3">
                    </audio>
                </div>
                <div class="songs">
                    Waltz for Zizi<br>
                    <audio class="Songplay" controls>
                        <source src="allsongs/Waltz for Zizi.mp3">
                    </audio>
                </div>   
            </div>
        </div>
    </div>
</div>


    <?php 
        include "accessories/cookie.php" 
    ?>

<link rel="stylesheet" type="text/css" href="styles.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.0-rc.1/dist/js.cookie.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="jsActivated/cookieButton.js"></script>
    <script src="jsActivated/morealbums.js"></script>
</body>
</html>