<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Guru</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM tbl_guru WHERE id ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">Ruang Arsip</td> <td><?= $data['nama_guru'] ?></td>
                        </tr>
                        <tr>
                            <td>Nomor Rak/Lemari</td> <td><?= $data['nip'] ?></td>
                        </tr>
                        <tr>
                            <td>Nomor Tingkat/Laci</td> <td><?= $data['jabatan'] ?></td>
                        </tr>
						<tr>
                            <td>Nomor Boks</td> <td><?= $data['golongan'] ?></td>
                        </tr>
                        
                      
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=guru&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Guru </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

