<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./upLoadServer.php" method="post" enctype="multipart/form-data">
        <input type="file" name="myUpload[]" multiple id="myUpload">
        <button type="submit">add</button>
    </form>
    <div>
        <?php 
            $mySavingImage = scandir("mySaveImg");
            echo "<pre>";
            // print_r($mySavingImage);
            
        ?>
        <div style="display: flex;flex-direction:row;gap:5px;flex-wrap:wrap;">
            <?php foreach($mySavingImage as $img): ?>
                <?php if ($img != "."&& $img != ".."): ?>
                    <img style=" height: 300px; width:250px;object-fit:cover;" src="mySaveImg/<?= $img ?>" alt="">
                    <a href="./upLoadDelete.php?deleteName=<?= $img ?>"><button>delete</button></a>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
            
    </div>
</body>
</html>