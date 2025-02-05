<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Data</title>
</head>
<body>
    <form action="./uploadDataServer.php" method="post" enctype="multipart/form-data">
        <input type="text" name="fruitName" id="fruitName" placeholder=" fruit name">
        <input type="number" name="fruitPrice" id="fruitPrice" placeholder=" fruit price">
        <label for="fruitRate">fruit's rating:</label>
        <select name="fruitRate" id="fruitRate">
            <option  value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <input type="file" name="fruitImg" id="fruitImg">
        <button type="submit">Add</button>
    </form>
</body>
</html>