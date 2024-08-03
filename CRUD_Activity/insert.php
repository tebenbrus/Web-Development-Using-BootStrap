<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Car</title>
    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>
<style>
    body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            background-color: #fff;
        }
</style>

<body>
    <div class="container">
        <h1 class="text-center mt-3 mb-4 font-weight-bold">Add New Car</h1>
        <form action="controller.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="model" class="font-weight-bold">Model:</label>
                <input type="text" name="model" class="form-control shadow-sm">
            </div>
            <div class="form-group">
                <label for="year" class="font-weight-bold">Year:</label>
                <input type="text" name="year" class="form-control shadow-sm">
            </div>
            <div class="form-group">
                <label for="color" class="font-weight-bold">Color:</label>
                <input type="text" name="color" class="form-control shadow-sm">
            </div>
            <div class="form-group">
                <label for="price" class="font-weight-bold">Price:</label>
                <input type="text" name="price" class="form-control shadow-sm">
            </div>
            <div class="form-group">
                <label for="image" class="font-weight-bold">Image:</label>
                <input type="file" name="image" class="form-control-file shadow-sm">
            </div>
            <button type="submit" name="save_record" class="btn btn-primary btn-block shadow">Save Record</button>
            <a href="view.php" class="btn btn-secondary btn-block mt-3 shadow">Back to List</a>
        </form>
    </div>
</body>

</html>
