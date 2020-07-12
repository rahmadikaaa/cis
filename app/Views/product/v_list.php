<div class="content-wrapper" style="min-height: 1589.56px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Product List</h1>
          </div>
          <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a href="<?= base_url()?>">Home </a></li>
              <!-- <li class="breadcrumb-item active">Blank Page</li> -->
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
          <h3 class="card-title"></h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
            
            <div class="col-12"style="position:  right: 0;">
              <a href="<?= base_url('product/add')?>" class="btn btn-info">Tambah Data</a>

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
                <h3 class="card-title">List Product</h3>

              </div>
              <!-- /.card-header -->

              <!-- datatables -->

              <!-- /.card-header -->
              <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                      <th>ID</th>
                      <th>Product Name</th>
                      <th>Product Desciption</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                    $no = 1;
                    foreach ($product as $key => $k) 
                    {?>
                        <tr>
                        <td><?= $no++?></td>
                        <td><?= $k['product_name'] ?></td>
                        <td><?= $k['product_desc'] ?></td>
                        <td>
                            <div class="btn-group">
                            <a href="<?= base_url('product/edit/'.$k['product_id'])?>" style="margin-right: 15px;" class="btn btn-success">Edit Data</a>
                            <a href="<?= base_url('product/delete/'.$k['product_id'])?>" onclick="return confirm('Are you sure delete this data?') " class="btn btn-danger">Delete Data</a>

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
    
       
