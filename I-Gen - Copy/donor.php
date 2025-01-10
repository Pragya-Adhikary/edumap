<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor</title>
    <link rel="stylesheet" href="dpay.css">
</head>
<body>    
    <nav class="navbar">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Donate</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
    <h1>Donor Information</h1>
    <form method="POST" action="payment.php">
        <div class="section">
            <label for="donorName">Full Name</label>
            <input type="text" id="donorName" name="donorName" placeholder="Enter your full name" required>
        </div>
        <div class="section">
            <label for="donorEmail">Email Address</label>
            <input type="email" id="donorEmail" name="donorEmail" placeholder="Enter your email address" required>
        </div>
        <div class="section">
            <label for="donorPhone">Phone Number</label>
            <input type="tel" id="donorPhone" name="donorPhone" placeholder="Enter your phone number">
        </div>
        <button type="submit">Next</button>
    </form>
</body>
</html>

    </form>
    
</body>
</html>