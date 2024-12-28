<?php 

    require('user_info.php')

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UserInfo & IP Address</title>
</head>
<body>  

    <center>

        <h1>Getting User DATA using PHP 😎👻 </h1>
        <h1> <?= UserInfo::get_ip() ?> </h1>
        <h1> <?= UserInfo::get_device() ?> </h1>
        <h1> <?= UserInfo::get_os() ?> </h1>
        <h1> <?= UserInfo::get_browser() ?> </h1>
        
    </center>
    
</body>
</html>