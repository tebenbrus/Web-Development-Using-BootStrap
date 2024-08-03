<!DOCTYPE html>
<html lang="en">
<head>
    <title>Photo Gallery</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
   <script src="js/jquery.js"></script>
   <script src="js/bootstrap.js"></script>
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
            <li><a href="">Home</a></li>
            <li><a href="honda_civic.php">Honda Civic</a></li>
            <li><a href="others.php">Others</a></li>

        </ul>
        </div>
    </nav>
    <div class="container">
    <div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="carousel slide" data-ride="carousel" id="slider">
            <ol class="carousel-indicators">
                <li data-target="#slider" data-slide-to="0" class="active"></li>
                <li data-target="#slider" data-slide-to="1" ></li>
                <li data-target="#slider" data-slide-to="2" ></li>
                <li data-target="#slider" data-slide-to="3" ></li>
            </ol>
            <div class="carousel-inner">
            <div class="item active">
                <img src="pic/6.jpg"/>
        </div >
            <div class="item">
                <img src="pic/7.jpg"/>
            </div>
            <div class="item">
                <img src="pic/8.jpg"/>
            </div>
            <div class="item">
                <img src="pic/9.jpg"/>
            </div>
        </div>  
       
        <a href="#slider" data-slide="prev" class="left carousel-control">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
    </div>
        <a href="#slider" data-slide="next" class="right carousel-control">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
    </div>
 </div>
    <div class="page-header">
        <h3>Photo Gallery</h3>
    </div>
    <div class="row">
        <div class="col-md-4">
            <a href="#m1" data-toggle="modal" class="thumbnail">
                <img src="pic/6.jpg">
            </a>
            <div class="modal fade" id="m1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">Honda Civic Type R</div>
                        <div class="modal-body">
                             <img src="pic/6.jpg" class="img-thumbnail">
                        </div>
                        <div class="modal-footer">Picture 1</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <a href="#m2" data-toggle="modal" class="thumbnail">
                <img src="pic/7.jpg">
            </a>
            <div class="modal fade" id="m2">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">Honda Civic Type R</div>
                        <div class="modal-body">
                             <img src="pic/7.jpg" class="img-thumbnail">
                        </div>
                        <div class="modal-footer">Picture 2</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <a href="#m3" data-toggle="modal" class="thumbnail">
                <img src="pic/8.jpg">
            </a>
            <div class="modal fade" id="m3">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">Honda Civic Type R</div>
                        <div class="modal-body">
                             <img src="pic/8.jpg" class="img-thumbnail">
                        </div>
                        <div class="modal-footer">Picture 3</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <a href="#m4" data-toggle="modal" class="thumbnail">
                <img src="pic/9.jpg">
            </a>
            <div class="modal fade" id="m4">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">Honda Civic Type R</div>
                        <div class="modal-body">
                             <img src="pic/9.jpg" class="img-thumbnail">
                        </div>
                        <div class="modal-footer">Picture 4</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <a href="#m5" data-toggle="modal" class="thumbnail">
                <img src="pic/10.jpg">
            </a>
            <div class="modal fade" id="m5">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">Honda Civic Type R</div>
                        <div class="modal-body">
                             <img src="pic/10.jpg" class="img-thumbnail">
                        </div>
                        <div class="modal-footer">Picture 5</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <a href="#m6" data-toggle="modal" class="thumbnail">
                <img src="pic/11.jpg">
            </a>
            <div class="modal fade" id="m6">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">Honda Civic Type R</div>
                        <div class="modal-body">
                             <img src="pic/11.jpg" class="img-thumbnail">
                        </div>
                        <div class="modal-footer">Picture 6</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="navbar navbar-default navbar-fixed-bottom">
        <div class="container">
            <p class="text-center" style="padding: 10px;">Created by Steven</p>
        </div>
    </footer>
</div>
    
</body>
</html>