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

            <table border = "1px" >
                <tr>
                    <th>Book title</th>
                    <th>Price</th>
                    <th>language</th>
                    <th>Release date</th>
                    <th>Author</th>
                    <th>Nationality</th>
                </tr>

                <a href="add.php">Ajouter<a>
                    
                    <aside id="modal1">
                        <

</body>

</html>





<?php



try{
$PDO = new PDO("mysql:host=localhost;dbname=my_library","root","BONJOUR2020µ£");
/* echo "connection is successfull!"; */


$sql = ('SELECT title, price, language, releasedate, id, name ,nationality FROM book LEFT JOIN author ON book.author_id = author.author_id');


foreach ($PDO->query($sql) as $row) {
    echo "<tr><td>" .
    $row["title"] . "</td><td>" .
    $row["price"] . " €" . "</td><td>" .
    $row["language"] . "</td><td>".
    $row["releasedate"] . "</td><td>".
    $row["name"] . "</td><td>".
    $row["nationality"] . "</td></tr>";
} 
echo "</table>";
$PDO = null;
}
catch (PDOException $pe){
    echo "Erreur is: " .$pe->getMessage();
}



