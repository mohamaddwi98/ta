
    <h1>Upload</h1>
    <hr>
    <?php
    if(!$_SESSION['user']){
      echo '<div class="alert alert-danger">Anda harus login untuk membuka halaman ini.</div>';
    }else{
    ?>
            <p>Upload file Anda dengan melengkapi form di bawah ini. File yang bisa di Upload hanya file dengan ekstensi <b>.mp3, .mp4</b> dan besar file (file size) maksimal hanya 15 MB. Dan Format nama <b>Judul-Artist.Contoh: Fool Again-Westlife</b></p>
            
            <?php
      include('config.php');
      if($_POST["upload"]){
        $allowed_ext  = array('mp3', 'mp4');
        $file_name    = $_FILES['file']['name'];
        $file_ext   = strtolower(end(explode('.', $file_name)));
        $file_size    = $_FILES['file']['size'];
        $file_tmp   = $_FILES['file']['tmp_name'];
        $username   = $_SESSION['user'];
        
        $nama     = $_POST['nama'];
        $tgl      = date("Y-m-d");
        if(in_array($file_ext, $allowed_ext) === true){
          if($file_size < 15000000){
            $lokasi = 'uploads/'.$nama.'.'.$file_ext;
            move_uploaded_file($file_tmp, $lokasi);
            $in = $conn->query("INSERT INTO uploads VALUES(NULL, '$tgl', '$nama', '$file_size', '$file_ext', '$username')");
            if($in){
              echo '<div class="alert alert-success">SUCCESS: File berhasil di Upload!</div>';
            }else{
              echo '<div class="alert alert-danger">ERROR: Gagal upload file!</div>';
            }
          }else{
            echo '<div class="alert alert-danger">ERROR: Besar ukuran file (file size) maksimal 15 Mb!</div>';
          }
        }else{
          echo '<div class="alert alert-danger">ERROR: Ekstensi file tidak di izinkan!</div>';
        }
      }
      ?>

      <form class="form-horizontal" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label class="col-md-4 control-label">Nama File</label>
            <div class="col-md-8">
              <input type="text" name="nama" class="form-control" placeholder="Nama File">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label">Pilih File</label>
            <div class="col-md-8">
              <input type="file" name="file" accept=".mp3,.mp4" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label">&nbsp;</label>
            <div class="col-md-8">
              <input type="submit" name="upload" class="btn btn-primary" value="upload">
            </div>
          </div>
          </div>
        </form>
      </div>

    <?php
    }
    ?>