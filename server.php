<?php 
    $text = $_GET['text'];
    $word = $_GET['censor_text']
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords Server</title>
</head>
<body>
    <h1>PHP Badwords</h1>

    <h2>Paragrafo inserito e sua lunghezza:</h2>
    <span>
    <?php
        echo $text . " " . strlen($text);
    ?>
    </span>

    <h2>Paragrafo inserito (con parola scelta censurata) e sua lunghezza:</h2>
    <span>
    <?php
        echo str_replace($word, '***', $text) . " " . strlen($text);
    ?>
    </span>
</body>
</html>