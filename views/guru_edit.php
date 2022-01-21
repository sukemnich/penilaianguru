<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_guru WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Guru</h3>
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
                            <label for="nip" class="col-sm-3 control-label">NIP</label>
                            <div class="col-sm-9">
                                <input type="text" name="nip" value="<?=$data['nip']?>"class="form-control" id="inputEmail3" placeholder="NIP">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="jabatan" class="col-sm-3 control-label">Jabatan</label>
                            <div class="col-sm-9">
                                <input type="text" name="jabatan" value="<?=$data['jabatan']?>"class="form-control" id="inputEmail3" placeholder="Jabatan">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="golongan" class="col-sm-3 control-label">Golongan</label>
                            <div class="col-sm-9">
                                <input type="text" name="golongan" value="<?=$data['golongan']?>"class="form-control" id="inputEmail3" placeholder="Golongan">
                            </div>
                        </div>
						
						
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Guru</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=guru&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Guru
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
    $nip=$_POST['nip'];
	$jabatan=$_POST['jabatan'];
    $golongan=$_POST['golongan'];
	
    
    //buat sql
    $sql="UPDATE tbl_guru SET nama_guru='$nama_guru',nip='$nip',jabatan='$jabatan',golongan='$golongan'
     WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=guru&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



