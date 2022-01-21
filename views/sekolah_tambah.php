<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Sekolah</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="nama_sekolah" class="col-sm-3 control-label">Nama Sekolah</label>
                               <div class="col-sm-9">
                                <input type="text" name="nama_sekolah" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Sekolah" required>
                            </div>

                        </div>
						 <div class="form-group">
                            <label for="npsn" class="col-sm-3 control-label">NPSN</label>
                            <div class="col-sm-9">
                                <input type="text" name="npsn" class="form-control" id="inputEmail3" placeholder="Inputkan NPSN" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">No_HP</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_hp" class="form-control" id="inputEmail3" placeholder="Inputkan No HP" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="kecamatan" class="col-sm-3 control-label">Kecamatan</label>
                            <div class="col-sm-9">
                                <input type="text" name="kecamatan" class="form-control" id="inputEmail3" placeholder="Inputkan Kecamatan" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="kabupaten" class="col-sm-3 control-label">Kabupaten</label>
                            <div class="col-sm-9">
                                <input type="text" name="kabupaten" class="form-control" id="inputEmail3" placeholder="Inputkan Kabupaten" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="provinsi" class="col-sm-3 control-label">Provinsi</label>
                            <div class="col-sm-9">
                                <input type="text" name="provinsi" class="form-control" id="inputEmail3" placeholder="Inputkan Provinsi" required>
                            </div>
                        </div>
                       

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data Sekolah</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=sekolah&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Sekolah
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
  $nama_sekolah=$_POST['nama_sekolah'];
	$npsn=$_POST['npsn'];
	$no_hp=$_POST['no_hp'];
	$kecamatan=$_POST['kecamatan'];
    $kabupaten=$_POST['kabupaten'];
    $provinsi=$_POST['provinsi'];

	
    //buat sql
    $sql="INSERT INTO tbl_sekolah VALUES ('','$nama_sekolah','$npsn','$no_hp','$kecamatan','$kabupaten','$provinsi')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=sekolah&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
