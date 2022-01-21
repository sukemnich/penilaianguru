<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Penilaian</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tbl_penilaian WHERE id='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                    <h2>Sistem Informasi Penilaian Kinerja Guru SMP Negeri 4 Kisaran </h2>
                        <h4>Jl. Pahat Lk. VII, Dadimulyo, Kisaran Barat, Dadimulyo, Kec. Kota Kisaran Barat, <br>Kabupaten Asahan,
                               Sumatera Utara 21264</h4> <hr>
                        <h3>DATA PENILAIAN GURU</h3>
                        <table class="table table-bordered table-striped table-hover">
                            <tbody>
								  <tr>
                            <td width="200">Nama Guru</td> <td><?= $data['nama_guru'] ?></td>
                        </tr>
                        <tr>
                            <td>Kedisiplinan</td> <td><?= $data['kedisiplinan'] ?></td>
                        </tr>
                        <tr>
                            <td>Orientasi</td> <td><?= $data['orientasi'] ?></td>
                        </tr>
                        <tr>
                            <td>Kepemimpinan</td> <td><?= $data['kepemimpinan'] ?></td>
                        </tr>
                        <tr>
                            <td>Kerjasama</td> <td><?= $data['kerjasama'] ?></td>
                        </tr>
                        <tr>
                            <td>Komitmen</td> <td><?= $data['komitmen'] ?></td>
                        </tr>
                         <tr>
                            <td>Kejujuran</td> <td><?= $data['kejujuran'] ?></td>
                        </tr>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2" class="text-right">
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
