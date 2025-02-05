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
    ?>
     <form action="./exchange_server.php" method="post">
        <input type="number" name="exchange_limit" id="">
        <br>
        <select name="from_currency">
            <!-- <option value="volvo">Volvo</option> -->
           <?php foreach($content as $key => $value): ?>
                <option value=<?= "$key,$value" ?> ><?= $key ?></option>
            <?php endforeach ?>
        </select>
        <select name="to_currency">
            <!-- <option value="volvo">Volvo</option> -->
           <?php foreach($content as $key => $value): ?>
                <option value=<?= "$key,$value" ?> ><?= $key ?></option>
            <?php endforeach ?>
        </select>
        <button type="submit">convert</button>
    </form>
    <?php 
        $myArr = [];
       if (file_exists("mySave.txt")) {
        $myFile = fopen("mySave.txt", "r");
        while (!feof($myFile)) {
            array_unshift($myArr, fgets($myFile));
            // echo fgets($myFile)."<br>";
        }
        fclose($myFile);
        foreach ($myArr as $line) {echo"$line <br>";}
       }
    ?>
</body>
</html>