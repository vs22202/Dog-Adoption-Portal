<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paws4Lyf</title>
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&family=Quintessential&display=swap" rel="stylesheet">
</head>
<body>
<nav>
    <ul class='navbar flex align-items-center justify-content-space-around'>
        <li class='font-size-md'>  <a href="/gallery" class='btn'>Gallery</a> </li>
        <li>
            <a href="/" class='btn border-0'>
                <div class="logo-container flex align-items-center justify-content-space-evenly">
                    <img src="../images/logo.svg" class='logo'>
                    <div class="paws4lyf font-size-lg font-color-secondary">&nbsp;&nbsp;&nbsp;Paws4Lyf</div>
                </div>
            </a> 
        </li>
        <li class='font-size-md margin-top-1'><a href="/login" class='btn primary-900'>Login</a> <hr> <a href="/signup" class='btn'>SignUp</a></li>
    </ul>
</nav>
    <?php
        echo $content;
    ?>   
</body>
</html>
