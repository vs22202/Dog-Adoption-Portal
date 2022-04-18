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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Grape+Nuts&display=swap" rel="stylesheet">
</head>
<body>
<nav>
    <ul class='navbar flex align-items-center justify-content-space-around'>
        <li class='font-size-sm'>  <a href="/gallery" class='btn'>Gallery</a> </li>
        <li>
            <a href="/" class='btn border-0'>
                <div class="logo-container flex align-items-center justify-content-center gap1">
                    <object class='width-25p' data="../images/pink-paw.svg" type="image/svg+xml"> 
                    </object>
                    <!--<img src="../images/logo.svg" class='logo'-->
                    
                    <div class="paws4lyf font-size-xxlg font-color-secondary font-family-grape"><b>&nbsp;Paws4Lyf</b></div>
                    </div>
            </a> 
        </li>
        <?php if(!isset($_SESSION['aduser']) && !isset($_SESSION['user'])):?>
        <li class='font-size-md margin-top-1'><a href="/login" class='btn primary-900 font-size-sm'>Login</a> <hr> <a href="/signup" class='btn font-size-sm'>SignUp</a></li>
        <?php endif ?>
        <?php if(isset($_SESSION['aduser'])|| isset($_SESSION['user'])):?>
            <li class='font-size-md'>Welcome <?php echo $_SESSION['aduser'] ?? $_SESSION['user']?> <hr> <a href="/logout" class='btn primary-900 font-size-sm'>Logout</a></li>
        <?php endif ?>   
    </ul>
    <?php if(isset($_SESSION['aduser'])|| isset($_SESSION['user'])):?>
        <p class='font-size-md'><a href="/create" class='btn primary-900 font-size-xsm width-25p margin-inline-auto'>Upload Dog Details</a></p>
    <?php endif ?>  
</nav>
    <?php
        echo $content;
    ?>   
<footer class='flex footer gap1 width-90p margin-inline-auto margin-top-1 '>
    <a href="/" class='btn border-0'>
        <div class="logo-container flex align-items-center justify-content-center gap1">
            <object class='width-25p' data="../images/pink-paw.svg" type="image/svg+xml"> 
            </object>
            <div class="paws4lyf font-size-xxlg font-color-secondary font-family-grape"><b>&nbsp;Paws4Lyf</b>
            </div>
        </div>
    </a> 
    <nav class='flex gap1 font-family-grape font-size-md'>
        <ul class='flex navbar gap1'>
            <div>
                <li class='margin-bottom-0-5'><a href="/" class='link font-color-primary-900'> Home</a></li>
                <li><a href="/quiz" class='link font-color-secondary'>  Take Quiz</a></li>
                <li><a href="/" class='link font-color-secondary'>  Search Pets Nearby</a></li>
            </div>
            <div>
                <li class='margin-bottom-0-5'><a href="/" class='link font-color-primary-900'> About</a></li>
                <li><a href="/about" class='link font-color-secondary'>  Our Mission</a></li>
                <li><a href="/" class='link font-color-secondary'>  Email</a></li>
                <li><a href="/" class='link font-color-secondary'>  Phone</a></li>
            </div>
            <div>
                <li class='margin-bottom-0-5'> <a href="/" class='link font-color-primary-900'>Services</a></li>
                <li><a href="/" class='link font-color-secondary'>  Adopt a dog</a></li>
                <li><a href="/" class='link font-color-secondary'>  Volunteer</a></li>
                <li><a href="/" class='link font-color-secondary'>  Donate</a></li>
                <?php if(!isset($_SESSION['aduser']) && !isset($_SESSION['user'])):?>
                    <li><a href="/adlogin" class='link font-color-secondary'>Admin Login</a></li>        
                <?php endif ?>

            </div>
        </ul>
        <div>
            <div>
                <b><p class='margin-bottom-0-5'>Follow Social Links</p></b>  
                <ul class='navbar flex gap1 '>
                    <li> <a href="instagram.com" class='link font-color-secondary' > <i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="facebook.com" class='link font-color-secondary'><i class="fa-brands fa-facebook"></i></a></li>   
                    <li><a href="twitter.com" class='link font-color-secondary'><i class="fa-brands fa-twitter"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
</footer>
</body>
</html>
