<?php
session_start();

include("connection.php"); // Include connection.php to establish database connection
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Something was posted
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if the provided email exists in the database
    $query = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
    $result = mysqli_query($connection, $query); // Use $connection variable for database connection

    if ($result && mysqli_num_rows($result) > 0) {
        // Email exists, fetch the associated user data
        $user_data = mysqli_fetch_assoc($result);
        $stored_password_hash = $user_data['password'];

        // Verify the password
        if (password_verify($password, $stored_password_hash)) {
            // Passwords match, set session variables and redirect to loggedin.php
            $_SESSION['user_id'] = $user_data['id'];
            header("Location: loggedin.php");
            exit;
        } else {
            // Passwords do not match
            echo "Incorrect password!";
        }
    } else {
        // Email does not exist in the database
        echo "Email not found!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phishermen - Login</title>
    <style>
        body {
            background-color: #00ffaa; 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .content {
            text-align: left;
            width: 400px; /* Adjust as needed */
            padding: 20px;
            background-color: rgb(255, 255, 255);
        }

        h1 {
            font-weight: bold;
            text-align: center;
            margin-top: 0;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: inline-block;
            margin-bottom: 5px;
            margin-top: 5px;
            width: 150px;
        }

        input, button {
            margin-bottom: 10px;
            padding: 5px;
            box-sizing: border-box;
            height: 30px;
            width: calc(100% - 160px);
        }

        button {
            width: 100%;
        }

        .form-row {
            margin-bottom: 15px;
            clear: both;
        }

        .form-row::after {
            content: "";
            display: table;
            clear: both;
        }

        /* Add a gap between each form row */
        .form-row + .form-row {
            margin-top: 10px;
        }

        /* Link styling */
        .link {
            text-align: center;
        }

        .link a {
            color: blue;
            text-decoration: underline;
        }

        .link a:hover {
            color: darkblue;
        }
    </style>
</head>
<body>
    <div class="content custom-border">
        <h1>User Login</h1>
        <form method="post" action="login.php"> <!-- Update action to point to your login route -->
            <div class="form-row">
                <label for="email">Email:</label>
                <input type="email" name="email" required>
            </div>

            <div class="form-row">
                <label for="password">Password:</label>
                <input type="password" name="password" required>
            </div>

            <button type="submit">Login</button>
        </form>

        <div class="link">
            <p>Don't have an account? <a href="signup.php">Click here to create an account</a></p>
        </div>
    </div>
</body>
</html>
