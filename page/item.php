<!DOCTYPE html>
<html lang="zxx">

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
            <style type="text/css">
                .redbox{background-color: red;}
                .figure {
                    display: flex; /* Use flexbox to arrange images horizontally */
                    justify-content: space-between; /* Distribute space evenly between images */
                }

                .figure img {
                    width: 50%; /* Adjust the width of each image as needed */
                    margin: 0 5px; /* Add margin between images */
                }
            </style>
    </head>

    
        <body>

            <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"> 
                    <img src="/assets/img/logo.png" alt="logo" height="40px"/>
                </a>
            </div>
            
            <nav class="navbar navbar-default">
                <!-- 네비게이션 내용 -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/">HOME <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">SHOP</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">관리 <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="/page/users.php">사용자</a></li>
                                <li><a href="#">쿠폰</a></li>
                                <li><a href="#">회사</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">장바구니</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="/page/item.php">아이템</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Add a title -->
            <div class="page-title">
                <h1>식자재 마트</h1>
            </div>


            <!-- figure 요소를 navbar 밖으로 이동 -->
            <div class="figure">
                <div class="image-container">
                    <a href="/page/meat.php"> <!-- Link to the new "meat.html" page -->
                        <img src="/assets/img/feature-1.jpg" class="figure-img img-fluid rounded" alt="Image 1">
                        <figcaption class="figure-caption">Meat</figcaption>
                    </a>
                </div>
                <div class="image-container">
                    <img src="/assets/img/feature-2.jpg" class="figure-img img-fluid rounded" alt="Image 2">
                    <figcaption class="figure-caption">바나나</figcaption>
                </div>
                <div class="image-container">
                    <img src="/assets/img/feature-3.jpg" class="figure-img img-fluid rounded" alt="Image 3">
                    <figcaption class="figure-caption">자몽</figcaption>
                </div>
            </div>




        </body>





