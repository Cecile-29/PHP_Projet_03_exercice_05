<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Projet03 Exercice05</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid col-7 p-3 m-4 border border-warning rounded justify-content-center">
        <div class="row ">
            <h1 class="col-12 text-secondary text-center">PHP Projet03 Exercice05</h1>
            <h2 class="col-12 text-info text-center">Créez une fonction qui retourne une chaîne de caractère et un nombre aléatoire.</h2>
        </div>
        <div class="row border border-primary rounded p-3 m-4 text-secondary justify-content-center">
            <?php
               function returnString(){
                   $num = rand(2, 31);
                   $string = 'toto';
                   $concatStringAndNumber = $num. ' '. $string;
                   return $concatStringAndNumber;
               }
               echo returnString();
            ?>
        </div>
    </div>
</body>
</html>