
<div class="container-fluid">
<div class="container w-50 mx-auto">
<form action="<?php echo base_url('index.php/employee/store'); ?>" class="form-horizontal border border-dark mt-5 text-center ps-5 pb-5" method="post" enctype="multipart/form">
    <div  class="text-center w-50 w">
        <p class="w-59 mx-auto">register a user</p>
    </div>
    <div class="form-floating text-center w-100">
        <label class="control-label" for="firstname">Firstname</label>
        <input name="firstname" class="form-control w-75" type="text" >
        <small class="text-danger"><?php echo form_error('firstname');?></small>
    </div>
    <div class=" form-floating text-center w-100">
       <label class=" control-label" for="lastname">Lastname</label>
       <input name="lastname" type="text " class="form-control mt-2 w-75">
       <small class="text-danger"><?php echo form_error('lastname');?></small>
    </div>
    <div class="input mt-4 w-100">
        <input type="submit" class="btn float-left btn-dark w-50">
    </div>
</form>
</div>
</div>