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
    <link rel="stylesheet" href="dokter-surat-keterangan.css">
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
                    <a href="dokter-surat-keterangan.php" class="nav-link">
                        <i class='bx bx-clipboard icon' ></i>
                        <span class="link">Surat Keterangan</span>
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

  <div class="pemeriksaan">
    <section class="pemeriksaan-line1">
            <div class="box1">
            <h1>Buat Surat Keterangan</h1>
            </div>
    </section>
     
    <section class="pemeriksaan-line2">
          <div class="form-periksa">
            <form action="">
                <div class="form1">
                    <div class="form-pemeriksaan">
                        <h4>Tujuan</h4>
                    <label for=""><input type="text" name="namaPasien"></label>
                    </div>
                    <div class="form-pemeriksaan">
                        <h4>Nama Pasien</h4>
                    <label for=""><input type="text" name="namaPasien"></label>
                    </div>
                    <div class="form-pemeriksaan">
                        <h4>Umur</h4>
                    <label for=""><input type="text" name="namaPasien"></label>
                    </div>
                    <div class="form-pemeriksaan">
                        <h4>Pekerjaan</h4>
                    <label for=""><input type="text" name="namaPasien"></label>
                    </div>
                    <div class="form-pemeriksaan">
                        <h4>Alamat</h4>
                    <label for=""><input type="text" name="namaPasien"></label>
                    </div>
                    <div class="tabel">
                        <tr>
                            <td><h3>Lama istirahat</h3></td>
                            <td>Mulai</td>
                            <td><label for=""><input type="text" name="namaPasien" width="50px"></label></td>
                            <td>Selesai</td>
                            <td><label for=""><input type="text" name="namaPasien" width="50px"></label></td>
                        </tr>
                        <h4></h4>
                    </div>
                </div>

                <div class="tombol-bawah">
                    <a href="dokter-cetak-surat-keterangan.php" class="button">Cetak</a>
                </div>
            </form>
            
          </div>
        </div>
    </section>


  </div>

  <footer>Copyright © 2022 - Bhayangkara Hospital</footer>

  </body>
  
</html>
