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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/edit-profile-page.css" />
</head>

<!-- Body -->
<body>
    <!-- Bagian 1 - Form -->
    <form action="" method="post" enctype="multipart/form-data">
    <div class="container rounded bg-white mt-5">
      <div class="row">
        <div class="col-md-4 border-right">
          <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" src="img/profil.png" width="100" /><span class="font-weight-bold">John Doe</span></div>
        </div>
        <div class="col-md-8">
          <div class="p-3 py-5">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <div class="d-flex flex-row align-items-center back">
                <i class="fa fa-long-arrow-left mr-1 mb-1"></i>
                <h6>Back to home</h6>
              </div>
              <h6 class="text-right">Edit Profile</h6>
            </div>

            <div class="row mt-2">
              <label for="name">Username :</label>
              <div class="col-md-6"><input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" /></div>
            </div>
            <div class="row mt-3">
              <label for="email">Email :</label>
              <div class="col-md-6"><input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" /></div>
            </div>
            <div class="row mt-3">
              <label for="phone">Telephone Number :</label>
              <div class="col-md-6"><input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your telephone number" /></div>
            </div>
            <div class="row mt-3">
              <label for="city">Gender :</label>
              <div class="col-md-6">
                <input type="radio" id="lk" name="gender" value="Laki-Laki" />
                <label for="lk">Laki-Laki</label>
                <input type="radio" id="pr" name="gender" value="Perempuan" />
                <label for="pr">Perempuan</label>
              </div>
            </div>
            <div class="mt-5 text-right"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
          </div>
        </div>
      </div>
    </div>
    </form>
</body>
</html>
