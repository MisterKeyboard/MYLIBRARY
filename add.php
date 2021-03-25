<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My library</title>
    <link rel="icon" href="img/book-shelf.png">
    <link rel="stylesheet" href="./CSS/style2.css">
</head>

<body>
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

    </body>
</html>

<?php

/*
if ($server['REQUEST_METHOD'] === 'POST') {
    if (empty($_POST["title"]) || empty($_POST["price"]) || empty($_POST["releasedate"]) || empty($_POST["language"])){ 
        echo 'Veuillez remplir tous les champs.'; 
    }else {
        $title = $_POST["title"];
        $price = $_post["price"];
        $date = $_POST["releasedate"];
        $language = $_POST["language"];

        $sql= $PDO->prepare("INSERT INTO book (title, price, releasedate, language)VALUES (:title, :price, :date, :language)");

        $sql->execute(array(':title' => $title, ':price' => $title, ':date' => $date, ':language' => $language));
    }
}*/






