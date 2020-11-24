<?php
$text1 = 'Bien entendu seize...';
$test2 = 'pas vingt'; 
function test($string) {
    return $string;
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP4 exo1</title>
</head>
<body>
    <div>
        Le carré de 4 est <?php echo test($text1)?>
    </div>
    <div>
        Le carré n'est pas <?php echo $test2?>
    </div>
    
    
</body>
</html>