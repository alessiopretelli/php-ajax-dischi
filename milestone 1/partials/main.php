<main>

<?php

    include __DIR__ . '/db.php';


    foreach ($database as $song) {

        echo "<div class='card'>" .
        "<img src='" .$song['poster'] ."'>" .
        "<h3>" . $song['title'] . "</h3>" .
        "<p>" . $song['author'] . "</p>" .  
        "<p>" . $song['year'] . "</p>" .    
        "</div>";

    }

?>

</main>