<div class="content-wrapper" style="min-height: 1589.56px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Property Detail</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home </a></li>
            <li class="breadcrumb-item active"><a href="<?= base_url('/property') ?>">Property List </a></li>
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
        <h3 class="card-title">Detail Property <?= $property['property_nama'] ?></h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
      </div>
      <div class="card-body" style="padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 0px;">
        <div class="card-body">
          <!-- <div class="container"> -->
          <div class="row">
            <div class="col-lg-6 border-right border-md card-footer">
              <div class="form-group">
                <label for="exampleInputEmail1">Image Properti</label>

                <div class="col-lg-12">
                  <div class="col-5 ">
                    <img src="<?= base_url(); ?>/template/dist/img//user1-128x128.jpg" alt="" class="img-circle img-fluid">

                  </div>
                </div>


              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Kode Properti</label>
                <h4><?= $property['property_kode'] ?></h4>
                <!-- <input type="text" class="form-control" name="property_kode" value="" required> -->
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Nama Properti</label>
                <h4><?= $property['property_nama'] ?></h4>
                <!-- <input type="text" class="form-control" name="property_nama" value="<?= $property['property_nama'] ?>" required> -->
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Alamat Properti</label>
                <h4><?= $property['property_address'] ?></h4>
                <!-- <textarea class="form-control" name="property_address" rows="3" required></textarea> -->
              </div>
            </div>
            <div class="col-lg-6 card-footer">


              <div class="form-group">
                <label for="exampleInputEmail1">Jumlah Kamar Siap Jual</label>
                <!-- <input type="number" class="form-control" name="property_room_occupied" value="" required> -->
                <h4>
                  <?= $property['property_room_occupied'] ?>
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Edit Jumlah Kamar
                  </button>
                </h4>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Jumlah Kamar Tersisa</label>
                <!-- <input type="number" class="form-control" name="property_room_left" value="" disabled required> -->
                <h4><?= $property['property_room_left'] ?></h4>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Jumlah Kamar Ditempati</label>
                <!-- <input type="number" class="form-control" name="property_room_sellable" value="" required> -->
                <h4><?= $property['property_room_sellable'] ?></h4>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Harga Perhari</label>
                <!-- <input type="number" class="form-control" name="property_room_daily" value="" required> -->
                <h4>Rp. <?= $property['property_room_daily'] ?></h4>

              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Harga Perminggu</label>
                <!-- <input type="number" class="form-control" name="property_room_weekly" value="" required> -->
                <h4>Rp. <?= $property['property_room_weekly'] ?></h4>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Harga Perbulan</label>
                <!-- <input type="number" class="form-control" name="property_room_monthly" value="" required> -->
                <h4><?= $property['property_room_monthly'] ?></h4>
              </div>
            </div>

          </div>
          <!-- </div> -->
          <!-- /.card-body -->

          <div class="card-footer">
            <a href="<?= base_url('property') ?>" style="margin-right: 15px;" class="btn btn-danger">Kembali</a>
          </div>
          </form>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Jumlah Kamar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <input type="number" class="form-control" name="property_room_occupied" value="<?= $property['property_room_occupied'] ?>" required>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary">Simpan</button>
              </div>
            </div>
          </div>
        </div>