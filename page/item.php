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

<!-- Page Title -->
<div class="container">
    <div class="page-title">
        <h1>식자재 마트</h1>
    </div>
</div>

<!-- Product Section -->
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="thumbnail">
                <img src="/assets/img/feature-1.jpg" alt="Meat">
                <div class="caption">
                    <h3>고기</h3>
                    <p>신선한 고기를 즐겨보세요.</p>
                    <p><a href="/page/meat.php" class="btn btn-primary" role="button">상품 보기</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <img src="/assets/img/feature-2.jpg" alt="바나나">
                <div class="caption">
                    <h3>바나나</h3>
                    <p>달콤한 바나나를 만나보세요.</p>
                    <p><a href="/page/banana.php" class="btn btn-primary" role="button">상품 보기</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <img src="/assets/img/feature-3.jpg" alt="자몽">
                <div class="caption">
                    <h3>자몽</h3>
                    <p>시원한 자몽을 즐겨보세요.</p>
                    <p><a href="/page/grapefruit.php" class="btn btn-primary" role="button">상품 보기</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add your JavaScript files and any additional sections or features here -->

<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</body>
</html>






