<?php
  require_once "lib/lib-login.php";
  require_once "lib/lib-db-film.php";
  $film_id = $_GET['id'];
  $location = jadwalFilm($film_id);
  $hitung = hitungFilm();
  $film = filmById($film_id);
?>
<script>
    function getStudio(lokasi) {
        var film_id = <?php echo $film_id;?>;
        console.log('getStudio.php?id='+lokasi+'&film_id='+film_id)
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("rdBox").innerHTML = this.responseText;
        }
        };
        xmlhttp.open("GET", 'getStudio.php?id='+lokasi+"&film_id="+film_id, true);
        xmlhttp.send();
    }
    function getDate(studio) {
        var id_studio = studio.value;
        var film_id = <?php echo $film_id;?>;
        console.log('getDate.php?film_id='+film_id+"&studio_id="+id_studio);
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("rdBox2").innerHTML = this.responseText;
        }
        };
        xmlhttp.open("GET", 'getDate.php?id_lokasi='+lokasi+"&film_id="+film_id+"&studio_id="+id_studio, true);
        xmlhttp.send();
    }
    function getTime(tgl) {
        var id_studio = document.getElementsByName('studio_id')[0].value;
        var film_id = <?php echo $film_id;?>;
        var tgl = tgl.value;
        console.log('getTime.php?film_id='+film_id+"&studio_id="+id_studio+"&tgl="+tgl);
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("rdBox3").innerHTML = this.responseText;
        }
        };
        xmlhttp.open("GET", 'getTime.php?film_id='+film_id+"&studio_id="+id_studio+"&tgl="+tgl, true);
        xmlhttp.send();
    }
    function clearSelection(){
        window.location = "";
    }
</script>

<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
    <?php require_once"php/head.php";?>

    <!-- Title/Icon/Link -->
    <?php require_once"php/icon_link.php";?>
    <title>F-TIX | Jadwal</title>

    <!-- Style -->
    <link rel="stylesheet" href="css/all.css">
    <?php
        if (cekLogin()) { ?>
            <link rel="stylesheet" href="css/navbar-login.css">
        <?php }else{ ?>
            <link rel="stylesheet" href="css/navbar.css">
        <?php }
    ?>
       <link rel="stylesheet" href="css/landing-page.css">
    <link rel="stylesheet" href="css/jadwal.css">
   
    
</head>
<body>
    <!-- Bagian 1 - Navbar  -->
    <div class="bag-01">
        <!-- Navbar -->
        <?php 
        if (cekLogin()) {
            require"php/navbar-login.php";
        }else{
            require"php/navbar.php";
        }
        ?>
        </div>

        <script src="js/navbar-login.js"></script>

<!-- Bagian 2 - jadwal  -->
<div class="bag-02">
      <div class="gambar">
        <div class="utama">
          <img src="<?php echo $film['foto']; ?>" />
         </div>
         <div class="sect">
          <h1><?php echo $film['judul'];?></h1>
          <p><?php echo $film['durasi'];?></p>
          </div>
         </div>
          
    </div>
    <div class="jadbox1">
        <div class="box1">
      
        <form action="seat.php" method="GET">
        <div class="jdwl"style="display:none;">
                <input type="text" name="film_id" value="<?php echo $film_id;?>">
            </div>
            <div class="jdwl">
            <label for="lokasi" class="form-label">Pilih Lokasi</label>
            <select class="form-select" aria-label="Default select example" name="lokasi" id="lokasi" onchange="getStudio(this.options[this.selectedIndex].value)">
                    <option selected>--- Pilih Lokasi ---</option>
                    <?php 
                        foreach($location as $row){
                        
                    ?>
                        <option value="<?php echo $row['id'];?>"><?php echo $row['wilayah'].'-'.$row['nama_lokasi']; ?></option>
                    <?php
                        }
                    ?>
            </select>


            <!-- <div class="dropdown">
        <div class="select" aria-label="Default select example" name="lokasi" id="lokasi" onchange="getStudio(this.options[this.selectedIndex].value)">
          <span class="selected">Sun Plaza</span>
          
          <div class="caret"></div>
        </div>
        
        <ul class="menu"> -->
        <?php 
                       // foreach($location as $row){
                        
                    ?>
          
          <!-- <li value="<?php //echo $row['id'];?>"><?php //echo $row['wilayah'].'-'.$row['nama_lokasi']; ?></li> -->
          <?php
                       // }
                    ?>
        </ul>
      </div>
      </div>
      </div>
            <div class="jdwl">            
                <div id="rdBox"></div>
            </div>
            <div class="jdwl">
                <div id="rdBox2"></div>
            </div>
            <div class="jdwl">
                <div id="rdBox3"></div>
            </div>
            <div class="row mb-3 ms-3 me-3">
                <button type="button" onclick="clearSelection()" class="btn btn-warning btn-block">Clear Selection</button>
            </div>
            <div class="row mb-3 ms-3 me-3">
                <button type="submit" class="btn btn-primary btn-block">Pilih Kursi</button>
            </div>
         </form>
      </div>
      
</div>

  <script src="js/jadwal.js"></script>
</body>
</html>