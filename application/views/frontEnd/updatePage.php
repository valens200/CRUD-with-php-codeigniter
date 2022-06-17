
<div class="container-fluid">
<div class="container w-50 mx-auto">
<form action="<?php echo base_url('index.php/save/'.$students->studentId) ?>" class="form-horizontal border border-dark mt-5 text-center ps-5 pb-5" method="post" enctype="multipart/form">
    <div  class="text-center w-50 w">
        <p class="w-59 mx-auto">update a user</p>
    </div>
    <div class="form-floating text-center w-100">
        <label class="control-label " for="firstname ">Firstname</label>
        <input  value="<?=$students->firstname?>" name="firstname" class="form-control w-75" type="text" >
    </div>
    <div class=" form-floating text-center w-100">
       <label class=" control-label d-none" for="lastname">Lastname</label>
       <input name="lastname"  value="<?=$students->lastname?>" type="text " class="form-control mt-2 w-75">
    </div>
    <div class="input mt-4 w-100">
        <input type="submit" value="update" class="btn float-left btn-dark w-50">
    </div>
</form>
</div>
</div>