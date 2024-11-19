<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cart.css">
    <title>E-commerce Store</title>
</head>
<body>
  <header class="app-header">
    <div class="back-button">
      <a href="homepage.php" onclick="history.back()"><img src="IMG/chevron-left-regular-24.png"></a>
    </div>

    <div class="search-box">
      <h1>Welcome to Shop Name!</h1>
      <input type="text" placeholder="search">
    </div>

    <div class="header-icons">
      <a href="#"><img src="IMG/bxs-cart (1).svg"></a>
      <a href="#"><img src="IMG/dots-vertical-rounded-regular-24.png"></a>
    </div>
  </header>

  <div class="product-grid">
  <div class="product-item">
    <div class="product-image">
      <a href="#">
      <img src="IMG/pic1.jpg" alt="Product Image">
      </a>
    </div>

    <div class="product-info">
      <h2>Product Name</h2>
      <p>Product description</p>

      <div class="product-price">
        <span>$ 1, 299.00</span>
        <del>$ 1, 499.00</del>
      </div>

      <div class="product-seller">
        <a href="form.php"><button class="buy-now">Buy Now</button></a>
        <button class="quantity-btn decrement">+</button>
        <span class="quantity-value">1</span>
        <button class="quantity-btn increment">-</button>
        
      </div>
    </div>
  </div>

  <div class="product-item">
    <div class="product-image">
      <a href="#">
      <img src="IMG/pic2.jpg" alt="Product Image">
      </a>
    </div>

    <div class="product-info">
      <h2>Product Name</h2>
      <p>Product description</p>

      <div class="product-price">
        <span>$ 1, 299.00</span>
        <del>$ 1, 499.00</del>
      </div> 
      
      <div class="product-seller">
        <a href="form.php"><button class="buy-now">Buy Now</button></a>
        <button class="quantity-btn decrement">+</button>
        <span class="quantity-value">1</span>
        <button class="quantity-btn increment">-</button>
      </div>
    </div>
  </div>

  <div class="product-item">
    <div class="product-image">
      <a href="#">
      <img src="IMG/pic4.jpg" alt="Product Image">
      </a>
    </div>

    <div class="product-info">
      <h2>Product Name</h2>
      <p>Product description</p>

      <div class="product-price">
        <span>$ 1, 299.00</span>
        <del>$ 1, 499.00</del>
      </div>
      
      <div class="product-seller">
        <a href="form.php"><button class="buy-now">Buy Now</button></a>
        <button class="quantity-btn decrement">+</button>
        <span class="quantity-value">1</span>
        <button class="quantity-btn increment">-</button>
      </div>
    </div>
  </div>

  <div class="product-item">
    <div class="product-image">
      <a href="#">
      <img src="IMG/pic2.jpg" alt="Product Image">
      </a>
    </div>

    <div class="product-info">
      <h2>Product Name</h2>
      <p>Product description</p>

      <div class="product-price">
        <span>$ 1, 299.00</span>
        <del>$ 1, 499.00</del>
      </div> 
      
      <div class="product-seller">
        <a href="form.php"><button class="buy-now">Buy Now</button></a>
        <button class="quantity-btn decrement">+</button>
        <span class="quantity-value">1</span>
        <button class="quantity-btn increment">-</button>
      </div>
     </div>
  </div>

  <div class="product-item">
    <div class="product-image">
      <a href="#">
      <img src="IMG/pic3.jpg" alt="Product Image">
      </a>
    </div>

    <div class="product-info">
      <h2>Product Name</h2>
      <p>Product description</p>

      <div class="product-price">
        <span>$ 1, 299.00</span>
        <del>$ 1, 499.00</del>
      </div>
      
      <div class="product-seller">
        <a href="form.php"><button class="buy-now">Buy Now</button></a>
        <button class="quantity-btn decrement">+</button>
        <span class="quantity-value">1</span>
        <button class="quantity-btn increment">-</button>
      </div>
    </div>
  </div>

  <div class="product-item">
    <div class="product-image">
      <a href="#">
      <img src="IMG/pic4.jpg" alt="Product Image">
      </a>
    </div>

    <div class="product-info">
      <h2>Product Name</h2>
      <p>Product description</p>

      <div class="product-price">
        <span>$ 1, 299.00</span>
        <del>$ 1, 499.00</del>
      </div> 
      
      <div class="product-seller">
        <a href="form.php"><button class="buy-now">Buy Now</button></a>
        <button class="quantity-btn decrement">+</button>
        <span class="quantity-value">1</span>
        <button class="quantity-btn increment">-</button>
      </div>
    </div>
  </div>
  </div>

  <div class="result">
    <p>End of Results!</p>
  </div>
    <script src="cart1.js"></script>
</body>
</html>