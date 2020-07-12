<div class="content-wrapper" style="min-height: 1589.56px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Skill List</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active"><a href="<?= base_url() ?>">Home </a></li>
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

        <div class="col-12" style="position:  right: 0;">

          <?php
          if (!empty(session()->getFlashdata('success'))) {
          ?>
            <div class="alert alert-success">
              <?= session()->getFlashdata('success'); ?>
            </div>

          <?php
          }
          ?>
        </div>
        <!-- <BR> -->
        <div class="card">
          <form role="form" action="<?= base_url('skill/save') ?>" method="post">

            <div class="form-group">
              <div class="form-group row">
                <label for="inputName" class="col-sm-2 col-form-label">Name :</label>
                <div class="col-sm-10">
                </div>
              </div>
              <input type="range" class="form-control-range" id="formControlRange" min="1" max="100" value="10" disabled>
              <hr>
            </div>
            <div class="form-group">
              <div class="form-group row">
                <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" value="Rahmadika Tri Putera" id="inputName" placeholder="Name">
                </div>
              </div>
              <input type="range" class="form-control-range" id="formControlRange" min="1" max="100" value="10" disabled>
              <hr>
            </div>
            <div class="form-group">
              <div class="form-group row">
                <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" value="Rahmadika Tri Putera" id="inputName" placeholder="Name">
                </div>
              </div>
              <input type="range" class="form-control-range" id="formControlRange" min="1" max="100" value="10" disabled>
              <hr>
            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
        <!-- /.card -->
      </div>