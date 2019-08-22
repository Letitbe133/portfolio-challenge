<?PHP
    require_once('main.php'); // require photos array
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/style.css">
    <title>Portfolio PHP</title>
</head>
<body>
    <h1>Discover the world through my lense !</h1>
    <p>Here are my <?php echo count($photos); ?> latest photos !</p>
    <div class="cards-container">
        <?php
        //  loop through array and for each photo display a card
            foreach ($photos as $photo) {
        ?>
            <div class="card">
                <a href=<?php echo $photo; ?> target="_blank" rel="noopener noreferrer">
                    <img src=<?php echo $photo; ?> alt="">
                </a>
            </div>

        <?php
            }
        ?>
    </div>
</body>
</html>