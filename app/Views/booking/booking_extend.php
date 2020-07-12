<div class="content-wrapper" style="min-height: 1589.56px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Extend Booking</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home </a></li>
                        <li class="breadcrumb-item active"><a href="<?= base_url('product') ?>">Product </a></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Extend Booking</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fas fa-times"></i></button>
                </div>
            </div>
            <div class="card-body" style="padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 0px;">
                <form role="form" action="<?= base_url('property/save') ?>" method="post">
                    <div class="card-body">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Sales Executive</label>
                            <!-- <input type="form_dropdown" class="form-control" name="property_nama" placeholder="Nama Properti " required> -->
                            <select class="form-control">
                                <OPTION name="booking_sales">--Pilih Sales Executive--</OPTION>
                                <?php foreach ($admin as $k) : ?>
                                    <option><?= $k['nama_user'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Guest Name / Nama Lengkap Tamu (Sesuai KTP) *
                            </label>
                            <input type="text" class="form-control" name="booking_fullname" placeholder="Guest Name" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Sumber Bisnis</label>
                            <!-- <input type="form_dropdown" class="form-control" name="property_nama" placeholder="Nama Properti " required> -->
                            <select class="form-control">
                                <OPTION name="sumber_id">--Sumber Bisnis--</OPTION>
                                <?php foreach ($sumber as $k) : ?>
                                    <option><?= $k['sumber_nama'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Client Phone Number / Nomor Telepon Tamu</label>
                            <input type="number" class="form-control" name="booking_phone_guess" placeholder="No. Telp " required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Email Adress / Alamat email tamu (Jika tidak ada input email sales executive)</label>
                            <input type="email" class="form-control" name="booking_email_guess" placeholder="Email " required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Lampirkan Foto Dokumen Tamu (KTP / SIM / PASSPORT) *</label>
                            <input type="file" class="form-control" name="gambar" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Properti</label>
                            <!-- <input type="form_dropdown" class="form-control" name="property_nama" placeholder="Nama Properti " required> -->
                            <select class="form-control">
                                <OPTION name="property_id">--Pilih Property--</OPTION>
                                <?php foreach ($booking as $k) : ?>
                                    <option><?= $k['property_nama'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Nominal DP</label>
                            <input type="text" class="form-control" name="property_room_daily" placeholder="Harga Perhari" id="rupiah" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Bukti Pembayaran</label>
                            <input type="text" class="form-control" name="property_room_daily" placeholder="Harga Perhari" id="rupiah" required>
                        </div>


                        <div class="form-group">
                            <label for="exampleInputEmail1">Lampirkan Foto Dokumen Tamu (KTP / SIM / PASSPORT) *</label>
                            <input type="file" class="form-control" name="gambar" required>
                        </div>


                        <div class="form-group">
                            <label for="exampleInputEmail1">Status Pembayaran</label>
                            <!-- <input type="form_dropdown" class="form-control" name="property_nama" placeholder="Nama Properti " required> -->
                            <select class="form-control">
                                <OPTION name="sumber_id">--status--</OPTION>
                                <?php foreach ($sumber as $k) : ?>
                                    <option><?= $k['sumber_nama'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Lease Start Date / Tanggal Check In </label>
                            <input type="date" class="form-control" name="property_room_left" placeholder="perhitungan otomatis" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">End Date / Tanggal Check Out </label>
                            <input type="date" class="form-control" name="property_room_left" placeholder="perhitungan otomatis" required>
                        </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>