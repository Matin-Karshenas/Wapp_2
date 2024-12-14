<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Login_css.css">
</head>
<body>

    <?php
        include("index6.html");
    ?>
    <div class="Wrapper">
        <div class="Login_box">
            <h2>Sign Up</h2>
            <form action="#">
                <div class="input-box">
                    <span class= "icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" required>
                    <Label>Enter your Email</Label>
                </div>
                
                <div class="input-box">
                    <span class= "icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" required>
                    <Label>Enter your Password</Label>
                </div>

                <div class="rememberme">
                    <label><input type="checkbox"> Remember me</label>
                    
                </div>

                <button type="submit" class="btn">Sign Up</button>

                

                
                <div>
                <a href="Main_login_page.php">Aleardy have an account?</a>
                </div>
                

                
            </form>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>