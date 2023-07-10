<?php
    require_once "lib/lib-db-users.php";
    
    $message = "";
    if(isset($_SESSION['username'])) {
        $message = $_SESSION['username'];
    }

    $cariAkun = akunUser($_SESSION['username']);
    foreach ($cariAkun as $value) {
        $id_user = $value['id'];
    }
?>

<div class="navbar-login">
    <nav>
        <a href="index.php" id="logo">f-tix</a>
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="now-showing.php">NOW SHOWING</a></li>
            <li><a href="ticket.php">TICKET</a></li>
            <li><a href="information.php">INFORMATION</a></li>
        </ul>
        <div class="nav-profile">
            <p id="user-profile"><?php echo $message; ?></p>|
            <i class="fa-sharp fa-solid fa-user icon-profile"></i>
            <div class="drop-down">
                <ul class="drop-down">
                    <li><a href="edit-profile.php?id=<?php echo $id_user; ?>">Edit Profile</a></li>
                    <li><a href="#">Settings</a></li>
                    <li><a href="proses/logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>