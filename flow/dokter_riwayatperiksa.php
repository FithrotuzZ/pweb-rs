<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokter - Rumah Sakit Bhayangkara</title>
    <link rel="stylesheet" href="style_dokter_riwayatperiksa.css">
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

  <div class="riwayat-periksa">
    <section class="riwayat-line1">
            <a href="dokter-pemeriksaan.php"><i class='bx bx-left-arrow-circle icon-pemeriksaan'></i></a>
            <div class="box1">
            <h1>Riwayat Pemeriksaan Pasien</h1>
            </div>
    </section>
    
    <section class="riwayat-line2">
        <div class="box2">
          <table>
            <tr>
              <td>NAMA PASIEN</td>
              <td>:</td>
              <td>Lorem Ipsum Dolor Sit Amet</td>
            </tr>
            <tr>
              <td>USIA</td>
              <td>:</td>
              <td>20 tahun</td>
            </tr>
            <tr>
              <td>JENIS KELAMIN</td>
              <td>:</td>
              <td>Laki-laki</td>
            </tr>
            <tr>
              <td>NOMOR PASIEN</td>
              <td>:</td>
              <td>123456789</td>
            </tr>
          </table>
        </div>
        <div class="box3">
          <table>
            <tr>
                <th>Tanggal Pemeriksaan</th>
                <th>Diagnosis</th>
                <th>Tindak Lanjut</th>
                <th>Dokter</th>
            </tr>
            <tr>   
                <td>29/11/2022</td>
                <td>Flu ringan</td>
                <td>Minum obat</td>
                <td>dr. Anna Widyana Sari</td>
            </tr>
            <tr>   
              <td>19/10/2022</td>
              <td>Flu ringan</td>
              <td>Minum obat</td>
              <td>dr. Anna Widyana Sari</td>
          </tr>
            <tr>   
              <td>9/9/2022</td>
              <td>Flu ringan</td>
              <td>Minum obat</td>
              <td>dr. Anna Widyana Sari</td>
          </tr>
          <tr>   
              <td>2/8/2022</td>
              <td>Flu ringan</td>
              <td>Minum obat</td>
              <td>dr. Anna Widyana Sari</td>
            </tr>
        </table>
        </div>
    </section>

  </div>

  <footer>Copyright © 2022 - Bhayangkara Hospital</footer>

  </body>
  
</html>
