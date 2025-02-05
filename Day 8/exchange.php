<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $content =  (json_decode(file_get_contents("http://forex.cbm.gov.mm/api/latest")) -> rates);
        // print_r($content);
        // print_r ($content);
        // echo ($content-> USD);
        foreach ($content as $key => $value) {
            echo $key, $value;
        }
    ?>

</body>
</html>
