

<?php $__env->startSection('admin'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="page-content">


<div class="row profile-body">
  <!-- left wrapper start -->
  <div class="d-none d-md-block col-md-4 col-xl-4 left-wrapper">
    <div class="card rounded">
      <div class="card-body">
        <div class="d-flex align-items-center justify-content-between mb-2">
          
          <div>
            <img class="wd-100 rounded-circle" src="<?php echo e((!empty ($profileData->photo) )? url('upload/admin_images/'.$profileData->photo) : url('upload/no_image.jpg')); ?>" alt="profile">
            <span class="h4 ms-3 text-light"><?php echo e($profileData->username); ?></span>
          </div>
         
        </div>
       
        <div class="mt-3">
          <label class="tx-11 fw-bolder mb-0 text-uppercase">Name:</label>
          <p class="text-muted"><?php echo e($profileData->name); ?></p>
        </div>
        <div class="mt-3">
          <label class="tx-11 fw-bolder mb-0 text-uppercase">Email:</label>
          <p class="text-muted"><?php echo e($profileData->email); ?></p>
        </div>
        <div class="mt-3">
          <label class="tx-11 fw-bolder mb-0 text-uppercase">Phone:</label>
          <p class="text-muted"><?php echo e($profileData->phone); ?></p>
        </div>
        <div class="mt-3">
          <label class="tx-11 fw-bolder mb-0 text-uppercase">Address:</label>
          <p class="text-muted"><?php echo e($profileData->address); ?></p>
        </div>
        <div class="mt-3 d-flex social-links">
          <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
            <i data-feather="github"></i>
          </a>
          <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
            <i data-feather="twitter"></i>
          </a>
          <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
            <i data-feather="instagram"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- left wrapper end -->
  <!-- middle wrapper start -->
  <div class="col-md-8 col-xl-8 middle-wrapper">
    <div class="row">
    <div class="card">
              <div class="card-body">

								<h6 class="card-title">Update Admin Profile</h6>

								<form method="POST" action="<?php echo e(route('admin.profile.store')); ?>" class="forms-sample" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
									<div class="mb-3">
										<label for="exampleInputUsername1" class="form-label">Username</label>
										<input type="text" name="username"class="form-control" id="exampleInputUsername1" autocomplete="off" value="<?php echo e($profileData->username); ?>">
									</div>
									<div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">Name</label>
										<input type="text" name="name" class="form-control" id="exampleInputUsername1" autocomplete="off" value="<?php echo e($profileData->name); ?>">
									</div>
									<div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">Email</label>
										<input type="emial" name="email" class="form-control" id="exampleInputUsername1" autocomplete="off" value="<?php echo e($profileData->email); ?>">
									</div>
                                    <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">Phone</label>
										<input type="emial" name="phone" class="form-control" id="exampleInputUsername1" autocomplete="off" value="<?php echo e($profileData->phone); ?>">
									</div>
                                    <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">Address</label>
										<input type="emial" name="address" class="form-control" id="exampleInputUsername1" autocomplete="off" value="<?php echo e($profileData->address); ?>">
									</div>
                                    <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">Photo</label>
                                    <input class="form-control" name="photo" type="file" id="image">
									</div>
                                    <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label"></label>
                                    <img id="showImage" class="wd-70 rounded-circle" src="<?php echo e((!empty ($profileData->photo) )? url('upload/admin_images/'.$profileData->photo) : url('upload/no_image.jpg')); ?>" alt="profile">
									</div>
									<div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
										<label class="form-check-label" for="exampleCheck1">
											Remember me
										</label>
									</div>
									<button type="submit" class="btn btn-primary me-2">Save Changes</button>
									
								</form>

              </div>
            </div>
    </div>
  </div>
  <!-- middle wrapper end -->
  <!-- right wrapper start -->

  <!-- right wrapper end -->
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
               $('#showImage').attr('src',e.target.result); 
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });

</script>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-1\realestate\resources\views/admin/admin_profile_view.blade.php ENDPATH**/ ?>