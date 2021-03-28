<?php

$i = $_GET['idd'];
$t = $_GET["title"];
$p = $_GET["price"];
$r = $_GET["releasedate"];
$l = $_GET["language"];
$a = $_GET["author_id"];

$PDO = new PDO("mysql:host=localhost;dbname=my_library","root","BONJOUR2020µ£");

$sql = "UPDATE book SET id=:i, title=:t, price=:p, releasedate=:r, language=:l, author_id=:a";

$stmt = $PDO->prepare($sql);

$stmt->bindValue('i',$i,PDO::PARAM_INT);
$stmt->bindValue('t',$i,PDO::PARAM_STR);
$stmt->bindValue('p',$i,PDO::PARAM_FLOAT);
$stmt->bindValue('r',$i,PDO::PARAM_INT);
$stmt->bindValue('l',$i,PDO::PARAM_STR);
$stmt->bindValue('a',$i,PDO::PARAM_STR);

$stmt->execute();

header('location:add.php');