<?php
    require('index.php');
    $PDO = new PDO("mysql:host=localhost;dbname=my_library","root","BONJOUR2020µ£");

?>


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
            <button id="btnPopup" class="btnPopup">Add a book</button>

            <div id="overlay" class="overlay">

                <div id="popup" class="popup">


                    <h2>In order to add a book,please fill in each of the fields:<span id="btnClose"
                        class="btnClose">&times;</span>
                    <h2>

                    <form method="GET" action="add.php">

                        <label for="title">Book title</label>
                        <input type="text" name="title">

                        <label for="price">Price</label>
                        <input type="number" name="price" min="0" step="0.01">

                        <br />

                        <label for="releasedate">Release date</label>
                        <input type="number" name="releasedate" step="1">

                        <label for="language">Language</label>
                        <input type="text" name="language">

                        <br />

                        <label for="author">Choose an author in the list</label>
                        <select name="author_id" id="author">

                            <?php
                            foreach ($PDO->query('SELECT author_id, name FROM author') as $data) {
                        ?>
                                    <option value="<?php echo $data['author_id']; ?>">
                                        <?php echo $data['name']; ?>
                                    </option>;
                                    <?php
                        }

                        ?>
                        </select>

                        <br />

                        <button class="add" type="submit">ADD</button>
                    </form>
                </div>
            </div>
            <script src="script.js"></script>
        </section>
    </body>
</html>

<?php


if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (empty($_GET["title"]) || empty($_GET["price"]) || empty($_GET["releasedate"]) || empty($_GET["language"])){ 
    echo 'Veuillez remplir tous les champs.'; 
    }else {
        $title = $_GET["title"];
        $price = $_GET["price"];
        $releasedate = $_GET["releasedate"];
        $language = $_GET["language"];
        $author_id = $_GET["author_id"];

        $PDO = new PDO("mysql:host=localhost;dbname=my_library","root","BONJOUR2020µ£");



        $sql = $PDO->prepare("INSERT INTO book (title, price, releasedate, language, author_id) VALUES (:title, :price, :releasedate, :language, :author_id)");
        $sql->execute(array(":title" => $title, ":price" => $price, ":releasedate" => $releasedate, ":language" => $language, ":author_id" => $author_id ));
    }
    
}