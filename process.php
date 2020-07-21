<?php 

session_start();

$mysqli = new mysqli('localhost','root','','pro_network')or die(mysqli_error($mysqli));

$id = 0;
$update = false;
$Product_ID = '';
$Product_Name ='';
$Product_Detail ='';
$Product_Price ='';

if (isset($_POST['save'])){
    $Product_ID = $_POST['Product_ID'];
    $Product_Name = $_POST['Product_Name'];
    $Product_Detail = $_POST['Product_Detail'];
    $Product_Price = $_POST['Product_Price'];

    $mysqli->query("INSERT INTO `product_tb`(`Product_ID`, `Product_Name`, `Product_Detail`, `Product_Price`) VALUES ('$Product_ID', '$Product_Name', '$Product_Detail', '$Product_Price')")or die($mysqli->error);

    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "success";

    header("location: product.php");
}

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM `product_tb` WHERE `Product_ID` ='$id'")or die($mysqli->error());

    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";

    header("location: product.php");
}

if (isset($_GET['edit'])){
     $id = $_GET['edit'];
     $update = true;
     $result = $mysqli->query("SELECT * FROM `product_tb` WHERE `Product_ID` = '$id' ")or die($mysqli->error());
    if (count($result) == 1){
     $row = $result->fetch_array();
     $Product_ID = $row['Product_ID'];
    $Product_Name = $row['Product_Name'];
    $Product_Detail = $row['Product_Detail'];
    $Product_Price = $row['Product_Price'];

    }
 
}

if(isset($_POST['update'])){
    $Product_ID = $_POST['Product_ID'];
    $Product_Name = $_POST['Product_Name'];
    $Product_Detail = $_POST['Product_Detail'];
    $Product_Price = $_POST['Product_Price'];

    $mysqli->query("UPDATE `product_tb` SET `Product_ID` = '$Product_ID', `Product_Name` = '$Product_Name', `Product_Detail` = '$Product_Detail', `Product_Price` = '$Product_Price' WHERE `product_tb`.`Product_ID` = '$Product_ID';") or die($mrsqli->error);

    $_SESSION['message'] = "Record has been updated!";
    $_SESSION['msg_type'] = "warning";

    header('location: product.php');
}


?>