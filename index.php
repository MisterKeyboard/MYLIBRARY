<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My library</title>
    <link rel="icon" href="img/book-shelf.png">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>


    <section>


        <h1>WELCOME IN MY LIBRARY</h1>
        <form method="POST" action="add.php">

            <label for="title">Book title</label>
            <input type="text" name="title">

            <label for="price">Price</label>
            <input type="number" name="price" min="0" step="0.01">

            <label for="date">Release date</label>
            <input type="number" name="date" step="1">


        </form>
    </section>

</body>

