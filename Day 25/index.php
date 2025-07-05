<?php
require_once "router/web.php";
require_once "controller/functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= asset("css/output.css") ?>" rel="stylesheet">
    <title>Document</title>
</head>
<body>
   <?php
    require_once "router/web.php";
    require_once "controller/functions.php";
    $path = $_SERVER['PATH_INFO'] ?? '/';
    $mypath = $routes[$path] ?? $routes['/not_found'];
    if ($mypath != "index" and $mypath != "not_found") {
        require_once __DIR__."/views/". $mypath . ".php";
    }
    call_user_func($mypath);
       
    ?>
</body>
</html>


<?php
/*
require_once "router/web.php";
require_once "controller/functions.php";
// echo "<pre>";
$path = $_SERVER['PATH_INFO'] ?? '/';
// echo $path."\n";
// echo $routes[$path] ?? 'not_found';
echo "\n";

$mypath = $routes[$path] ?? $routes['/not_found'];
// echo __DIR__."/views/". $mypath . ".php"."\n";
// echo "views/".$routes[$path] ?? $routes['/not_found'].".php";
if ($mypath != "not_found") {
    require_once __DIR__."/views/". $mypath . ".php";
}
// echo "\n";
call_user_func($mypath);

    /* for http css location **/
// asset("css/output.css");
// echo "\n";
// echo asset("css/output.css");


?>
