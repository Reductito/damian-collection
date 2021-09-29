<?php

require_once 'functions.php';

$db = getDb();
$albums = retrieveAlbums($db);
shuffle($albums);
$displayalbums = displayAlbums($albums);

?>
<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Some Good Albums</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="styles.css" />
</head>
<body>

    <header>
        <a href="form.php" ><button type="button" class="hidden" >+</button></a><a href="index.php"><h1>Some Good Albums</h1></a><a href="form.php" ><button type="button" >+</button></a>
    </header>

    <section>
        <?php echo $displayalbums;?>
    </section>

</body>

</html>