<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Semua Penilaian</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                    <h2>Sistem Informasi Penilaian Kinerja Guru SMP Negeri 4 Kisaran </h2>
                        <h4>Jl. Pahat Lk. VII, Dadimulyo, Kisaran Barat, Dadimulyo, Kec. Kota Kisaran Barat, <br>Kabupaten Asahan,
                               Sumatera Utara 21264</h4>
                                <hr>
                        <h3>DATA SELURUH PENILAIAN</h3>
                        <table class="table table-bordered table-striped table-hover">
                        <tbody>
                                <thead>
								<tr>
                                <th>No.</th>
                                <th>Nama guru</th>
                                <th>Kedisipilanan</th>
                                <th>Orientasi</th>
                                <th>Kepemimpinan</th>
                                <th>Kerjasama</th>
                                <th>Komitmen</th>
                                <th>Kejujuran</th>
                                </tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tbl_penilaian";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $data['nama_guru'] ?></td>
									<td><?= $data['kedisiplinan'] ?></td>
                                    <td><?= $data['orientasi'] ?></td>
                                    <td><?= $data['kepemimpinan'] ?></td>
                                    <td><?= $data['kerjasama'] ?></td>
                                    <td><?= $data['komitmen'] ?></td>
                                    <td><?= $data['kejujuran'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="8" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Kepala Sekolah<strong></u><br>
                                        NIP.102871291416712
									</td>
								</tr>
							</tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>
