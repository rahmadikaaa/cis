<div class="content-wrapper" style="min-height: 1589.56px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tambah Properti</h1>
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
        <h3 class="card-title">Tambah Property</h3>

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
              <label for="exampleInputEmail1">Kode Properti</label>
              <input type="text" class="form-control" name="property_kode" placeholder="Kode Properti " required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Properti</label>
              <input type="text" class="form-control" name="property_nama" placeholder="Nama Properti " required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Alamat Properti</label>
              <textarea class="form-control" name="property_address" rows="3" placeholder="Enter Product Description" required></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Fasilitas Properti</label>
              <textarea class="form-control" name="property_facility" rows="3" placeholder="Enter Product Description" required></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Kamar Siap Jual</label>
              <input type="number" class="form-control" name="property_room_occupied" placeholder="Kamar Siap Jual " required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Kamar Tersisa</label>
              <input type="number" class="form-control" name="property_room_left" placeholder="perhitungan otomatis" disabled required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Kamar Ditempati</label>
              <input type="number" class="form-control" name="property_room_sellable" placeholder=" " required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Harga Perhari</label>
              <input type="text" class="form-control" name="property_room_daily" placeholder="Harga Perhari" id="rupiah" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Harga Perminggu</label>
              <input type="text" id="rupiah" class="form-control" name="property_room_weekly" placeholder="Harga Perminggu" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Harga Perbulan</label>
              <input type="text" id="rupiah" class="form-control" name="property_room_monthly" placeholder="Harga Perbulan" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Sales</label>
              <input type="text" class="form-control" name="property_room_price" placeholder="Sales" id="rupiah" required>
            </div>

          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>