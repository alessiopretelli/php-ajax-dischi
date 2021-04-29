<?php

    require 'db.php';

    if (!empty($_GET['authorsinput'])) { // filtro autore
        $authorslist = $_GET['authorsinput'];
        $authors = [];

        if ($authorslist == true) {

            foreach($database as $data) {

                if(!in_array($data['author'], $authors)) {
                    $authors[] = $data['author'];
                }

            }

        }

        header('Content-Type: application/json');

        echo json_encode($authors);    

    } elseif (!empty($_GET['selectauthor'])) { // selettore brano per autore
        $selectauthor = $_GET['selectauthor'];
        $songs = [];

        if ($selectauthor == 'All') {

            header('Content-Type: application/json');

            echo json_encode($database);    
    
        } else {

            foreach($database as $song) {

                if ($song['author'] == $selectauthor) {
                    $songs[] = $song;
                }

            }

            header('Content-Type: application/json');

            echo json_encode($songs);    
    
        }

    } else {

        header('Content-Type: application/json');

        echo json_encode($database);    

    }

?>