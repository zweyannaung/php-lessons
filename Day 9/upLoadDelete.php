<?php
    print_r($_GET["deleteName"]);
    $mySavingImage = "mySaveImg";
    if (unlink("mySaveImg"."/".$_GET["deleteName"])) {
        header("location:./upLoadFile.php");
    }

