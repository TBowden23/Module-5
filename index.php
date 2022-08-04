<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Rare Cakes</title>
        <link href="stylesheets/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <section>
            <img class="logo" src="images/Screen Shot 2022-07-29 at 12.29.08 PM.png">
        </section>
        
        <a href="intro.php">
            <img class="start" src="images/Screen Shot 2022-07-29 at 1.19.51 PM.png">
        </a>
        <footer>
        Dat's all Folks
             &copy; 
            <?php
                $copyYear = 2020; // Set your website start date
                $curYear = date('Y'); // Keeps the second year updated
                echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
            ?> Copyright Tremarica LLC
        </footer>
    </body>
       
    