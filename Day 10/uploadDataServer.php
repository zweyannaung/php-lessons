<?php 

echo "<pre>";
print_r($_POST);
print_r($_FILES);
// print_r($_POST);

if ($_POST['fruitName'] === "" || $_POST['fruitPrice'] === ""|| $_FILES["fruitImg"]["error"] > 0) {
    header("location:./uploadData.php");
}
?>