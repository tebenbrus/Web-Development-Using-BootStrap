<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Records</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<style>
    body {
            background-color: #f5f5f5;
            color: #333;
            font-family: 'Arial', sans-serif;
        }
        
        .container {
            margin: 50px auto;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            background-color: #fff;
        }
        
        h1 {
            color: #007bff;
        }
        
        img {
            border-radius: 5px;
        }
</style>
<body>
    <div class="container">
        <h1 class="text-center mt-5">Car Records</h1>
        <?php
        session_start(); 
        include("includes/sqlconnection.php");
        if(isset($_SESSION['status']) && $_SESSION !='') {
            echo '<div class="alert alert-success">' . $_SESSION['status'] . '</div>';
            unset($_SESSION['status']);
        }
        ?>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Model</th>
                    <th>Year</th>
                    <th>Color</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $sql ="SELECT * FROM cars order by id";
            
            $result = $conn->query($sql);
            
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    echo "
                    <tr>
                        <td>{$row['id']}</td>
                        <td>{$row['model']}</td>
                        <td>{$row['year']}</td>
                        <td>{$row['color']}</td>
                        <td>{$row['price']}</td>
                        <td><img src='uploads/{$row['image']}' width='100' height='75' alt='{$row['image']}'></td>
                        <td>
                            <a href='edit.php?id={$row['id']}' class='btn btn-primary'>Edit</a>
                            <a href='controller.php?id={$row['id']}' class='btn btn-danger'>Delete</a>
                        </td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='7' class='text-center'>No records found</td></tr>";
            }
            ?>
            </tbody>
        </table>
        <form action="insert.php" method="POST">
            <button type="submit" name="add_record" class="btn btn-success">Add New Record</button>
        </form>
    </div>
</body>
</html>