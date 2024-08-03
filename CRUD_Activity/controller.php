<?php
session_start();
include("includes/sqlconnection.php");

// Insert Operation
if(isset($_POST['save_record'])){
    $model = $_POST['model'];
    $year = $_POST['year'];
    $color = $_POST['color'];
    $price = $_POST['price'];
    $image =$_FILES["image"]["name"];
    
    $sql = "INSERT INTO cars (model, year, color, price, image) VALUES ('$model', '$year', '$color', '$price', '$image')";

    if ($conn->query($sql) === TRUE) {
        move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/".$_FILES["image"]["name"]);
        $_SESSION['status'] ="Record Insert Successfully";
        header('location:view.php');
    } else {
        $_SESSION['status'] ="Error: Insert Failed.....";
        header('location:view.php');
    }
    $conn->close();
}

// Update Operation
if(isset($_POST['update_record'])){
    $id = $_POST['id'];
    $model = $_POST['model'];
    $year = $_POST['year'];
    $color = $_POST['color'];
    $price = $_POST['price'];
    $image_new =$_FILES["image"]["name"];
    $image_old =$_POST['image_old'];

    // Handle image upload if a new image is provided
    if($image_new != '') {
        $update_image=$image_new;
    } else {
        $update_pic=$pic_old;
    }
    echo"$update_image";
      $sql ="UPDATE studinfo SET fullname ='$studname', contact ='$contact', email ='$email', pic='$update_pic' WHERE id='$id'";
      $sql = "UPDATE cars SET model = '$model' , year ='$year', color='$color', price='$price', image='$image_new' WHERE id='$id'";

    if($conn->query($sql) === TRUE){
        move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/".$_FILES["image"]["name"]);
        $_SESSION['status']="Record Update Successfully";
        header('location:view.php');
    } else {
        $_SESSION['status'] ="Error: Update Failed.....";
        header('location:view.php');
    }
    $conn->close();
}

// Delete Operation
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT image FROM cars WHERE id='$id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $image = $row['image'];

    $sql_delete = "DELETE FROM cars WHERE id ='$id'";

    if($conn->query($sql_delete) === TRUE){
        // Delete the associated image file from the uploads folder
        unlink("uploads/$image");

        $_SESSION['status'] ="Record Deleted Successfully";
        header('location:view.php');
    } else {
        $_SESSION['status'] ="Deletion Failed.....";
        header('location:view.php');
    }
    $conn->close();
}
?>
