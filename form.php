<?php

    require 'classes/classes.php';
    require 'classes/sign.php';
    require 'include/db.php';
    // $_SESSION['username'] = $userinfo['username'];
    // $_SESSION['ID'] = $userinfo['ID'];
    // $_SESSION['score'] = $userID;
    
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
        <h1 class="main-title">Votre questionnaire</h1>    
        <div class="form">
            <form action="" method="post">  
                <?php
                
                    $qcm = new qcm();

                    $q1 = new Question("Quelle est la capitale du Chili ?");
                    $q1->addAnswer(new Answer('Chili','Mexico', false));  
                    $q1->addAnswer(new Answer('Chili','Santiago', Answer::RIGHT_ANSWER)); 
                    $q1->addAnswer(new Answer('Chili','Bueno Aires', false)); 
                    $q1->addAnswer(new Answer('Chili','Châtellerault', false)); 
                    $q1->setExplanation("Santiago est la capitale du Chili depuis..");
                    

                    $q2 = new Question("Quelle est la capitale du Maroc ?");
                    $q2->addAnswer(new Answer('Maroc','Casablanca', false));  
                    $q2->addAnswer(new Answer('Maroc','Rabat', Answer::RIGHT_ANSWER)); 
                    $q2->addAnswer(new Answer('Maroc','Alger', false)); 
                    $q2->addAnswer(new Answer('Maroc','Poitiers', false)); 
                    $q2->setExplanation("Rabat est la capitale du Maroc depuis..");

                    $qcm->addQuestion($q1);
                    
                    $qcm->setAppreciation(array('0-10' => 'Pas top du tout ...',
                    '10-20' => 'Très bien ...'));
                    $qcm->generate();
                    
                    
                ?>
            </form>
        </div>
        
    </div>
    <script src="script/script.js"></script>
</body>
</html>