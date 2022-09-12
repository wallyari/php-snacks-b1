<!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, 
Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php
$classe = [
    [
        'name' => 'Marco',
        'lastname' => 'Fontana',
        'voti' => [ 5, 6, 7, 7, 4, 8 ,7]
    ],
    [
        'name' => 'Andrea',
        'lastname' => 'Rossi',
        'voti' => [ 5, 6, 3, 5, 5, 8 ,7]
    ],
    [
        'name' => 'Michela',
        'lastname' => 'Bianchi',
        'voti' => [ 5, 6, 9, 5, 10, 7, 8]
    ],
        'name' => ' Giovanna',
        'lastname' => 'Ricci',
        'voti' => [ 4, 6, 7, 5, 10, 7, 8]
    
    ];


    for ($i=0; $i < count($classe) ; $i++) { 
        $alunno = $classe[$i];
        $mediaVoti = array_sum($alunno['voti']) / count($alunno['voti']) ;
        echo $alunno['name'] . ' ' . $alunno['lastname'] . ' | ' . 'voti:' . ' ' . number_format($mediaVoti, 2) . '</br>';
    
    }
 ?>


