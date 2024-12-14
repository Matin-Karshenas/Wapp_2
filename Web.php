



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
    if (!defined('INCLUDE_INDEX')) {
    include('index.php');
    }
    ?>

    <section class="Home">
        <div class="home_img">
            <img src="trump.jpeg" alt="">
            
        </div>
       
        <div class="home_content">
            <h1>
                Hi, it's <span>Trump</span>
            </h1>

            <h3 class="typing-text">
                Im a 47th president of USA
            </h3>
            <p>
            Donald John Trump (born June 14, 1946) is an American politician, media personality, and businessman who became the president-elect of the United States after winning the 2024 presidential election. He previously served as the 45th president of the United States from 2017 to 2021
            </p>

            <?php
                include("DATAS.html");
            ?>
        </div>
    </section>
</body>
</html>