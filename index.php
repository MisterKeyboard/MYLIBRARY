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
        </div>
    </section>

</body>

</html>





