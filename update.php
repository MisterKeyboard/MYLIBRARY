<?php
$id = $_GET["idd"];


$PDO = new PDO("mysql:host=localhost;dbname=my_library","root","BONJOUR2020µ£");

$sql = "SELECT * FROM book WHERE id = ?";

$stmt = $PDO->prepare($sql);

$stmt->bindValue(1,$id, PDO::PARAM_INT);

$stmt->execute();

$row = $stmt ->fetch(PDO::FETCH_OBJ);

if(!$row){
    header("location:add.php");
}

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
        <div class="form">

            <h2>In order to edit a book,please fill in each of the fields:<h2>

            <form method="GET" action="save.php">

                <input type="hidden" name="idd" value="<?= $id ?>">

                <label for="title">Book title</label>
                <input type="text" name="title" value="<?=$row->title?>">

                <label for="price">Price</label>
                <input type="number" name="price" min="0" step="0.01" value="<?=$row->price?>">

                <label for="releasedate">Release date</label>
                <input type="number" name="releasedate" step="1" value="<?=$row->releasedate?>">

                <label for="language">Language</label>
                <input type="text" name="language" value="<?=$row->language?>">

                <label for="author">Choose an author in the list</label>
                    <select name="author_id" id="author">



                    <?php
                        foreach ($PDO->query('SELECT author_id, name FROM author') as $data) {
                    ?>
                            <option value="<?php echo $data['author_id']; ?>"><?php echo $data['name']; ?></option>;
                    <?php
                    }

                    ?>
                    </select>

                    <br/>

                    <button class="btnedit" type="submit">Edit</button>

            </form>

        </div>
    </body>
</html>
