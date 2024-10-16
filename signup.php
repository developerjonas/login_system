<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Signup Form</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="container">
        <div class="form-container">
            <h2>Signup</h2>
            <form action="#" method="POST" class="signup-form">
                <input type="text" placeholder="Full Name" required>
                <input type="email" placeholder="Email" required>
                <input type="text" placeholder="Username" required>
                <input type="password" placeholder="Password" required>
                <input type="password" placeholder="Confirm Password" required>
                <button type="submit">Sign Up</button>
                <p>Already have an account? <a href="login.php">Log in</a></p>
            </form>
        </div>
    </div>

    <script src="script.js"></script>

</html>