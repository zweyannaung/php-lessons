<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /** save with only one file */
    /*
        echo "I am from server\n<br>";
        echo "<pre>";
        print_r($_FILES);
        if ($_FILES["myUpload"]["error"]>0) {
            header("location:./upLoadFile.php");
        }
        if (!is_dir("mySaveImg")) {
            mkdir("mySaveImg",0777);
        }
        $saveingFolder = "mySaveImg";
        // -----------  not a unique name !!!
        //     $fromUpload = $_FILES["myUpload"]["tmp_name"];
        //     $toUpload = $saveingFolder."/".$_FILES["myUpload"]["name"];
        //  
        // ----------save name with unique name !!!
        $newName = pathinfo($_FILES["myUpload"]["full_path"])["extension"];
        $fromUpload = $_FILES['myUpload']["tmp_name"];
        $toUpload = $saveingFolder."/".uniqid().$_FILES["myUpload"]["" ];

        // move_uploaded_file($fromUpload,$toUpload); // It cannot be use twice
        // var_dump(move_uploaded_file($fromUpload,$toUpload));
        // if(move_uploaded_file($fromUpload,$toUpload)){ //It cannot be use twice
        //     header("location:upLoadFile.php");
        // }
    */
    /** save with multiple files */
        echo "hello I'm from server";
        echo "<pre>";
        print_r($_FILES["myUpload"]) ;
        foreach ($_FILES["myUpload"]["error"] as $key => $value) {
            if ($value !== 0) {
                header("location:./upLoadFile.php");
            }
            
        }
        if (!is_dir("mySaveImg")) {
            mkdir("mySaveImg",0777);
        }
        $saveingFolder = "mySaveImg";
        foreach ($_FILES["myUpload"]["name"] as $key => $value) {
            if (count($_FILES["myUpload"]["name"])>$key) {
                $newName = pathinfo($_FILES["myUpload"]["full_path"][$key])["extension"];
                $fromUpload = $_FILES['myUpload']["tmp_name"][$key];
                $toUpload = $saveingFolder."/".uniqid().".".$newName;
                move_uploaded_file($fromUpload,$toUpload);
            }
            
        }
        header("location:./upLoadFile.php");
     ?>
</body>
</html>