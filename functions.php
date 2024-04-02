<?php
function check_login($connection)
{
    if(isset($_SESSION['first_name']))
    {
        $id = $_SESSION['first_name'];
        $query = "SELECT * FROM users WHERE first_name = '$id' LIMIT 1";

        $result = mysqli_query($connection, $query);
        if($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }
   
    header("location: login.php");
    exit; 
}

function random_num($length)
{
    $text = "";    
    if($length < 5)
    {
        $length = 5;
    }

    $len = rand(4, $length); 

    for ($i = 0; $i < $len; $i++) {
        $text .= rand(0, 9);
    }

    return $text;
}
?>
