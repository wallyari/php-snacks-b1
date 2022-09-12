<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-snacks-b1</title>
</head>
<body>
<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->
<?php 
    $randomNumb = [ ];
    while (count($randomNumb) < 15) {
        $randomNumber = rand(1, 15);
        
        if(!in_array($randomNumb, $randomNumb)) {
            $randomNumb[ ] += $randomNumb; 
        }
    }

    var_dump($randomNumbe);
    ?>
    
</body>
</html>

<!-- rand ( int $min , int $max ): int -->