<?php 
require 'function_visitasi.php';
$pasien = query("SELECT * FROM pasien_visitasi");
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokter - Rumah Sakit Bhayangkara</title>
    <link rel="stylesheet" href="dokter-halaman-visitasi.css">
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
                      <a href="dokter-login.php" class="nav-link">
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

  
<div class="visitasi">

    <section class="title-visitasi">
        <h1>Visitasi Pasien</h1>
        <h3>Rawat Inap</h3>
    </section>

    <section class="jml-pasien">
        <div class="tgl">
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
        <div class="jml-sekarang">
            <h3>Jumlah Pasien Anda</h3>
            <p>21</p>
        </div>
    </section>


    <section class="table-visit">
        <div class="box1">
            <h2>Jadwal Visitasi Dokter</h2>
            <div class="box2">
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
            
            <div class="daftar-pasien"> 
            <table>
                <tr>
                    <th>No</th>
                    <th>Nama Pasien</th>
                    <th>Usia</th>
                    <th>Jenis Kelamin</th>
                    <th>Diagnosis</th>
                    <th>Laporan Perkembangan</th>
                    <th>Hasil Visit</th>
                    <th>Status</th>
                </tr>
                <?php foreach($pasien as $row) : ?>   
                <tr>
                    <td><?= $row["id_pasien"]; ?></td>
                    <td><?= $row["nama_pasien"]; ?></td>
                    <td><?= $row["usia"]; ?></td>
                    <td><?= $row["jenis_kelamin"]; ?></td>
                    <td><?= $row["diagnosa"]; ?></td>
                    <td><button class="laporan-btn" onclick="">
                            <a href="dokter-laporan-perkembangan-inap.php">LIHAT LAPORAN</a>
                        </button></td>
                    <td><button class="entry-btn" onclick="">
                            <a href="dokter-entry-data.php">ENTRY DATA</a>
                        </button></td>
                    <td><?= $row["status_pasien"]; ?></td>
                </tr>
                <?php endforeach; ?>    
            </table>
            </div>
        </div>

    </section>

</div>

  <footer>Copyright © 2022 - Bhayangkara Hospital</footer>

  </body>
  
</html>