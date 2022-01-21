<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_sekolah WHERE id='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Data Sekolah</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="nama_sekolah" class="col-sm-3 control-label">Nama Sekolah</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_sekolah" value="<?=$data['nama_sekolah']?>"class="form-control" id="inputEmail3" placeholder="Nama Sekolah">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="npsn" class="col-sm-3 control-label">NPSN</label>
                            <div class="col-sm-9">
                                <input type="text" name="npsn" value="<?=$data['npsn']?>"class="form-control" id="inputEmail3" placeholder="NPSN">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">No Handphone</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_hp" value="<?=$data['no_hp']?>"class="form-control" id="inputEmail3" placeholder="No Handphone">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="kecamatan" class="col-sm-3 control-label">Kecamatan</label>
                            <div class="col-sm-9">
                                <input type="text" name="kecamatan" value="<?=$data['kecamatan']?>"class="form-control" id="inputEmail3" placeholder="Kecamatan">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="kabupaten" class="col-sm-3 control-label">Kabupaten</label>
                            <div class="col-sm-9">
                                <input type="text" name="kabupaten" value="<?=$data['kabupaten']?>"class="form-control" id="inputEmail3" placeholder="Kabupaten">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="provinsi" class="col-sm-3 control-label">Provinsi</label>
                            <div class="col-sm-9">
                                <input type="text" name="provinsi" value="<?=$data['provinsi']?>"class="form-control" id="inputEmail3" placeholder="Provinsi">
                            </div>
                        </div>
                        
						
						<!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                      
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Sekolah</button>
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
		$no_hp =$_POST['no_hp'];
		$kecamatan =$_POST['kecamatan'];
		$kabupaten =$_POST['kabupaten'];
		$provinsi =$_POST['provinsi'];
	
		
    //buat sql
       $sql="UPDATE tbl_sekolah SET nama_sekolah='$nama_sekolah',npsn='$npsn',no_hp='$no_hp',kecamatan='$kecamatan'
       ,kabupaten='$kabupaten',provinsi='$provinsi'
     WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=sekolah&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>




