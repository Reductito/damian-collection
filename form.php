<?php

require_once 'functions.php';

$db = getDb();
$post = $_POST;
$get = $_GET;
$safe = safeArray($post);

if (isset($get['submit'])) {
    checkAlbum($db, $safe);
}


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
    <link rel="stylesheet" href="formStyles.css" />
</head>
<body>

<header>
    <a href="index.php"><h1>Some Good Albums</h1></a>
</header>
<section>
    <form method="post" action="form.php?submit">
        <div>
            <label for="name" >Name: </label>
            <input type="text" id="name" name="name" maxlength="255" required /><br>
        </div>
        <div>
            <label for="creator" >Creator: </label>
            <input type="text" id="creator" name="creator" maxlength="255" required /><br>
        </div>
        <div>
            <label for="release-year" >Release Year: </label>
            <input type="text"  id="release-year" name="release-year" required />
        </div>
        <div>
            <label for="genre" >Genre: </label>
            <input type="text" id="genre" name="genre" maxlength="255" required /><br>
        </div>
        <div>
            <label for="record-label" >Record Label: </label>
            <input type="text" id="record-label" name="record-label" maxlength="255" required /><br>
        </div>
        <div>
            <label for="image-link" >Image URL: </label>
            <input type="url" id="image-link" name="image-link" maxlength="255" required /><br>
        </div>
        <div>
            <label class="hiddenform">Creator: </label>
            <input type="submit" value="Submit your entry!"/>
        </div>
        <div><?php goToError($get);?>
        </div>
    </form>
</section>

</body>








