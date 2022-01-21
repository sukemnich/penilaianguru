<?php 
$sql = "SELECT * FROM tbl_penilaian";
$query = mysqli_query($koneksi, $sql) or die ("SQL Anda Salah");
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Tambah Data Penilaian Guru</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="nama_guru" class="col-sm-3 control-label">Nama Guru</label>
                            <div class="col-sm-9">
								<select type="text" name="nama_guru" class="form-control" id="inputEmail3" >
                                    <?php 
                                    while ($data = mysqli_fetch_array($query)) { ?> 
                                <option value="<?= $data['nama_guru'] ?>"><?= $data['nama_guru'] ?> </option>
                                <?php
                                }
                                ?>
                                </select>
                            </div>
                        </div>

						<div class="form-group">
                            <label for="kedisiplinan" class="col-sm-3 control-label">Kedisiplinan</label>
                            <div class="col-sm-9">
                                <input type="text" name="kedisiplinan" class="form-control" id="inputEmail3" placeholder="Input Kedisiplinan">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="orientasi" class="col-sm-3 control-label">Orientasi</label>
                             <div class="col-sm-9">
                                 <input type="text" name="orientasi" class="form-control" id="inputEmail3" placeholder="Input Orientasi">
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="kepemimpinan" class="col-sm-3 control-label">Kepemimpinan</label>
                            <div class="col-sm-9">
                                <input type="text" name="kepemimpinan" class="form-control" id="inputEmail3" placeholder="Input Kepemimpinan">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="kerjasama" class="col-sm-3 control-label">Kerja Sama</label>
                            <div class="col-sm-9">
                                <input type="text" name="kerjasama" class="form-control" id="inputEmail3" placeholder="Input Kerja Sama">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="komitmen" class="col-sm-3 control-label">Komitmen</label>
                            <div class="col-sm-9">
                                <input type="text" name="komitmen" class="form-control" id="inputEmail3" placeholder="Input Komitmen">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="kejujuran" class="col-sm-3 control-label">Kejujuran</label>
                            <div class="col-sm-9">
                                <input type="text" name="kejujuran" class="form-control" id="inputEmail3" placeholder="Input Kejujuran">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Penilaian</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=penilaian&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Penilaian
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $nama_guru=$_POST['nama_guru'];
	$kedisiplinan=$_POST['kedisiplinan'];
	$orientasi=$_POST['orientasi'];
    $kepemimpinan=$_POST['kepemimpinan'];
    $kerjasama=$_POST['kerjasama'];
    $komitmen=$_POST['komitmen'];
    $kejujuran=$_POST['kejujuran'];

    //buat sql
    $sql="INSERT INTO tbl_penilaian VALUES ('','$nama_guru','$kedisiplinan','$orientasi','$kepemimpinan','$kerjasama','$komitmen','$kejujuran')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Penilaian Error");
    if ($query){
        echo "<script>window.location.assign('?page=penilaian&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
