<div class="content-wrapper" style="min-height: 1589.56px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile Edit</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?= base_url()?>">About Edit  </a></li>
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
          <h3 class="card-title">About Edit</h3>

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
                    <input type="text"  class="form-control" value="<?= $about['about_name'] ?>" name="about_name" placeholder="Enter email " disabled>
                </div>
                <div class="form-group" style="margin-bottom: 10px;">
                    <label for="exampleInputEmail1">Gender: </label>
                    
                    <input style="margin-left:15px" type="radio" name="about_gender" value="<?= $about['about_name']==1 ?>" id="about_gender">Male
                    <input style="margin-left:15px" type="radio" name="about_gender" value="<?= $about['about_name']==2 ?>" id="about_gender">Female
                </div>
                <div class="form-group" style="margin-bottom: 10px;">
                    <label for="exampleInputEmail1">Birthdate:</label>
                    <input type="date" value="<?= $about['about_birthdate'] ?>" name="about_birthdate" class="form-control"  placeholder="Enter email " required>
                </div>
                <div class="form-group" style="margin-bottom: 10px;">
                    <label for="exampleInputEmail1">Birth Place:</label>
                    <input type="text" value="<?= $about['about_birthplace'] ?>" name="about_birthplace" class="form-control"  placeholder="birthplace " required>
                </div>
                <div class="form-group" style="margin-bottom: 10px;">
                    <label for="exampleInputEmail1">Age:</label>
                    <input type="text" value="<?= $about['about_age'] ?>" name="about_age" class="form-control" name="about_age" placeholder="Enter email " required>
                </div>
                <div class="form-group" style="margin-bottom: 10px;">
                    <label for="exampleInputEmail1">Phone Number:</label>
                    <input type="number" value="<?= $about['about_phone'] ?>" name="about_phone" class="form-control" name="about_phone" placeholder="Enter Phone " required>
                </div>
                <div class="form-group" style="margin-bottom: 10px;">
                    <label for="exampleInputEmail1">Last Education:</label>
                    <input type="text" value="<?= $about['about_education'] ?>" name="about_education" class="form-control" name="about_education" placeholder="Enter Education " required>
                </div>
                <div class="form-group" style="margin-bottom: 10px;">
                    <label for="exampleInputEmail1">Website:</label>
                    <input type="text" value="<?= $about['about_website'] ?>" name="about_website" class="form-control" name="about_website" placeholder="Enter Website " required>
                </div>
                
                <div class="form-group">
                    <label for="exampleInputEmail1">About Description:</label>
                    <textarea class="form-control"  name="about_desc" rows="3" placeholder="Enter About Description" required><?= $about['about_desc'] ?></textarea>
                </div>
                <div class="form-group">

                </div>
            </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="submit" href="<?php base_url('about') ?>"  class="btn btn-primary">Cancel</button>
        </div>
        </form>
</div>


<script>
function check_access($this) {

if (isAllChecked == 0) {
    $("#admin_jenis").prop("checked", true);
  } else {
      $("#admin_jenis").prop("checked", false);
  }

}
</script>