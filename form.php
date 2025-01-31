<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checkout form</title>
  <link rel="stylesheet" href="form.css">
</head>
<body>
    <div class="checkout-wrapper">
        <div class="checkout-form">
            <h2>CHECKOUT FORM</h2>
            <form action="C:\Users\ADMIN\OneDrive\Desktop\FLOWERSHOP\FORM3\payment_3 (3).html" method="post">
                <label>Email</label>
                <input type="email" required>
                
                <label>Recipient Name</label>
                <input type="text" required>

                <label>Address</label>
                <input type="text" required>

                <label>Barangay</label>
                <input type="text" required>

                <div class="row">
                    <div>
                        <label>City</label>
                        <input type="text" required>
                    </div>
                    <div>
                        <label>Province</label>
                        <input type="text" required>
                    </div>
                </div>

                <div class="row">
                    <div>
                        <label>Month</label>
                        <input type="text" placeholder="MM" required>
                    </div>
                    <div>
                        <label>Day</label>
                        <input type="text" placeholder="DD" required>
                    </div>
                    <div>
                        <label>Year</label>
                        <input type="text" placeholder="YYYY" required>
                    </div>
                </div>

                <label>Recipient Phone Number</label>
                <input type="text" required>

                <label>Sender Delivery Instructions</label>
                <input type="text">

                <div class="terms">
                    <input type="checkbox" id="agree" required>
                    <label for="agree">I agree to the terms and conditions.</label>
                </div>
                <button onclick="location.href='notif.php';" type="submit">Place Order</button>
            </form>
        </div>
        
        <div class="order-summary">
            <img src="https://via.placeholder.com/150" alt="Product Image">
            <div class="summary-details">
                <p>Product Name</p>
                <p>Subtotal: <span>P 1,249.00</span></p>
                <p>Shipping: <span>P 100.00</span></p>
                <p>Total: <span>P 1,349.00</span></p>
            </div>
        </div>
    </div>
    <script src="product_3 (3).js"></script>
</body>
</html>