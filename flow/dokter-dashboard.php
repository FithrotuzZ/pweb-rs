<?php
// session telah login di halaman selain login
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: dokter-login.php");
    exit;
}


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokter - Rumah Sakit Bhayangkara</title>
    <link rel="stylesheet" href="style_dokter_dashboard.css">
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
     rel="stylesheet"/>
  </head>
  <body>
    <nav>
      <div class="logo">
        <h3>Rumah Sakit Bhayangkara</h3>
      </div>

      <div class="user">
        <a href="dokter-dashboard.php">
        <span class="user-name">Username</span>
        <i class='bx bxs-user-circle user-icon'></i>
        </a>
      </div>  

      <div class="sidebar">
          <div class="sb-menu">
              <i class='bx bx-menu menu-icon' ></i>
              <span class="menu-text">Menu</span>
          </div>

          <div class="sb-profile">
            <a href="dokter-dashboard.php">
              <i class='bx bxs-user-circle user-icon'></i>
              <span class="user-name">Username</span>
            </a>
          </div> 

          <div class="sb-content">
            <ul class="lists">
              <li class="list">
                  <a href="dokter-dashboard.php" class="nav-link">
                      <i class='bx bxs-dashboard icon'></i>
                      <span class="link">Dashboard</span>
                  </a>
              </li>
              <li class="list">
                  <a href="dokter-kehadiran.php" class="nav-link">
                      <i class='bx bx-calendar icon' ></i>
                      <span class="link">Kehadiran</span>
                  </a>
              </li>
              <li class="list">
                  <a href="dokter-poliklinik.php" class="nav-link">
                      <i class='bx bx-group icon'></i>
                      <span class="link">Poliklinik</span>
                  </a>
              </li>
              <li class="list">
                <a href="dokter-halaman-visitasi.php" class="nav-link">
                    <i class='bx bx-book-heart icon'></i>
                    <span class="link">Visitasi</span>
                </a>
            </li>
              <li class="list">
                  <a href="dokter-surat-keterangan.php" class="nav-link">
                      <i class='bx bx-clipboard icon' ></i>
                      <span class="link">Surat Keterangan</span>
                  </a>
              </li>
          </ul>

            <div class="bottom-content">
                <li class="list">
                    <a href="logout.php" class="nav-link">
                        <i class='bx bx-power-off icon' ></i>
                        <span class="link">Logout</span>
                    </a>
                </li>
            </div>
          </div>
      </div>
  </nav>

  <script>
      const navBar = document.querySelector("nav")
        menuBtns = document.querySelectorAll(".menu-icon")
        
        menuBtns.forEach((menuBtns) => {
          menuBtns.addEventListener("click", () => {
              navBar.classList.toggle("open");
          });
        });  
  </script>

  <script>
    $('.drop-link1').click(function(){
      $('nav .sidebar .sb-content .list-down .show1').toogleClass("show");
    }); 
  </script>

  <div class="dashboard">

    <section class="dashboard-profil">
      <div class="profil1">
          <i class='bx bxs-user-circle icon-dashboard'></i>
          <h2>Hi, Nama</h2>
          <p>nama@email.com</p>
          <h3>Jabatan</h3>
      </div>
    </section>

    <section class="dashboard-tabel">
      <div class="profil2">
        <div class="sub-p2">
          <h3>Status</h3>
          <p>Dokter Sipil (PNS)</p>
        </div>
        <div class="sub-p2">
          <h3>Jabatan</h3>
          <p>SP - Penyakit Dalam</p>
        </div>
        <div class="sub-p2">
          <h3>Nomor Induk Pegawai</h3>
          <p>1234567890123</p>
        </div>
      </div>
    </section>

    <section class="tbl-logout">
      <p class="tbl-logout"><a href="logout.php" class="tbl-logout">Log Out</a></p>
    </section>
  </div>

  <footer>Copyright © 2022 - Bhayangkara Hospital</footer>

  </body>
  
</html>
