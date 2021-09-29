<?php

require_once 'functions.php';

$db = getDb();
$safe = safeArray();

echo $safe['name'];
echo $safe['creator'];
echo $safe['genre'];
echo $safe['release-year'];
echo $safe['record-label'];

var_dump($safe);



?>


<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Some Good Albums</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" >
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin >
    <link href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="formstyles.css" />
</head>
<body>

<header>
    <a href="index.php"><h1>Some Good Albums</h1></a>
</header>
<section>
    <form method="post">
        <div>
            <label for="name" >Name: </label>
            <input type="text" id="name" name="name" maxlength="255"  /><br>
        </div>
        <div>
            <label for="creator" >Creator: </label>
            <input type="text" id="creator" name="creator" maxlength="255"  /><br>
        </div>
        <div>
            <label for="release-year" >Release Year: </label>
            <input type="number" id="release-year" name="release-year" maxlength="4"  /><br>
        </div>
        <div>
            <label for="genre" >Genre: </label>
            <input type="text" id="genre" name="genre" maxlength="255"  /><br>
        </div>
        <div>
            <label for="record-label" >Record Label: </label>
            <input type="text" id="record-label" name="record-label" maxlength="255"  /><br>
        </div>
        <div>
            <label for="image-link" >Image URL: </label>
            <input type="text" id="image-link" name="image-link" maxlength="255"  /><br>
        </div>
        <div>
            <label class="hiddenform">Creator: </label>
            <input type="submit" value="Submit your entry!"/>
        </div>
    </form>
</section>

</body>








