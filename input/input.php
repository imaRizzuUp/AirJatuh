<?php

include '../input/components/header.php'

?>


  <form class="well form-horizontal" action=" " method="post"  id="contact_form">
  <fieldset>

  <!-- Form Name -->
  <legend></legend>

  <!-- Text input-->

  
  <section class="section">
   <div class="container mt-5">

  <label class="col-md-4 control-label">Section Berenda:</label>
  <p class="image_upload">
    <label for="userImage">
    <a class="btn btn-warning btn-sm" rel="nofollow"><span class='glyphicon glyphicon-paperclip'></span> Foto Kepsek:</a>
    </label>
  <input type="file" name="userImage" id="userImage">
    </p> 
  <div class="form-group">
          <label for="jumlah_siswa">Judul: </label><br>
          <input type="text" id="jumlah_siswa" name="jumlah_siswa" class="form-control" required>
        </div>
      <p> Kata Kata Kepsek</p>
      <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
            <textarea class=" " name=" " placeholder=" "></textarea>

      </p>      
      </div>
      </div>

    <label class="col-md-4 control-label">Section Fasilitas:</label>
      <p class="image_upload">
        <label for="userImage">
        <a class="btn btn-warning btn-sm" rel="nofollow"><span class='glyphicon glyphicon-paperclip'></span> Foto Lapangan:</a>
        </label>
        <input type="file" name="userImage" id="userImage">
        </p> 
        <a class="btn btn-warning btn-sm" rel="nofollow"><span class='glyphicon glyphicon-paperclip'></span> Foto Koridor:</a>
        </label>
        <input type="file" name="userImage" id="userImage">
        </p> 
        <a class="btn btn-warning btn-sm" rel="nofollow"><span class='glyphicon glyphicon-paperclip'></span> Foto WAKASEK:</a>
        </label>
        <input type="file" name="userImage" id="userImage">
        </p> 
        <a class="btn btn-warning btn-sm" rel="nofollow"><span class='glyphicon glyphicon-paperclip'></span> Foto Ruang UKS:</a>
        </label>
        <input type="file" name="userImage" id="userImage">
        </p> 
        <a class="btn btn-warning btn-sm" rel="nofollow"><span class='glyphicon glyphicon-paperclip'></span> Foto Laboratorium Biolog:</a>
        </label>
        <input type="file" name="userImage" id="userImage">
        </p> 
        <a class="btn btn-warning btn-sm" rel="nofollow"><span class='glyphicon glyphicon-paperclip'></span> Foto Laboratorium Fisika:</a>
        </label>
        <input type="file" name="userImage" id="userImage">
        </p> 
        <a class="btn btn-warning btn-sm" rel="nofollow"><span class='glyphicon glyphicon-paperclip'></span> Foto Laboratorium Kimia:</a>
        </label>
        <input type="file" name="userImage" id="userImage">
        </p> 
        <a class="btn btn-warning btn-sm" rel="nofollow"><span class='glyphicon glyphicon-paperclip'></span> Foto Ruang Kepala sekolah:</a>
        </label>
        <input type="file" name="userImage" id="userImage">
        </p> 
        <a class="btn btn-warning btn-sm" rel="nofollow"><span class='glyphicon glyphicon-paperclip'></span> Foto Ruang Tata Usaha:</a>
        </label>
        <input type="file" name="userImage" id="userImage">
        </p> 
        <a class="btn btn-warning btn-sm" rel="nofollow"><span class='glyphicon glyphicon-paperclip'></span> Foto Aula:</a>
        </label>
        <input type="file" name="userImage" id="userImage">
        </p> 
        <a class="btn btn-warning btn-sm" rel="nofollow"><span class='glyphicon glyphicon-paperclip'></span> Foto Perpustakaan:</a>
        </label>
        <input type="file" name="userImage" id="userImage">
        </p> 
        <a class="btn btn-warning btn-sm" rel="nofollow"><span class='glyphicon glyphicon-paperclip'></span> Foto Koprasi:</a>
        </label>
        <input type="file" name="userImage" id="userImage">
        </p>
        <a class="btn btn-warning btn-sm" rel="nofollow"><span class='glyphicon glyphicon-paperclip'></span> Foto Kantin:</a>
        </label>
        <input type="file" name="userImage" id="userImage">
        </p> 
        <a class="btn btn-warning btn-sm" rel="nofollow"><span class='glyphicon glyphicon-paperclip'></span> Foto Toilet:</a>
        </label>
        <input type="file" name="userImage" id="userImage">
        </p>

      <label class="col-md-4 control-label">Section Statistik dan Section About:</label> 
          <div class="form-group">
            <label for="jumlah_siswa">Jumlah Siswa:</label><br>
            <input type="number" id="jumlah_siswa" name="jumlah_siswa" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="jumlah_guru">Jumlah Guru:</label><br>
            <input type="number" id="jumlah_guru" name="jumlah_guru" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="jumlah_kelas">Jumlah Kelas:</label><br>
            <input type="number" id="jumlah_kelas" name="jumlah_kelas" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="jumlah_kelas">Email</label><br>
            <input type="text" id="jumlah_kelas" name="jumlah_kelas" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="jumlah_kelas">No Tlpn</label><br>
            <input type="text" id="jumlah_kelas" name="jumlah_kelas" class="form-control" required>
          </div>
        <br>
      <label class="col-md-4 control-label">Section Footer(Media sosial):</label>        
        <div class="form-group">
          <label for="jumlah_kelas">Facebook</label><br>
          <input type="text" id="jumlah_kelas" name="jumlah_kelas" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="jumlah_kelas">Instagram</label><br>
          <input type="text" id="jumlah_kelas" name="jumlah_kelas" class="form-control" required>
        </div>  
        <div class="form-group">
          <label for="jumlah_kelas">Youtube</label><br>
          <input type="text" id="jumlah_kelas" name="jumlah_kelas" class="form-control" required>
        </div>     
              



  <!-- Success message -->
  <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

  <!-- Button -->
  <div class="form-group">
    <label class="col-md-4 control-label"></label>
    <div class="col-md-4">
      <button type="submit" class="btn btn-warning" >Simpan <span class="glyphicon glyphicon-send"></span></button>
    </div>
  </div>



  </fieldset>
  </form>
  </div>
  </div>


</section>
 
