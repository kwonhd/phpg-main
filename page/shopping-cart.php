<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .cart-item {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
            background-color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .cart-item img {
            max-width: 80px;
            max-height: 80px;
            margin-right: 10px;
        }

        .cart-item h4 {
            font-size: 18px;
            margin: 0;
        }

        .cart-item p {
            font-size: 16px;
            margin: 0;
        }

        .cart-total {
            margin-top: 20px;
            text-align: right;
        }

        .cart-total p {
            font-size: 18px;
            margin: 0;
        }

        .checkout-btn {
            display: block;
            background-color: #007bff;
            color: #fff;
            text-align: center;
            padding: 10px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }

        .checkout-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Your Shopping Cart</h1>
        <!-- Replace this section with PHP code to display cart items -->
        <div class="cart-item">
            <img src="/assets/img/feature-1.jpg" alt="Product Image">
            <div>
                <h4>Product Name</h4>
                <p>Price: $10.99</p>
                <p>Quantity: 2</p>
                <p>Subtotal: $21.98</p>
            </div>
        </div>
        <!-- End of cart item -->

        <!-- Display the cart total -->
        <div class="cart-total">
            <p>Total: $42.96</p>
        </div>

        <!-- Proceed to Checkout Button -->
        <a href="/checkout.php" class="checkout-btn">Proceed to Checkout</a>
    </div>
</body>
</html>
