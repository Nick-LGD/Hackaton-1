<?php

function redirect($url, $time = 5)
{

    header("Refresh:$time;Url=$url");
}

// Utilisation :
// Refresh au bout de 10 secondes 
redirect("http://localhost:8000/pages/planetAmityVille.php", 120);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planet Mirror Game</title>
</head>

<body>
    
    <div id="container"><canvas height="1050" width="1850"></canvas></div>
    <script type="text/javascript" src="/assets/js/mirror.js"></script>
    
</body>

</html>