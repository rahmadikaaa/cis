<div class="content-wrapper" style="min-height: 1589.56px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <!-- <div class="col-sm-6">
            <h1>About List</h1>
          </div> -->
          <div class="col-sm-12">
          <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url()?>">Home </a></li>
              <!-- <li class="breadcrumb-item"><a href="<?= base_url('about')?>">Home </a></li> -->
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
          <h3 class="card-title">About List</h3>
              <!-- <li class="breadcrumb-item active">Blank Page</li> -->
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
            
            <div class="col-12"style="position:  right: 0;">
              <a href="<?= base_url('about/add')?>" class="btn btn-info">Tambah Data</a>

                <?php 
                if(!empty(session()->getFlashdata('success')) ){
                  ?>
                  <div class="alert alert-success">
                  <?= session()->getFlashdata('success'); ?>
                    </div>
                  
                  <?php
                }
                ?>
                
               

            </div>
            <BR>
        <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">About List</h3>

              </div>
              <!-- /.card-header -->

              <!-- datatables -->

              <!-- /.card-header -->
              <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                      <th>No.</th>
                      <th>Name</th>
                      <th>About Birthday</th>
                      <th>About Gender</th>
                      <th>about Phone</th>
                      <th>About Email</th>
                      <th>About product</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                    $no = 1;
                    foreach ($about as $key => $k) 
                    {?>
                        <tr>
                        <td><?= $no++?></td>
                        <td><?= $k['about_name'] ?></td>
                        <td><?= $k['about_birthdate'] ?></td>
                        <td><?= $k['about_gender'] ?></td>
                        <td><?= $k['about_phone'] ?></td>
                        <td><?= $k['about_email'] ?></td>
                        <td>
                            <div class="btn-group">
                            <a href="<?= base_url('about/edit/'.$k['about_id'])?>" style="margin-right: 15px;" class="btn btn-success">Edit Data</a>
                            <a href="<?= base_url('about/delete/'.$k['about_id'])?>" onclick="return confirm('Are you sure delete this data?') " class="btn btn-danger">Delete Data</a>

                            </div>
                        </td>
                        </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
              </div>
              <!-- /.card-body -->
            <!-- /.card -->
        <!-- /.card-body -->
    
       
