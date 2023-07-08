<!-- Profile page, for the user to modify their data after logged in -->
<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
    <title>Your Profile</title>
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

    <?php
        include "account/editDelete.php";
    ?>

    <?php 
        include "accessories/cookie.php" 
    ?>

<link rel="stylesheet" type="text/css" href="styles.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.0-rc.1/dist/js.cookie.min.js"></script>
    <script src="jsActivated/cookieButton.js"></script>

    <?php
        include "account/errormessage.php";
    ?>

</body>
</html>