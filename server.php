<?php 
    $text = $_GET['text'];
    $censor = $_GET['censor_text'];
    $censoredWord = ("***");
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

    <h3>
        The insert text is: <br>
        <?php echo $text?> <br>
        whit length <?php echo strlen($text)?>
    </h3>
    

    <h2>
        You write a censor word
    </h2>
    <span>
        <h3>
            <?php
                echo $censoredWord. " ";
                $newWord = str_replace($censor, $censoredWord, $text);
                    echo $newWord. " whit length " . strlen($newWord);
            ?>
        </h3>
    </span>
</body>
</html>