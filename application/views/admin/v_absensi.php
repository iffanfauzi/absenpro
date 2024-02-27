<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $title ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"><?= $title ?></li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><?= $title ?></h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <p class="text-primary font-weight-bold ">Check In dan Check Out di Lokasi Kantor 1</p>
                        <form role="form" action="" method="POST">
                            <div class="form-group">
                                <label for="exampleInputNama">Nama Karyawan</label>
                                <input id="submittype" type="hidden" name="submit_type" value=""></input>
                                <input type="hidden" name="id_user" value="" id="id_user">
                                <input type="hidden" name="id_atasan" value="">
                                <input type="hidden" name="lat_kantor" value="" id="lat_kantor">
                                <input type="hidden" name="long_kantor" value="" id="long_kantor">
                                <input type="hidden" name="tanggal_absen" value="" id="tanggal_absen" required="">
                                <input type="hidden" name="nama_atasan" value="" required>
                                <input type="text" name="nama_lengkap" class="form-control" id="nama" value="" readonly="">
                                <p class="text-danger"></p>
                            </div>
                            <div class="form-group">
                                <label for="lokasi">Nama Kantor</label>
                                <input type="text" name="lokasi" class="form-control" id="exampleInputNamaKantor" value="" readonly="" id="lokasi">
                                <p class="text-danger"></p>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputTglAbsen">Tanggal</label>
                                <input type="text" class="form-control mb-1" value="" readonly="">
                                <input type="text" class="form-control mt-1" value="" readonly="">
                                <input type="hidden" name="edit_by" value="" required>
                                <p class="text-danger"></p>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputHari">Hari</label>
                                <input type="text" class="form-control" value="" readonly="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputHari">Waktu Indonesia</label>
                                <h4 class="text-primary font-weight-bold text-center">WIB (Waktu Indonesia Barat)</h4>
                                <input type="hidden" name="jenis_waktu" value="WIB" required>
                                <input type="hidden" name="waktu" class="form-control" id="Waktu" value="">
                                <a href="https://logwork.com/current-time-in-bandung-indonesia-jawa-barat-1" class="digital-clock" data-style="flip" data-size="400" data-timezone="Asia/Jakarta" data-language="en">Bandung, Indonesia</a>
                                <p class="text-info">Jam masuk adalah pukul 08:00 AM </p>
                                <p class="text-danger"></p>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputLongtitude">Latitude</label>
                                <input type="text" name="latitude" class="form-control" id="latbox" readonly="">
                                <p class="text-danger"></p>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputLatitude">Longitude</label>
                                <input type="text" name="longitude" class="form-control" id="lngbox" readonly="">
                                <p class="text-danger"></p>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputKeterangan">Keterangan</label>
                                <input type="text" name="keterangan" class="form-control">
                                <p class="text-danger"></p>
                            </div>
                            <div class="row justify-content-center align-items-center mb-2">
                                <p class="text-danger small">Klik tombol Refresh dulu sebelum Check In/Check Out supaya data Tanggal, Waktu, Latitude dan Longitude menyesuaikan dengan data terbaru </p>
                                <button class="btn btn-lg  btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                            </div>
                            <div class="row justify-content-center align-items-center form-inline mt-5 ">
                                <button class="btn btn-lg btn-success btn-huge mr-4 pr-4 mt-4 pt-2" id="CheckIn" onclick="checkin();" type="submit">Check In</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <button class="btn btn-lg btn-danger  btn-huge ml-4 pl-4 mt-4 pt-2" id="CheckOut" onclick="checkout();" type="submit">Check Out</button>
                            </div>
                            <div class="row justify-content-center align-items-center ajuan-absensi mt-5 pt-2">
                                <button type="button" title="Ajuan Absensi" class="btn  btn-info btn-lg mt-4" data-toggle="modal" data-target="#addAjuanAbsensiModal"><i class="fa fa-plus"></i>&nbsp; Ajukan Absensi</button>&nbsp;
                                <p class="text-danger small">Klik Ajukan Absensi jika gagal Check In karena alasan teknis atau karena ada Tugas/Perjalanan Dinas, selanjutnya Ajuan Absensi akan diapprove oleh atasan pemohon dan pihak HRD Umum supaya datanya masuk ke Absensi </p>
                            </div>
                            <div class="row justify-content-center align-items-center mt-2">
                                <a href="" title="tambah ijin" class="btn btn-primary btn-lg "><i class="fa fa-plus"></i>&nbsp; Ajukan Ijin/Sakit/Cuti</a><br>

                            </div>
                            <p class="text-danger small">Klik Ajukan Ijin Absensi untuk Keperluan Cuti, Ijin atau Sakit </p>
                        </form>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-4">
                                <a href="https://logwork.com/current-time-in-bandung-indonesia-jawa-barat" class="clock-time" data-style="default-numeral" data-size="300" data-timezone="Asia/Jakarta">Current time in Bandung, Indonesia</a>
                                <h4 class="text-success font-weight-bold">Hijiryah</h4>
                            </div>
                            <div class="col-md-4">
                                <input type="hidden" name="keterangan_checkin" id="keterangan_checkin" value="Sudah Cekin">
                                <input type="hidden" name="keterangan_checkout" id="keterangan_checkout" value="belum cekout">
                            </div>
                            <div class="col-md-4">
                                <h3 class="text-primary font-weight-bold">Hari dan tanggal</h3>
                                <a href="https://logwork.com/current-time-in-bandung-indonesia-jawa-barat-1" class="digital-clock" data-style="flip" data-size="350" data-timezone="Asia/Jakarta" data-language="en">Bandung, Indonesia</a>
                                <h4 class="text-primary font-weight-bold text-center">WIB (Waktu Indonesia Barat)</h4>
                                <br>
                                <p class="font-weight-bold text-success"><b>hari ini sudah checkin</b></p>
                                <br>
                                <p class="font-weight-bold text-success"><b>hari ini sudah checkout</b></p>
                            </div>
                        </div>
                        <div class="row">
                            <h4>Ini adalah Map</h4>
                            <p class="text-primary small">Klik tombol tap (seperti gambar target panah) dipojok kanan atas map, pastikan posisi anda dekat dengan lokasi kantor , GPS HP diaktifkan , ada jaringan internet/wifi dan menggunakan perangkat HP supaya bisa Check In</p>
                            <div id='map2' style='width: 100%; height: 75vh;'></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
</div>