
<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php

    if (!empty($_GET['name']) && !empty($_GET['mail']) && !empty($_GET['age'])) {

    $name = $_GET['name'];
    $email = $_GET['mail'];
    $age = $_GET['age'];
        
        if(strlen($name) > 3 && strpos($email, '@') !== false && strpos($email, '.') !== false && is_numeric($age) === true){
            echo "Accesso riuscito<br>";
        } else {
            echo "Accesso negato <br>";
        }
    } else {
    
        echo "Inserisci tutti i dati <br>";
    
    }

?>