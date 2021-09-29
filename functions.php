<?php

function getDb() : PDO {
    $db = new PDO('mysql:host=db; dbname=damian-collection', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

function retrieveAlbums(PDO $db) : array {
    $query = $db->prepare("SELECT `name`, `artist`, `release-year`, `genre`, `record-label`, `image-link` FROM `albums`");
    $query->execute();
    return $query->fetchAll();
}

function displayAlbums(array $albums) : string {

    if($albums === []) {
        $displayalbums = 'ERROR ERROR ERROR';
    } else {
        $displayalbums = '';
        foreach ($albums as $album) {
            if ($album['name'] === 'Getz/Gilberto') {
                $album['artist'] = 'Stan Getz & Joa&#771;o Gilberto';
            }
            $displayalbums .= '<div class="album"><img src="' . $album['image-link'] . '" alt ="album cover" /><p>' . $album['name'] . '</p>' .
                '<p>Creator - ' . $album['artist'] . '</p>' .
                '<p>Released ' . $album['release-year'] . '</p>' .
                '<p>Genre - ' . $album['genre'] . '</p>' .
                '<p>Label - ' . $album['record-label'] . '</p></div>';
        }
    }
    return $displayalbums;
}
