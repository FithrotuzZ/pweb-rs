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
    <link rel="stylesheet" href="style_dokter_pemeriksaan.css">
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

  <div class="pemeriksaan">
    <section class="pemeriksaan-line1">
            <a href="dokter-poliklinik.php"><i class='bx bx-left-arrow-circle icon-pemeriksaan'></i></a>
            <div class="box1">
            <h1>Pemeriksaan</h1>
            </div>
    </section>
    
    <section class="pemeriksaan-line2">
        <div class="box2">
          <h2>Entry Data</h2>
  
          <div class="form-periksa">
            <form action="">
                <div class="form1">
                    <div class="form-pemeriksaan">
                        <h4>Nama Pasien</h4>
                    <label for=""><input type="text" name="namaPasien"></label>
                    </div>
                    <div class="form-pemeriksaan">
                        <h4>Usia</h4>
                    <label for=""><input type="text" name="namaPasien"></label>
                    </div>
                    <div class="form-pemeriksaan">
                        <h4>Jenis Kelamin</h4>
                        <div class="select">
                        <select name="form-gender" id="form-gender" >
                            <option selected disabled>Pilih</option>
                            <option value="rawat-jalan">Laki-laki</option>
                            <option value="rawat-inap">Perempuan</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-pemeriksaan">
                        <h4>TB/BB</h4>
                    <label for=""><input type="text" name="namaPasien"></label>
                    </div>
                    <div class="form-pemeriksaan">
                        <h4>TD</h4>
                    <label for=""><input type="text" name="namaPasien"></label>
                    </div>
                    <div class="form-pemeriksaan">
                        <label for="">Diagnosis</label>
                        <textarea name="" id="" rows="5" placeholder="Masukkan diagnosis..."></textarea>
                    </div>
                    <div class="form-pemeriksaan">
                        <label for="">Tindak Lanjut</label>
                        <textarea name="" id="" rows="5" placeholder="Masukkan tindak lanjut..."></textarea>
                    </div>
                    
                </div>

                <div class="tombol-bawah">
                    <a href="dokter_riwayatperiksa.php">Lihat Riwayat Pasien</a>
                    <button type="submit">Simpan</button>
                </div>
            </form>
            
          </div>
        </div>
    </section>

    <section class="pemeriksaan-line3">
        <div class="box3">
            <h2>Buat Resep Obat</h2>
    
            <div class="form-periksa">
              <form action="">
                  <div class="form1">
                      <div class="form-pemeriksaan">
                          <h4>Nama Pasien</h4>
                      <label for=""><input type="text" name="namaPasien"></label>
                      </div>
    
                      <div class="form-pemeriksaan">
                          <h4>Nama Obat</h4>
                      <label for=""><input type="text" name="namaPasien"></label>
                      </div>
    
                      <div class="form-pemeriksaan">
                        <h4>Aturan Minum</h4>
                      <label for=""><input type="text" name="namaPasien"></label>
                      </div>
    
                      <div class="form-pemeriksaan">
                        <h4>Dosis</h4>
                      <label for=""><input type="text" name="namaPasien"></label>
                      </div>
                      <div class="form-pemeriksaan">
                        <h4>Unit</h4>
                      <label for=""><input type="text" name="namaPasien"></label>
                      </div>
                      <div class="form-pemeriksaan">
                        <h4>Jumlah</h4>
                      <label for=""><input type="text" name="namaPasien"></label>
                      </div>
                  </div>
    
                  <div class="tombol-bawah">
                      <button type="submit">Simpan</button>
                  </div>
    
                  <div class="tabel-resep">
                    <table>
                        <tr>
                            <th>Nama Obat</th>
                            <th>Dosis</th>
                            <th>Aturan Minum</th>
                            <th>Unit</th>
                            <th>Jumlah</th>
                        </tr>
                        <tr>   
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>   
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>   
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>   
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                  </div>
    
                  <div class="tombol-bawah">
                    <a href="dokter-cetak-resep.php" class="button">Cetak Resep</a>
                </div>
    
              </form>
              
            </div>
          </div>
    </section>

    <section class="pemeriksaan-line4">
        <div class="box4">
            <h2>Buat Rujukan</h2>
    
            <div class="form-periksa">
              <form action="">
                  <div class="form1">
                        <h3>Tujuan</h3>
                      <div class="form-pemeriksaan">
                          <h4>Nama Dokter Ahli</h4>
                      <label for=""><input type="text" name="namaPasien"></label>
                      </div>
                      <div class="form-pemeriksaan">
                          <h4>Rumah Sakit</h4>
                      <label for=""><input type="text" name="namaPasien"></label>
                      </div>

                      <h3>Data Pasien</h3>
                      <div class="form-pemeriksaan">
                          <h4>Nama Pasien</h4>
                      <label for=""><input type="text" name="namaPasien"></label>
                      </div>
                      <div class="form-pemeriksaan">
                        <h4>Jenis Kelamin</h4>
                        <div class="select">
                        <select name="form-gender" id="form-gender" >
                            <option selected disabled>Pilih</option>
                            <option value="rawat-jalan">Laki-laki</option>
                            <option value="rawat-inap">Perempuan</option>
                        </select>
                        </div>
                    </div>
                      <div class="form-pemeriksaan">
                          <h4>Usia</h4>
                      <label for=""><input type="text" name="namaPasien"></label>
                      </div>

                      <h3>Keterangan</h3>
                      <div class="form-pemeriksaan">
                        <label for="">ANAMNESE</label>
                        <textarea name="" id="" rows="5" placeholder="Masukkan diagnosis..."></textarea>
                      </div>
                      <div class="form-pemeriksaan">
                        <label for="">PEMERIKSAAN FISIK</label>
                        <textarea name="" id="" rows="5" placeholder="Masukkan diagnosis..."></textarea>
                      </div>
                      <div class="form-pemeriksaan">
                        <label for="">DIAGNOSA SEMENTARA</label>
                        <textarea name="" id="" rows="5" placeholder="Masukkan diagnosis..."></textarea>
                      </div>
                      
                  </div>
  
                  <div class="tombol-bawah">
                    <a href="dokter-cetak-rujukan.php" class="button">Cetak Rujukan</a>
                  </div>
              </form>
              
            </div>
          </div>
    </section>

  </div>

  <footer>Copyright © 2022 - Bhayangkara Hospital</footer>

  </body>
  
</html>
