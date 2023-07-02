<?php
    require_once "lib/lib-login.php";
?>

<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<head>
    <?php require_once"php/head.php";?>

    <!-- Title/Icon/Link -->
    <?php require_once"php/icon_link.php";?>
    <title>F-TIX | Edit Profile</title>

    <!-- Style -->
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/edit-profile-page.css">
    <link rel="stylesheet" href="css/footer.css">
</head>

<!-- Body -->
<body>
    <!-- Bagian 1 - Form -->
    <form action="" method="post" enctype="multipart/form-data">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter your name">
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter your email">
        
        <label for="phone">Telephone Number:</label>
        <input type="tel" id="phone" name="phone" placeholder="Enter your telephone number">
        
        <label for="city">City:</label>
        <input type="text" id="city" name="city" placeholder="Enter your city">
        
        <input type="submit" value="Save Changes">
    </form>
</body>
</html>