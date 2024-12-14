<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Web_css.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Website</title>
</head>
<body>
    <?php
     include("index4.html");
    ?>

    <section class="Home">
        
        <div class="home_img2">
            <img src="phone-call-white-icon.png" alt="" class="ssimg2">
            
        </div>
        <div class="home_content">
            <h1>
               My <span>Contact info</span>
            </h1>

            <h3 class="typing-text">
                +1 (512) 213 1241
            </h3>
            
            <?php
                include("DATAS.html");
            ?>
            
        </div>
    </section>
</body>
</html>