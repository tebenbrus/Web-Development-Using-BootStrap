<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Car Record</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-5">Edit Car Record</h1>
        <?php
        include("includes/sqlconnection.php");
        $id = $_GET['id'];
        $sql = "SELECT * FROM cars WHERE id='$id'";
        $result = $conn->query($sql);

        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
        ?>
        <form action="controller.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <div class="form-group">
                <label for="model">Model:</label>
                <input type="text" name="model" value="<?php echo $row['model']; ?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="year">Year:</label>
                <input type="text" name="year" value="<?php echo $row['year']; ?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="color">Color:</label>
                <input type="text" name="color" value="<?php echo $row['color']; ?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" name="price" value="<?php echo $row['price']; ?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="current_image">Current Image:</label><br>
                <img src="uploads/<?php echo $row['image']; ?>" width="100" height="75" alt="<?php echo $row['image']; ?>">
            </div>
            <div class="form-group">
                <label for="new_image">New Image:</label>
                <input type="file" name="image" class="form-control-file">
            </div>
            <button type="submit" name="update_record" class="btn btn-primary">Update Record</button>
        </form>
        <?php
        } else {
            echo "<div class='alert alert-danger'>No record found</div>";
        }
        ?>
    </div>
</body>
</html
