<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokter - Rumah Sakit Bhayangkara</title>
    <link rel="stylesheet" href="dokter-entry-data.css">
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
                      <a href="" class="nav-link">
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

  
<div class="entry">

    <section class="title-entry">
        <button class="back-btn" onclick="">
            <a href="dokter-halaman-visitasi.php">
                <i class='bx bx-left-arrow-circle' ></i>
            </a>
            
        </button>
        <h1>Entry Data Pemeriksaan</h1>
        <h3>Rawat Inap</h3>
    
        <section>
            <div class="box1">
                <table id="table1">
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <tr>
                    <tr>
                        <th>NAMA PASIEN</th>
                        <td>:</td>
                        <td>Lorem Ipsum Dolor Sit</t>
                        <th>TB/BB</th>
                        <td>:</td>
                        <td>170/58</td> 
                    </tr>
                    <tr>
                        <th>USIA</th>
                        <td>:</td>
                        <td>20 tahun</td>
                        <th>DIAGNOSA AWAL</th>
                        <td>:</td>
                        <td>Hepatoblastoma</td> 
                    </tr>
                    <tr>
                        <th>JENIS KELAMIN</th>
                        <td>:</td>
                        <td>Laki-Laki</td>
                        <th>TGL KELUAR</th>
                        <td>:</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <th>TGL MASUK</th>
                        <td>:</td>
                        <td>7/11/2022</td>
                    </tr>
                    <tr>
                        <th>RUANG INAP</th>
                        <td>:</td>
                        <td>BG-201</td>
                    </tr>
                </tr>
                </table>

                <div class="form-entry">
                    <form action="">
                        <div class="form1">
                            <div class="form-entry">
                                <h4>Tanggal visit</h4>
                            <label for=""><input type="text" name="namaPasien"></label>
                            </div>
                            <div class="form-entry">
                                <h4>Waktu visit</h4>
                            <label for=""><input type="text" name="namaPasien"></label>
                            </div>
                            <div class="form-entry">
                                <h4>Perkembangan pasien</h4>
                                <label for=""><input type="text" name="namaPasien"></label>
                            </div>
                            <div class="form-entry">
                                <h4>Tindak Lanjut</h4>
                            <label for=""><input type="text" name="namaPasien"></label>
                            </div>
                        </div>
        
                        <div class="tombol-bawah">
                            <button type="submit">Simpan</button>
                        </div>
                    </form>
                  </div>
              </div>
            </div>

    </section>
</div>

  <footer>Copyright © 2022 - Bhayangkara Hospital</footer>

  </body>
  
</html>