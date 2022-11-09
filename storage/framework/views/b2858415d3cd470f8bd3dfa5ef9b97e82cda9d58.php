
<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="images/icons/favicon.ico" />




<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/css/admin/main.css')); ?>">

<meta name="robots" content="noindex, follow">
</head>
<body>
<div class="limiter">
<div class="container-login100">
<div class="wrap-login100">

<?php if(\Session::get('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <div class="alert-body">
                    <?php echo e(\Session::get('success')); ?>

                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php endif; ?>
            <?php echo e(\Session::forget('success')); ?>

            <?php if(\Session::get('error')): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <div class="alert-body">
                    <?php echo e(\Session::get('error')); ?>

                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php endif; ?>



<form class="login100-form validate-form" action="<?php echo e(route('adminLoginPost')); ?>" method="post">
<?php echo csrf_field(); ?>
<span class="login100-form-title p-b-26">
Welcome
</span>
<span class="login100-form-title p-b-48">
<i class="zmdi zmdi-font"></i>
</span>

<div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">

<input type="text" class="input100" id="email" name="email" value="<?php echo e(old('email')); ?>" autofocus />
                          

<span class="focus-input100" data-placeholder="Email"></span>
</div>
<?php if($errors->has('email')): ?>
                            <span class="help-block font-red-mint">
                                <?php echo e($errors->first('email')); ?>

                            </span>
                            <?php endif; ?>

<div class="wrap-input100 validate-input" data-validate="Enter password">
<span class="btn-show-pass">
<i class="zmdi zmdi-eye"></i>
</span>

<input type="password" class="input100" id="password" name="password" tabindex="2" />
                                
<span class="focus-input100" data-placeholder="Password"></span>
</div>

<?php if($errors->has('password')): ?>
                            <span class="help-block font-red-mint">
                               <?php echo e($errors->first('password')); ?>

                            </span>
                            <?php endif; ?>
<div class="container-login100-form-btn">
<div class="wrap-login100-form-btn">
<div class="login100-form-bgbtn"></div>
<button type="submit" class="login100-form-btn" tabindex="4">Sign in</button>

</div>
</div>



</form>
</div>
</div>
</div>


</body>
</html>
<?php /**PATH C:\xampp\htdocs\woowe\resources\views/admin/auth/login.blade.php ENDPATH**/ ?>