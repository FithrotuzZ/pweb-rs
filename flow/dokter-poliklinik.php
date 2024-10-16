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
    <link rel="stylesheet" href="style_dokter_poliklinik.css">
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

  <div class="poli">

    <section class="poli-line1">
      <div class="box1">
        <h1>Poliklinik</h1>
        <p>Penyakit Dalam</p>
      </div>
      <div class="box2">
        <a href="dokter-jadwalpoli.php">Lihat Jadwal Kerja</a>
      </div>
    </section>

    <section class="poli-line2">
      <div class="box3">
        <h2>Jumlah Pasien Rawat Inap</h2>
        <p><span id="tanggalwaktu"></span></p>
            <script>
                var tw = new Date();
                if (tw.getTimezoneOffset() == 0) (a=tw.getTime() + ( 7 *60*60*1000))
                else (a=tw.getTime());
                tw.setTime(a);
                var tahun= tw.getFullYear ();
                var hari= tw.getDay ();
                var bulan= tw.getMonth ();
                var tanggal= tw.getDate ();
                var hariarray=new Array("Minggu,","Senin,","Selasa,","Rabu,","Kamis,","Jum'at,","Sabtu,");
                var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember");
                document.getElementById("tanggalwaktu").innerHTML = hariarray[hari]+" "+tanggal+" "+bulanarray[bulan]+" "+tahun;
            </script>
      </div>
      <section class="box4">
        <div class="box4-1">
          <h3>Total Pasien</h3>
          <p>40</p>
        </div>
      </section>
    </section>

    <section class="poli-line3">
      <div class="box5">
        <h2>Daftar Pasien Hari Ini</h2>
        <div class="box5-1">
          <h3>Hari, Tanggal</h3>
          <p><span id="tanggal-waktu"></span></p>
            <script>
                var tw = new Date();
                if (tw.getTimezoneOffset() == 0) (a=tw.getTime() + ( 7 *60*60*1000))
                else (a=tw.getTime());
                tw.setTime(a);
                var tahun= tw.getFullYear ();
                var hari= tw.getDay ();
                var bulan= tw.getMonth ();
                var tanggal= tw.getDate ();
                var hariarray=new Array("Minggu,","Senin,","Selasa,","Rabu,","Kamis,","Jum'at,","Sabtu,");
                var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember");
                document.getElementById("tanggal-waktu").innerHTML = hariarray[hari]+" "+tanggal+" "+bulanarray[bulan]+" "+tahun;
            </script>
        </div>

        <div class="tabel-daftar-pasien">
          <table>
            <tr>
              <th>NO</th>
              <th>NAMA PASIEN</th>
              <th>USIA</th>
              <th>JENIS KELAMIN</th>
              <th>KETERANGAN</th>
              <th>STATUS</th>
            </tr>
            <tr>
              <td>1</td>
              <td>Lorem ipsum</td>
              <td>20</td>
              <td>L</td>
              <td>
                <a href="dokter-pemeriksaan.php">Periksa Pasien</a>
              </td>
              <td>Belum</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Lorem ipsum</td>
              <td>20</td>
              <td>L</td>
              <td>
                <a href="dokter-pemeriksaan.php">Periksa Pasien</a>
              </td>
              <td>Belum</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Lorem ipsum</td>
              <td>20</td>
              <td>L</td>
              <td>
                <a href="dokter-pemeriksaan.php">Periksa Pasien</a>
              </td>
              <td>Belum</td>
            </tr>
            <tr>
              <td>4</td>
              <td>Lorem ipsum</td>
              <td>20</td>
              <td>L</td>
              <td>
                <a href="dokter-pemeriksaan.php">Periksa Pasien</a>
              </td>
              <td>Sudah</td>
            </tr>
            <tr>
              <td>5</td>
              <td>Lorem ipsum</td>
              <td>20</td>
              <td>L</td>
              <td>
                <a href="dokter-pemeriksaan.php">Periksa Pasien</a>
              </td>
              <td>Sudah</td>
            </tr>
          </table>
        </div>
      </div>
    </section>

  </div>

  <footer>Copyright © 2022 - Bhayangkara Hospital</footer>

  </body>
  
</html>
