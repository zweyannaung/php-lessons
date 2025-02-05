<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        // var_dump(empty($_POST['from_exchange']));
        if (empty($_POST['exchange_limit'])){
            header('location:index.php');
        };
    ?>
    <p>
     <?=  "i'm from server"; ?> 
    </p>
    <p>
    <?php print_r($_POST) ?> 
    </p>
 
    <p>
        <?php 
            $exchangeLimit = $_POST["exchange_limit"];
            $fCurrency = explode(",",$_POST['from_currency']);
            $tCurrency = explode(",",$_POST['to_currency']);
            $result = round(($exchangeLimit * $fCurrency[1])/$tCurrency[1], 2);
            echo "$fCurrency[0] : $exchangeLimit  ==>>  $tCurrency[0] : $result " ;
        ?>
    </p>
    <button> <a href="./index.php">Go back</a></button>
    <?php 
         $fileName = "mySave.txt";
         $myFile = fopen($fileName, "a");
         fwrite($myFile,"$fCurrency[0] : $exchangeLimit  ==>>  $tCurrency[0] : $result "."\n");
         fclose($myFile);
    ?>      
</body>
</html>