<!DOCTYPE html>


    <form method="POST" action="add.php">

        <label for="title">Book title</label>
        <input type="text" name="title">

        <label for="price">Price</label>
        <input type="number" name="price" min="0" step="0.01">

        <label for="date">Release date</label>
        <input type="number" name="date" step="1">

        <label for="language">Language</label>
        <input type="text" name="language">

        <button type="submit">SEND</button>
        
    </form>


</html>

<?php

/* Connexion à une base MySQL avec l'invocation de pilote */
$dsn = 'mysql:dbname=my_library;host=127.0.0.1';
$user = 'root';
$password = 'BONJOUR2020µ£';

$dbh = new PDO($dsn, $user, $password);


/*
if 
$title = $_POST['title'];
$price = $_post['price'];
$date = $_POST['date'];
$language = $_POST['language'];




*/
