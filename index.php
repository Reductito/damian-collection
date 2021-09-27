<?php
$db = new PDO('mysql:host=db; dbname=damian-collection', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db->prepare("SELECT `name`, `artist`, `release-year`, `genre`, `record-label` FROM `albums`");
$query->execute();
$albums = $query->fetchAll();

$displayalbums = '';

foreach ($albums as $album) {
    $displayalbums .= '<div class="album" style="padding: 10px;"> <p>This album is called ' . $album['name'] . '</p>' .
                      '<p>The creator is ' . $album['artist'] . '</p>' .
                      '<p>The release year is ' . $album['release-year'] . '</p>' .
                      '<p>The genre is ' . $album['genre'] . '</p>' .
                      '<p>Record label - ' . $album['record-label'] . '</p></div>';
}

echo $displayalbums;

?>

