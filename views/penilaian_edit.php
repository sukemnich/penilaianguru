<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_penilaian WHERE id='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Data Penilaian</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="nama_guru" class="col-sm-3 control-label">Nama Guru</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_guru" value="<?=$data['nama_guru']?>"class="form-control" id="inputEmail3" placeholder="Nama Guru">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="kedisiplinan" class="col-sm-3 control-label">Kedisiplinan</label>
                            <div class="col-sm-9">
                                <input type="text" name="kedisiplinan" value="<?=$data['kedisiplinan']?>"class="form-control" id="inputEmail3" placeholder="Kedisiplinan">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="orientasi" class="col-sm-3 control-label">Orientasi</label>
                            <div class="col-sm-9">
                                <input type="text" name="orientasi" value="<?=$data['orientasi']?>"class="form-control" id="inputEmail3" placeholder="Orientasi">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="kepemimpinan" class="col-sm-3 control-label">Kepemimpinan</label>
                            <div class="col-sm-9">
                                <input type="text" name="kepemimpinan" value="<?=$data['kepemimpinan']?>"class="form-control" id="inputEmail3" placeholder="Kepemimpinan">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="kerjasama" class="col-sm-3 control-label">Kerjasama</label>
                            <div class="col-sm-9">
                                <input type="text" name="kerjasama" value="<?=$data['kerjasama']?>"class="form-control" id="inputEmail3" placeholder="Kerjasama">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="komitmen" class="col-sm-3 control-label">Komitmen</label>
                            <div class="col-sm-9">
                                <input type="text" name="komitmen" value="<?=$data['komitmen']?>"class="form-control" id="inputEmail3" placeholder="Komitmen">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="kejujuran" class="col-sm-3 control-label">Kejujuran</label>
                            <div class="col-sm-9">
                                <input type="text" name="kejujuran" value="<?=$data['kejujuran']?>"class="form-control" id="inputEmail3" placeholder="Kejujuran">
                            </div>
                        </div>
						
						<!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                      
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Penilaian</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=penilaian&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Pinjaman
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
		$orientasi =$_POST['orientasi'];
		$kepemimpinan =$_POST['kepemimpinan'];
		$kerjasama =$_POST['kerjasama'];
		$komitmen =$_POST['komitmen'];
		$kejujuran =$_POST['kejujuran'];
		
    //buat sql
       $sql="UPDATE tbl_penilaian SET nama_guru='$nama_guru',kedisiplinan='$kedisiplinan',orientasi='$orientasi',kepemimpinan='$kepemimpinan'
       ,kerjasama='$kerjasama',komitmen='$komitmen',kejujuran='$kejujuran'
     WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=penilaian&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>




