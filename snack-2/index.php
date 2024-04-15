<?php

/* 

Con un form passare come parametri GET name, mail e age e verificare
che name sia più lungo di 3 caratteri, 
che mail contenga un punto e una chiocciola 
e che age sia un numero. 

Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

*/

if (isset($_GET['name'], $_GET['email'], $_GET['age'])) {


    $name = $_GET['name'];
    $email = $_GET['email'];
    $age = $_GET['age'];

    if (strlen($name) <= 3 || !filter_var($email, FILTER_VALIDATE_EMAIL) || !is_numeric($age)) {
        echo "Accesso negato";
    } else {
        echo "Accesso riuscito";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <br>
        <label for="age">Age:</label>
        <input type="text" id="age" name="age">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>

</html>