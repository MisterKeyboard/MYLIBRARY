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
                    <td>Book title<td>
                    <td>Price<td>
                    <td>Language<td>
                    <td>Release date<td>
                    <td>Author<td>
                    <td>Nationality<td>
                <tr>
            <table>


</body>

</html>





<?php



try{
$PDO = new PDO("mysql:host=localhost;dbname=my_library","root","BONJOUR2020µ£");
/* echo "connection is successfull!"; */


$sql = ('SELECT title, price, language, releasedate, book.id, name ,nationality FROM book LEFT JOIN author ON book.id = author.author_id');


foreach ($PDO->query($sql) as $row) {
    print $row["title"] . "      ";
    print $row["price"] . " ". "€" . "      " ;
    print $row["language"] . "      ";
    print $row["realeasedate"] . "      ";
    print $row["name"] . "      ";
    print $row["nationality"] . "<br/>";
} 
$PDO = null;
}
catch (PDOException $pe){
    echo "Erreur is: " .$pe->getMessage();
}



