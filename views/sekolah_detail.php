<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Sekolah</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM tbl_sekolah WHERE id='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">Nomor Perkara</td> <td><?= $data['nama_sekolah'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Peminjam</td> <td><?= $data['npsn'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Pinjam</td> <td><?= $data['no_hp'] ?></td>
                        </tr>
						<tr>
                            <td>Tanggal Kembali</td> <td><?= $data['kecamatan'] ?></td>
                        </tr>
                        <tr>
                            <td>Lama Pinjam</td> <td><?= $data['kabupaten'] ?></td>
                        </tr>
						<tr>
                            <td>Keterangan</td> <td><?= $data['provinsi'] ?></td>
                        </tr>
                        
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=sekolah&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Sekolah </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

