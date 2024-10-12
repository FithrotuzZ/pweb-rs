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
    <link rel="stylesheet" href="style_dokter_jadwalpoli.css">
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
                    <a href="sur" class="nav-link">
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

  <div class="jadwalpoli">
    <section class="jadwalpoli-line1">
    <div class="box1">
        <a href="dokter-poliklinik.php">
        <i class='bx bx-left-arrow-circle icon1' ></i>
        </a>
    </div>
    <div class="box2">
        <h1>Poliklinik</h1>
        <p>Penyakit Dalam</p>
    </div>
        
    </section>
    
    <section class="jadwalpoli-line2">
        <div class="box3">
          <h2>Jadwal Dokter Poliklinik</h2>
            <h3>Poliklinik Penyakit Dalam</h3>
  
          <div class="tabel-jadwal-poliklinik">
            <table>
                <tr>
                    <th>HARI</th>
                    <th>JAM</th>
                    <th>DOKTER</th>
                </tr>
                <tr>
                    <td>Senin</td>
                    <td>
                        <ul class="tbl-jam">07.00 - 12.00</ul>
                        <ul class="tbl-jam">12.00 - 15.30</ul>
                    </td>
                    <td>
                    <ul>dr. A, Sp.PD</ul>
                    <ul>dr. B, Sp. PD</ul>
                    </td>
                    <td><button>Edit</button></td>
                </tr>
                <tr>
                    <td>Selasa</td>
                    <td>
                        <ul class="tbl-jam">07.00 - 12.00</ul>
                        <ul class="tbl-jam">12.00 - 15.30</ul>
                    </td>
                    <td>
                        <ul>dr. A, Sp.PD</ul>
                        <ul>dr. B, Sp. PD</ul>
                    </td>
                    <td><button>Edit</button></td>
                </tr>
                <tr>
                    <td>Rabu</td>
                    <td>
                        <ul class="tbl-jam">07.00 - 12.00</ul>
                        <ul class="tbl-jam">12.00 - 15.30</ul>
                    </td>
                    <td>
                        <ul>dr. A, Sp.PD</ul>
                        <ul>dr. B, Sp. PD</ul>
                    </td>
                    <td><button>Edit</button></td>
                </tr>

                <tr>
                    <td>Kamis</td>
                    <td>
                        <ul class="tbl-jam">07.00 - 12.00</ul>
                        <ul class="tbl-jam">12.00 - 15.30</ul>
                    </td>
                    <td>
                        <ul>dr. A, Sp.PD</ul>
                        <ul>dr. B, Sp. PD</ul>
                    </td>
                    <td><button>Edit</button></td>
                </tr>

                <tr>
                    <td>Jumat</td>
                    <td>
                        <ul class="tbl-jam">07.00 - 12.00</ul>
                        <ul class="tbl-jam">12.00 - 15.30</ul>
                    </td>
                    <td>
                        <ul>dr. A, Sp.PD</ul>
                        <ul>dr. B, Sp. PD</ul>
                    </td>
                    <td><button>Edit</button></td>
                <tr>  
                    <td>Sabtu</td>
                    <td>
                        <ul class="tbl-jam">07.00 - 12.00</ul>
                        <ul class="tbl-jam">-</ul>
                    </td>
                    <td>
                        <ul>dr. A, Sp.PD</ul>
                        <ul>-</ul>
                    </td>
                    <td><button>Edit</button></td>
                </tr>
                <tr>   
                    <td>Minggu</td>
                    <td>
                        <ul class="tbl-jam">07.00 - 12.00</ul>
                        <ul class="tbl-jam">-</ul>
                    </td>
                    <td>
                        <ul>dr. A, Sp.PD</ul>
                        <ul>-</ul>
                    </td>
                    <td><button>Edit</button></td>
                </tr>
            </table>
          </div>
        </div>
    </section>

  </div>

  <footer>Copyright © 2022 - Bhayangkara Hospital</footer>

  </body>
  
</html>
