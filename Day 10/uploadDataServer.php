<?php 

echo "<pre>";
print_r($_POST);
print_r($_FILES);
// print_r($_POST);

if ($_POST['fruitName'] === "" || $_POST['fruitPrice'] === ""|| $_FILES["fruitImg"]["error"] > 0) {
    header("location:./uploadData.php");
}

$myConnection = mysqli_connect("localhost","zweyannaung","zweyannaung1948","mydbone");
if (!$myConnection){
    echo mysqli_connect_errno();
}
$inputSql = "Select * from fruit where fruitName = '".$_POST['fruitName']."'";
$result = mysqli_query($myConnection, $inputSql);
?>