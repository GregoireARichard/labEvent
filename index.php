<?php
    require 'classes/classes.php';
    require 'classes/sign.php';
    require 'include/db.php';

    $sign = new Sign();
    $sign->connect();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css">
    <title>Form Maker</title>
</head>
<body>
    <div class="main-container">       
        <div class="sign">
            <form action="" method="post">
                <label for="name">Entrez votre nom</label>
                <input type="text" name="username">
                <input type="submit" name="submitSign" value="envoyer" class="submit">
            </form>     
        </div>
        
    </div>
    <script src="script/script.js"></script>
</body>
</html>