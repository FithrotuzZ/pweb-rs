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
    <link rel="stylesheet" href="style_dokter_kehadiran.css">
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

  <div class="kehadiran">

    <section class="kehadiran-line1">
      <i class='bx bxs-user-circle icon-kehadiran'></i>
      <div class="box1">
        <a>Hi, Nama</a>
      </div>
    </section>

    <section class="kehadiran-line2">
      <div class="box2">
        <div class="baris1">
          <h1>Status Kehadiran Anda</h1>
          <p>HADIR</p>
        </div>
        <div class="baris2">
          <h2>Catatan Kehadiran</h2>
          <a>Kamis, 10 November 2022</a><br>
          <a>07:18:24</a>
        </div>
      </div>
      <div class="box3">
        <h2>SOP Kehadiran Pegawai</h2>
        <div class="sop-pegawai">
          <ol>
            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Integer eget aliquet nibh praesent tristique magna sit amet.</li>
            <li>Vulputate mi sit amet mauris commodo quis imperdiet. Dolor purus non enim praesent. Pellentesque habitant morbi tristique senectus. Ornare aenean euismod elementum nisi quis eleifend quam.</li>
            <li>Urna id volutpat lacus laoreet non curabitur gravida arcu ac. Volutpat commodo sed egestas egestas fringilla phasellus faucibus scelerisque eleifend. Est velit egestas dui id ornare arcu odio ut.</li>
            <li>Netus et malesuada fames ac turpis egestas. Euismod in pellentesque massa placerat duis ultricies lacus sed turpis. Molestie nunc non blandit massa enim. Integer eget aliquet nibh praesent tristique magna.</li>
            <li>Integer eget aliquet nibh praesent tristique magna. At ultrices mi tempus imperdiet nulla malesuada pellentesque elit eget. Non pulvinar neque laoreet suspendisse interdum consectetur libero. Amet commodo nulla facilisi nullam vehicula ipsum a arcu. Lacus vestibulum sed arcu non odio.</li>
          </ol>
        </div>
      </div>
    </section>

    <section class="kehadiran-line3">
      <div class="box4">
        <h2>Riwayat Kehadiran</h2>
    
        <div class="tabel-kehadiran">
          <table>
            <tr>
              <th>NO</th>
              <th>HARI</th>
              <th>TANGGAL</th>
              <th>JAM</th>
              <th>STATUS KEHADIRAN</th>
              <th>PEKERJAAN</th>
            </tr>
            <tr>
              <td>1</td>
              <td>Senin</td>
              <td>1-11-2022</td>
              <td>08.00 - 12.00</td>
              <td>Hadir</td>
              <td>Visitasi</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Selasa</td>
              <td>2-11-2022</td>
              <td>08.00 - 12.00</td>
              <td>Hadir</td>
              <td>Poliklinik</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Rabu</td>
              <td>1-11-2022</td>
              <td>08.00 - 12.00</td>
              <td>Hadir</td>
              <td>Poliklinik</td>
            </tr>
            <tr>
              <td>4</td>
              <td>Kamis</td>
              <td>1-11-2022</td>
              <td>12.00 - 16.00</td>
              <td>Hadir</td>
              <td>Visitasi</td>
            </tr>
            <tr>
              <td>5</td>
              <td>Jumat</td>
              <td>1-11-2022</td>
              <td>12.00 - 16.00</td>
              <td>Hadir</td>
              <td>Visitasi</td>
            </tr>
          </table>
        </div>
      </div>
    </section>
  </div> 
   
  <footer>Copyright © 2022 - Bhayangkara Hospital</footer>

  </body>
  
</html>
