<!DOCTYPE html>
<html lang="en">
<head>
    <title>Photo Gallery</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/lightbox.css">
   <script src="js/jquery.js"></script>
   <script src="js/bootstrap.js"></script>
   <script src="js/lightbox.js"></script>
   <style>
    .thumbnail img{
            width: 350px;
            height: 200px;
    }
   </style>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <div class="navbar-brand">Photo Gallery</div>
            </div>
        
        <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">Home</a></li>
            <li><a href="honda_civic.php">Honda Civic</a></li>
            <li><a href="others.php">Others</a></li>

        </ul>
        </div>
    </nav>
    <div class="container">
    
    <div class="page-header">
        <h3>Photo Gallery</h3>
    </div>
    <div class="row">
        <div class="col-md-4">
            <a href="pic/6.jpg" data-lightbox="gallery" data-title="Pictue 1" class="thumbnail">
                <img src="pic/6.jpg">
            </a>
            
        </div>
        <div class="col-md-4">
            <a href="pic/7.jpg" data-lightbox="gallery" data-title="Pictue 2" class="thumbnail">
                <img src="pic/7.jpg">
            </a>
           
        </div>
        <div class="col-md-4">
            <a href="pic/8.jpg" data-lightbox="gallery" data-title="Pictue 3" class="thumbnail">
                <img src="pic/8.jpg">
            </a>
           
        </div>
        <div class="col-md-4">
            <a href="pic/9.jpg" data-lightbox="gallery" data-title="Pictue 4" class="thumbnail">
                <img src="pic/9.jpg">
            </a>
            
        </div>
        <div class="col-md-4">
            <a href="pic/10.jpg" data-lightbox="gallery" data-title="Pictue 5" class="thumbnail">
                <img src="pic/10.jpg">
            </a>
            
        </div>
        <div class="col-md-4">
            <a href="pic/11.jpg" data-lightbox="gallery" data-title="Pictue 6" class="thumbnail">
                <img src="pic/11.jpg">
            </a>
            
    </div>
    <footer class="navbar navbar-default navbar-fixed-bottom">
        <div class="container">
            <p class="text-center" style="padding: 10px;">Created by Steven</p>
        </div>
    </footer>
</div>
    
</body>
</html>