<?php

/**
 * Returns a PDO from the specified database
 *
 * @param1 PDO linked to correct database
 *
 * @return PDO creates new PDO with link to database
 */
function getDb() : PDO {
    $db = new PDO('mysql:host=db; dbname=damian-collection', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

/**
 * Takes the PDO db and queries selected fields
 *
 * @param PDO $db database
 *
 * @return array returns an array of arrays, each containing declared fields from database
 */
function retrieveAlbums(PDO $db) : array {
    $query = $db->prepare("SELECT `name`, `creator`, `release-year`, `genre`, `record-label`, `image-link` FROM `albums`");
    $query->execute();
    return $query->fetchAll();
}

/**
 * Takes the array of arrays and turns each sub-array into a <div>
 *
 * @param array $albums
 *
 * @return string returns each sub-array as a self-contained <div> containing html concatenated with array entries
 */
function displayAlbums(array $albums) : string {
    $displayalbums = '';
    if(count($albums) == 0 )  {
        $displayalbums = 'Error - cannot display albums. Please try again later.';
    }
    foreach ($albums as $album) {
        if ($album['name'] === 'Getz/Gilberto') {
            $album['creator'] = 'Stan Getz & Joa&#771;o Gilberto';
        }
        $displayalbums .= '<div class="album"><img src="' . $album['image-link'] . '" alt ="album cover" />' .
            '<p>' . $album['name'] . '</p>' .
            '<p>Creator - ' . $album['creator'] . '</p>' .
            '<p>Released ' . $album['release-year'] . '</p>' .
            '<p>Genre - ' . $album['genre'] . '</p>' .
            '<p>Label - ' . $album['record-label'] . '</p></div>';
    }
    return $displayalbums;
}

function safeArray() : array {
    $safearray = [];

    foreach ($_POST as $field => $value) {
        $safearray[$field] = htmlspecialchars($value);
    }
    return $safearray;
}



