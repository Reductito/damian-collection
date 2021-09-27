<?php
$db = new PDO('mysql:host=db; dbname=damian-collection', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db->prepare("SELECT * FROM `albums`");
$query->execute();
$albums = $query->fetchAll();

$displayalbums = '';

foreach ($albums as $album) {
    $displayalbums .= '<div class="album" style="padding: 10px;"> This album is called ' . $album['name'] . '<br>' .
                      'The creator is ' . $album['artist'] . '<br>' .
                      'The release year is ' . $album['release-year'] . '<br>' .
                      'The genre is ' . $album['genre'] . '<br>' .
                      'Label - ' . $album['record-label'] . '</div>';
}

echo $displayalbums;

//
//echo '<pre>';
//echo var_dump($albums);
//echo '</pre>';

