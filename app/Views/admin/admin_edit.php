<div class="content-wrapper" style="min-height: 1589.56px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Product Edit</h1>
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
        <h3 class="card-title">Property Add</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
      </div>
      <div class="card-body" style="padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 0px;">
        <form role="form" action="<?= base_url('property/update/' . $property['property_id']) ?>" method="post">
          <div class="card-body">
            <!-- <div class="form-group">
              <label for="exampleInputEmail1">Product Name</label>
              <input type="text" class="form-control" name="property_nama" value="<?= $property['property_nama'] ?>" placeholder="Enter email " required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Product Description</label>
              <textarea class="form-control" name="property_kode" rows="3" placeholder="Enter property Description" required> <?= $property['property_kode'] ?> </textarea>
            </div> -->
            <div class="form-group">
              <label for="exampleInputEmail1">Kode Properti</label>
              <input type="text" class="form-control" name="property_kode" value="<?= $property['property_kode'] ?>" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Properti</label>
              <input type="text" class="form-control" name="property_nama" value="<?= $property['property_nama'] ?>" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Alamat Properti</label>
              <textarea class="form-control" name="property_address" rows="3" required><?= $property['property_address'] ?></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Fasilitas Properti</label>
              <textarea class="form-control" name="property_facility" rows="3" required><?= $property['property_facility'] ?></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Kamar Siap Jual</label>
              <input type="number" class="form-control" name="property_room_occupied" value="<?= $property['property_room_occupied'] ?>" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Kamar Tersisa</label>
              <input type="number" class="form-control" name="property_room_left" value="<?= $property['property_room_left'] ?>" disabled required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Kamar Ditempati</label>
              <input type="number" class="form-control" name="property_room_sellable" value="<?= $property['property_room_sellable'] ?>" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Harga Perhari</label>
              <input type="number" class="form-control" name="property_room_daily" value="<?= $property['property_room_daily'] ?>" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Harga Perminggu</label>
              <input type="number" class="form-control" name="property_room_weekly" value="<?= $property['property_room_weekly'] ?>" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Harga Perbulan</label>
              <input type="number" class="form-control" name="property_room_monthly" value="<?= $property['property_room_monthly'] ?>" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Sales</label>
              <input type="number" class="form-control" name="property_room_price" value="<?= $property['property_room_price'] ?>" required>
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>