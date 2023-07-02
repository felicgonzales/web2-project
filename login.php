<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<head>
    <?php require_once"php/head.php";?>

    <!-- Title/Icon/Link -->
    <title>F-TIX | Login</title>

    <!-- Style -->
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/login.css">
</head>

<!-- Body -->
<body>
    <!-- Login Page -->
    <div class="container">
        <a href="index.php" class="logo">f-tix</a>
        <form action="proses/cek-login.php" method="post" autocomplete="off">
            <input autocomplete="false" name="hidden" type="text" style="display:none;">
            <div class="input">
                <ion-icon name="person-outline"></ion-icon>
                <label for="Username">Username</label>
                <input type="text" name="username" required>
            </div>
            <div class="input">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <label for="Password">Password</label>
                <input type="password" name="password" required>
            </div>
            <div class="register">
                <p>Don't have a account <a href="regis.php">Register</a></p>
            </div>
            <input type="submit" value="Login" class="log-but"> 
        </form>
    </div>

    <!-- Icon Script -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>