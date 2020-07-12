<div class="content-wrapper" style="min-height: 1589.56px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>About Add</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?= base_url()?>">Home </a></li>
                <li class="breadcrumb-item active"><a href="<?= base_url('about')?>">About List </a></li>
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
          <h3 class="card-title">About Add</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body" style="padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 0px;">
        <form role="form" action="<?=base_url('about/save')?>" method="post">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name:</label>
                    <input type="text"  class="form-control" name="product_name" placeholder="Enter email " required>
                </div>
                <div class="form-group" style="margin-bottom: 10px;">
                    <label for="exampleInputEmail1">Gender: </label>
                    <input style="margin-left:15px" type="radio" name="gender" value="1">Male
                    <input style="margin-left:15px" type="radio" name="gender" value="2">Female
                </div>
                <div class="form-group" style="margin-bottom: 10px;">
                    <label for="exampleInputEmail1">Birthdate:</label>
                    <input type="date"  class="form-control" name="about_birthdate" placeholder="Enter email " required>
                </div>
                <div class="form-group" style="margin-bottom: 10px;">
                    <label for="exampleInputEmail1">Age:</label>
                    <input type="text"  class="form-control" name="about_age" placeholder="Enter email " required>
                </div>
                <div class="form-group" style="margin-bottom: 10px;">
                    <label for="exampleInputEmail1">Phone Number:</label>
                    <input type="number"  class="form-control" name="about_phone" placeholder="Enter Phone " required>
                </div>
                <div class="form-group" style="margin-bottom: 10px;">
                    <label for="exampleInputEmail1">Last Education:</label>
                    <input type="text"  class="form-control" name="about_education" placeholder="Enter Education " required>
                </div>
                <div class="form-group" style="margin-bottom: 10px;">
                    <label for="exampleInputEmail1">Website:</label>
                    <input type="text"  class="form-control" name="about_website" placeholder="Enter Website " required>
                </div>
                
                <div class="form-group">
                    <label for="exampleInputEmail1">About Description:</label>
                    <textarea class="form-control"  name="About_desc" rows="3" placeholder="Enter About Description" required></textarea>
                </div>
                <div class="form-group">
                
                </div>
            </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
</div>