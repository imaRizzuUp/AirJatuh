<?php
include "../components/header.php"
?>



  <link rel="stylesheet" href="../node_modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="../node_modules/weathericons/css/weather-icons.min.css">
  <link rel="stylesheet" href="../node_modules/weathericons/css/weather-icons-wind.min.css">
  <link rel="stylesheet" href="../node_modules/summernote/dist/summernote-bs4.css">

        <section class="section">
          <div class="section-header">
            <h1>Dashboard ADMIN SMA 2 TONDANO</h1>
          </div>
          <div class="section-body mx-4">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
              <form action="" method="post" enctype="multipart/form-data">
                <div class="card">
                  <div class="card-header">
                    <h4>Form Foto Kepsek dan sambutan</h4>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-6 col-lg-6 col-md-6 col-sm-12">
                         <div class="form-group">
                          <label>
                            Foto Kepsek :
                          </label>
                          <input type="file" name="image" class="form-control" >

                          <div class="form-group">
                          <label>
                            Kata Kata sambutan :
                          </label>
                         <textarea rows="3" name="" id="" class="form-control mb-4" ></textarea>

                         <button class="btn btn-primary" type="submit" id="submit" > Simpan </button>
                          
                         </div>
                      </div>
                    </div>
                  </div>
                </div>     
              </form>
              </div>
            </div>
          </div>
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
              <form action="" method="post" enctype="multipart/form-data">
                <div class="card">
                  <div class="card-header">
                    <h4>Form Edit Fasilitas</h4>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-6 col-lg-6 col-md-6 col-sm-12">
                         <div class="form-group">
                          <label>
                            Foto Fasilitas:
                          </label>
                          <input type="file" name="image" class="form-control" >

                          <div class="form-group">
                          <label>
                             Fasilitas :
                          </label>
                         <select name="" id="" class="form-control mb-4">
                         <option> --None-- </option>
                         <option> Lapangan </option>
                         <option> Koridor </option>
                         <option> Ruang Wakil kepala Sekolah </option>
                         <option> Ruang Kepala Sekolah</option>
                         <option> Ruang Unit Kesehatan Sekolah (UKS)</option>
                         <option> Ruang Laboratorium Biologi</option>
                         <option> Ruang Laboratorium Fisika</option>
                         <option> Ruang Laboratorium Kimia</option>
                         <option> Ruang Tata Usaha</option>
                         <option> Ruang Aula</option>
                         <option> Ruang Perpustakan</option>
                         </select>
                         <button class="btn btn-primary" type="submit" id="submit" > Simpan </button>
                         
                         </div>
                      </div>
                    </div>
                  </div>
                </div>     
              </form>
              </div>
            </div>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
              <form action="" method="post" enctype="multipart/form-data">
                <div class="card">
                  <div class="card-header">
                    <h4>Form Edit Statistik</h4>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-6 col-lg-6 col-md-6 col-sm-12">
                       <div class="form-group">
                          <label>
                            Jumlah Siswa 
                          </label>
                          <input type="text" name="" class="form-control mb-4" >
                          <label>
                            Jumlah Guru
                          </label>
                          <input type="text" name="" class="form-control mb-4" >
                          <label>
                            Jumlah Ruang Kelas
                          </label>
                          <input type="text" name="" class="form-control mb-4" >
                         <button class="btn btn-primary" type="submit" id="submit" > Simpan </button>
                         
                         </div>
                      </div>
                    </div>
                  </div>
                </div>     
              </form>
              </div>
            </div>
          </div>
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
              <form action="" method="post" enctype="multipart/form-data">
                <div class="card">
                  <div class="card-header">
                    <h4>Form Edit Social Media</h4>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-6 col-lg-6 col-md-6 col-sm-12">
                       <div class="form-group">
                          <label>
                            Facebook
                          </label>
                          <input type="text" name="" class="form-control mb-4" >
                          <label>
                            Youtube
                          </label>
                          <input type="text" name="" class="form-control mb-4" >
                          <label>
                            Instagram
                          </label>
                          <input type="text" name="" class="form-control mb-4" >
                         <button class="btn btn-primary" type="submit" id="submit" > Simpan </button>
                         
                         </div>
                      </div>
                    </div>
                  </div>
                </div>     
              </form>
              </div>
            </div>
          </div>
        </section>

  <script src="../node_modules/simpleweather/jquery.simpleWeather.min.js"></script>
  <script src="../node_modules/chart.js/dist/Chart.min.js"></script>
  <script src="../node_modules/jqvmap/dist/jquery.vmap.min.js"></script>
  <script src="../node_modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
  <script src="../node_modules/summernote/dist/summernote-bs4.js"></script>
  <script src="../node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
]


  <script src="../assets/js/page/index-0.js"></script>

