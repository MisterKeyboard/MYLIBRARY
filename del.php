<?php

$id = $_GET["idd"];


$PDO = new PDO("mysql:host=localhost;dbname=my_library","root","BONJOUR2020µ£");

$sql2 = "DELETE FROM book where id = ?";

$stmt = $PDO->prepare($sql2);

$stmt->bindValue(1,$id, PDO::PARAM_INT);

$stmt->execute();

header('location:add.php');

