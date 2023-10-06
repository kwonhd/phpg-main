<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meat - Product Detail</title>
    <!-- Add your CSS files here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- ... (navbar and other content) ... -->

    <!-- Product Detail Section -->
    <div class="container">
        <!-- ... (your existing content) ... -->

        <!-- Product Detail Content -->
        <div class="page-title">
            <h1>Meat product details</h1>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="/assets/img/feature-1.jpg" alt="Meat">
            </div>
            <div class="col-md-6">
                <h2>고기 구매</h2>
                <p>신선한 고기를 즐기세요. 고기에 대한 자세한 정보가 여기에 표시됩니다.</p>
                <!-- Add more product details here -->
                <p><strong>가격:</strong> 10990원</p>
                <p><strong>수량:</strong> 50 개</p>
                <!-- Add a button to go back to the item page -->
                <a href="/page/item.php" class="btn btn-primary">Back to product list</a>
            </div>
        </div>

        <!-- Quantity Selection Form -->
        <form action="/page/shopping-cart.php" method="post">
            <div class="form-group">
                <label for="quantity">수량 선택:</label>
                <input type="number" id="quantity" name="quantity" min="1" value="1" required>
            </div>
            <!-- Hidden field to send product information to the shopping cart page -->
            <input type="hidden" name="product_name" value="고기">
            <input type="hidden" name="product_price" value="10.99">
            <!-- Purchase Button -->
            <button type="submit" class="btn btn-success">구매</button>
        </form>
    </div>

    <!-- ... (other content and scripts) ... -->
</body>
</html>

