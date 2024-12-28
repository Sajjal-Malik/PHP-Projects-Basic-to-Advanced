<?php

    if(isset($_POST["submit"])){
        # success
        if (gettype($_POST["name"]) !==  "string"){
            echo "<script> alert('Please Enter String form data only'); </script>";
        }
    }
    else{
        echo "Your name sucks we couldn't submit it 😂😂❤";
    }
    
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First App</title>
    <link rel="stylesheet" href="style.css">
    <style>

        
        
    </style>
</head>

<body>

    <h1 class="hero">
        <?php 
            echo"The User's name is " . $_POST["name"] . " 💀🚀🔥 ";
        ?>
    </h1>

    <div class="container">
        <div class="holder">
            <form action="index.php" method="POST">
                <div class="wrapper">
                    <input type="text" placeholder="Enter Username" name="name">

                </div>
                <br>
                <br>
                <div class="wrapper">
                    <input type="submit" value="Submit" name="submit">
                </div>
            </form>
        </div>
    </div>
    <h4 class="footer">Made with <span>❤</span> by Duraid Malik!</h4>

</body>

</html>