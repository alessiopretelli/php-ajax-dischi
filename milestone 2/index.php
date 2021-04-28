<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;1,200;1,300&family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP dischi</title>
</head>
<body>
    <div id="app">
        <?php

            include __DIR__ . '/partials/header.php';

        ?>

        <?php

            include __DIR__ . '/partials/main.php';

        ?>
    </div>

    <script src="main.js"></script>
</body>
</html>