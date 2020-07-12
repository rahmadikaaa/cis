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
            <li class="breadcrumb-item active"><a href="<?= base_url('/property/index') ?>">Property </a></li>
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
        <form role="form" action="<?= base_url('property/save') ?>" method="post" enctype="multipart/form-data">
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Kode Properti</label>
              <input type="text" class="form-control" name="property_kode" placeholder="Kode Properti" value="<?= old('property_kode') ?>">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Properti</label>
              <input type="text" value="<?= old('property_nama') ?>" class="form-control  <?= ($validation->hasError('property_nama')) ? 'is-invalid' : ''; ?>" name="property_nama" placeholder="Nama Properti ">
              <div class="invalid-feedback">
                <?= $validation->getError('property_nama'); ?>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Alamat Properti</label>
              <textarea class="form-control" name="property_address" rows="3" placeholder="Alamat Properti"><?= old('property_address') ?></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Fasilitas Properti</label>
              <textarea class="form-control" name="property_facility" rows="3" placeholder="Fasilitas Properti"><?= old('property_facility') ?></textarea>
            </div>
            <label for="exampleInputEmail1">Masukan gambar properti</label>
            <div class="form-group row">
              <div class="col-sm-2">
                <img src="/image_property/1594464019_10fee5c46a5279771a2a.jpg" class="img-thumbnail img-preview" alt="">
              </div>
              <div class="col-sm-10">
                <input type="file" class="form-control  <?= ($validation->hasError('property_picture')) ? 'is-invalid' : ''; ?>" name="property_picture" value="<?= old('property_picture') ?>" id="property_picture" onchange="previewImg()">
                <div class="invalid-feedback">
                  <?= $validation->getError('property_picture'); ?>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Kamar Siap Jual</label>
              <input type="number" class="form-control" name="property_room_occupied" value="<?= old('property_room_occupied') ?>" placeholder="Kamar Siap Jual ">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Kamar Tersisa</label>
              <input type="number" class="form-control" name="property_room_left" value="<?= old('property_room_left') ?>" placeholder="perhitungan otomatis">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Kamar Ditempati</label>
              <input type="number" class="form-control" name="property_room_sellable" value="<?= old('property_room_sellable') ?>" placeholder="Kamar Ditempati">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Harga Perhari</label>
              <input type="text" class="form-control" name="property_room_daily" value="<?= old('property_room_daily') ?>" placeholder="Harga Perhari">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Harga Perminggu</label>
              <input type="text" id="rupiah" class="form-control" name="property_room_weekly" value="<?= old('property_room_weekly') ?>" placeholder="Harga Perminggu">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Harga Perbulan</label>
              <input type="text" id="rupiah" class="form-control" name="property_room_monthly" value="<?= old('property_room_monthly') ?>" placeholder="Harga Perbulan">
            </div>

          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>