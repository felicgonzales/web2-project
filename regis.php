<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<head>
    <?php require_once"php/head.php";?>

    <!-- Title/Icon/Link -->
    <title>F-TIX | Regis</title>

    <!-- Style -->
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/regis.css">
</head>

<!-- Body -->
<body>
    <!-- Login Page -->
    <div class="container">
        <a href="index.php" class="logo">f-tix</a>
        <form action="proses/regis-akun.php" method="post" autocomplete="off">
            <input autocomplete="false" name="hidden" type="text" style="display:none;">
            <div class="input">
                <ion-icon name="person-outline"></ion-icon>
                <label for="Username">Username</label>
                <input type="text" name="username" required>
            </div>
            <div class="input">
                <ion-icon name="mail-outline"></ion-icon>
                <label for="Email">Email</label>
                <input type="email" name="email" required>
            </div>
            <div class="input">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <label for="Password">Password</label>
                <input type="password" name="password" required>
            </div>
            <div class="input">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <label for="Password">Confirmation Password</label>
                <input type="password" name="confirPass" required>
            </div>
            <div class="login">
                <p>Have an account <a href="login.php">Login</a></p>
            </div>
            <input type="submit" value="Regis" class="regis-but"> 
        </form>
    </div>

    <!-- Icon Script -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>