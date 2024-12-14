
<?php
// Only redirect if we're not already on web.php
if ($_SERVER['REQUEST_URI'] != '/web.php' && basename($_SERVER['PHP_SELF']) != 'web.php') {
    header("Location: web.php");
    exit();  // Stop further execution of index.php
}
?>

<?php
if (!defined('INCLUDE_INDEX')) {
    define('INCLUDE_INDEX', true);
    // Your content for index.php
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Web_css.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <header>
        <a href="Main_login_page.php" class="Logo">
            Login
        </a>
        <nav>
            <a href="#" class="active">
                Home
            </a>
            <a href="eduaction.php" >
                Education
            </a>

            <a href="experience.php">
                Experience
            </a>

            <a href="Contact.php" >
                Contact
            </a>
        </nav>
    </header>



    
</body>
</html>