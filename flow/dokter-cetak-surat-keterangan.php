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
    <link rel="stylesheet" href="dokter-cetak-surat-keterangan.css">
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
     rel="stylesheet"/>
  </head>
  <body>
    <nav>
      <div class="logo">
        <h3>Rumah Sakit Bhayangkara</h3>
      </div>

      <div class="user">
        <a href="">
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
            <a href="">
              <i class='bx bxs-user-circle user-icon'></i>
              <span class="user-name">Username</span>
            </a>
          </div> 

          <div class="sb-content">
              <ul class="lists">
                  <li class="list">
                      <a href="" class="nav-link">
                          <i class='bx bxs-dashboard icon'></i>
                          <span class="link">Dashboard</span>
                      </a>
                  </li>
                  <li class="list">
                      <a href="" class="nav-link">
                          <i class='bx bx-calendar icon' ></i>
                          <span class="link">Kehadiran</span>
                      </a>
                  </li>
                  <li class="list">
                      <a href="" class="nav-link">
                          <i class='bx bx-group icon'></i>
                          <span class="link">Pekerjaan</span>
                          <i class='bx bx-chevron-down icon'></i>
                      </a>
                      <ul>
                        <li><a href="" class="nav-link"><span sub-class="link">Poliklinik</span></a></li>
                        <li><a href="" class="nav-link"><span sub-class="link">Visitasi</span></a></li>
                      </ul>
                  </li>
                  <li class="list">
                      <a href="" class="nav-link">
                          <i class='bx bx-clipboard icon' ></i>
                          <span class="link">Riwayat Pengobatan</span>
                      </a>
                  </li>
                  <li class="list">
                      <a href="" class="nav-link">
                          <i class='bx bx-money icon' ></i>
                          <span class="link">Pembayaran</span>
                      </a>
                  </li>
                  <li class="list">
                      <a href="" class="nav-link">
                          <i class='bx bxs-capsule icon' ></i>
                          <span class="link">Resep Obat</span>
                      </a>
                  </li>
              </ul>

              <div class="bottom-content">
                  <li class="list">
                      <a href="" class="nav-link">
                          <i class='bx bx-cog icon' ></i>
                          <span class="link">Pengaturan</span>
                      </a>
                  </li>
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

  <div class="cetak-resep">
    <section class="back">
        <table>
            <tr>
                <td><a href="dokter-surat-keterangan.php"><i class='bx bx-arrow-back icon'></i></a></td>
                <td><span class="top">Cetak Surat Keterangan</span></td>
            </tr>
        </table>

        <embed src="surat keterangan.pdf" type="application/pdf" class="doc-resep"></embed>

        <div class="button">
            <a href="surat keterangan.pdf" download="surat keterangan.pdf" class="cetak">Cetak</a>
        </div>
    </section>
  </div>

  <footer>2022 - Rumah Sakit Bhayangkara</footer>

  </body>
  
</html>
