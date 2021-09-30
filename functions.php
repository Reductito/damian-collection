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

/**
 * Takes data from $_POST and cleanses the special characters
 *
 * @param1 array $_POST
 *
 * @return array returns an array where the keys match the database fields but special characters in the values are cleansed
 */
function safeArray(array $post) : array {
    $safearray = [];
    if(count($post) == 0) {
        $safearray = ['Please fill out all fields correctly.'];
    }
    foreach ($post as $field => $value) {
        $safearray[$field] = htmlspecialchars($value);
    }
    return $safearray;
}

/**
 * Adds an entry to the database using cleansed user submitted form data
 *
 * @param1 PDO $db chosen database
 * @param2 $safe cleansed version of user form data stored in post
 *
 * @return array adds the array into the database
 */
function addAlbum(PDO $db, array $safe) : array {

    $query = $db->prepare("INSERT INTO `albums` (`name`, `creator`, `release-year`, `genre`, `record-label`, `image-link`) VALUES (:name, :creator, :year, :genre, :label, :link);");
    $query->bindParam(':name', $safe['name']);
    $query->bindParam(':creator', $safe['creator']);
    $query->bindParam(':year', $safe['release-year']);
    $query->bindParam(':genre', $safe['genre']);
    $query->bindParam(':label', $safe['record-label']);
    $query->bindParam(':link', $safe['image-link']);
    $query->execute();

    return $query->fetchAll();
}

/**
 * Checks if the entry passes validation before adding to database
 *
 * @param PDO $db used in addAlbum function to add to database
 * @param array $safe cleansed user form data collected from post
 */
function checkAlbum(PDO $db, array $safe) {
    $options = array ('options' => array('min_range' => 0, 'max_range' => 2021));

    if (count($safe) != 6) {
        header("Location: form.php?error#error");
    } elseif ($safe['name'] == '' or strlen($safe['name']) > 255 ) {
        header("Location: form.php?error#error");
    } elseif ($safe['creator'] == '' or strlen($safe['creator']) > 255 ) {
        header("Location: form.php?error#error");
    } elseif ($safe['release-year'] == '' or strlen($safe['release-year']) > 4 or filter_var($safe['release-year'], FILTER_VALIDATE_INT, $options) == 0 ) {
        header("Location: form.php?error#error");
    } elseif ($safe['genre'] == '' or strlen($safe['genre']) > 255 ) {
        header("Location: form.php?error#error");
    } elseif ($safe['record-label'] == '' or strlen($safe['record-label']) > 255 ) {
        header("Location: form.php?error#error");
    } elseif ($safe['image-link'] == '' or strlen($safe['image-link']) > 255 ) {
        header("Location: form.php?error#error");
    } else {
        addAlbum($db, $safe);
        header("Location: index.php?submitted");
    }
}

/**
 * Displays error message if user data does not pass validation
 *
 * @param array $get checks get to see if an error has been declared. If it has, displays error message
 */
function goToError(array $get) {
    if(isset($get['error'])) {
        echo '<p id="error" >Fields entered incorrectly. Please try again.</p>';
    }
}

