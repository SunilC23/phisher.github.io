<?php
session_start();

include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
   
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $user_name = $_POST['username'];
    $email = $_POST['email'];
    $user_provided_password = $_POST['password']; 
    
    $connection = connect_to_database();

    if ($connection) {
        
        if (!empty($first_name) && !empty($last_name) && !empty($user_name) && !empty($email) && !empty($user_provided_password)) {
           
            $query = "INSERT INTO users (first_name, last_name, user_name, email, password) VALUES ('$first_name', '$last_name', '$user_name', '$email', '$user_provided_password')";
            $result = mysqli_query($connection, $query);

            if ($result) {
               
                header("Location: login.php");
                exit;
            } else {
              
                echo "Error: " . mysqli_error($connection);
            }
        } else {
            
            echo "Please enter all required information!";
        }
    } else {
    
        echo "Failed to connect to the database.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phishermen</title>
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
            width: 400px; 
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

        
        .form-row + .form-row {
            margin-top: 10px;
        }

        .link {
            text-align: center;
            margin-top: 20px;
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
        <h1>User Sign Up</h1>
        <form method="post">

            <div class="form-row">
                <label for="firstname">First Name:</label>
                <input type="text" name="firstname" required>
            </div>

            <div class="form-row">
                <label for="lastname">Last Name:</label>
                <input type="text" name="lastname" required>
            </div>

            <div class="form-row">
                <label for="username">Username:</label>
                <input type="text" name="username" required>
            </div>

            <div class="form-row">
                <label for="email">Email:</label>
                <input type="email" name="email" required>
            </div>

            <div class="form-row">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>
            </div>

            <div class="form-row">
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" name="confirm_password" id="confirm_password" required>
            </div>

            <button type="submit">Sign Up</button>
        </form>

        <div class="link">
            <p>Already have an account? <a href="login.php">Click here to login</a></p>
        </div>
    </div>
</body>
</html>
