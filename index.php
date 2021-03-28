<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My library</title>
    <link rel="icon" href="img/book-shelf.png">
    <link rel="stylesheet" href="./CSS/style.css">
</head>

<body>


    <section>

        <div class="welcome">
            <h1>WELCOME IN MY LIBRARY</h1>
            

            <table>
                <tr>
                    <th>Id</th>
                    <th>Book title</th>
                    <th>Price</th>
                    <th>Language</th>
                    <th>Release date</th>
                    <th>Author</th>
                    <th>Nationality</th>
                </tr>



<?php


$PDO = new PDO("mysql:host=localhost;dbname=my_library","root","BONJOUR2020µ£");
/* echo "connection is successfull!"; */


$sql = ('SELECT id, title, price, language, releasedate, name ,nationality FROM book LEFT JOIN author ON book.author_id = author.author_id');


foreach ($PDO->query($sql) as $row) : ?>
    <tr>
        <td><?= $row["id"] ?></td>
        <td><?= $row["title"] ?></td>
        <td><?= $row["price"] . " €" ?></td>
        <td><?= $row["language"]?></td>
        <td><?= $row["releasedate"]?></td>
        <td><?= $row["name"]?></td>
        <td><?= $row["nationality"]?></td>
        <td><a href="del.php?idd=<?= $row["id"] ?>">Delete</a></td>
        <td><a href="update.php?idd=<?= $row["id"] ?>">Edit</a></td>
    </tr>
    <?php endforeach; ?>
</table>


</body>


</html>

