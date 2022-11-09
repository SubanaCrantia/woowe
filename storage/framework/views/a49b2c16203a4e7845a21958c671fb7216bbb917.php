<!DOCTYPE html>
<html>
<head>
    <title>Admin Auth Laravel 8 </title>
</head>
<body>
  
<div class="container">
    Welcome, Admin
</div>
<form action="<?php echo e(route('logout')); ?>" method="post">
       <?php echo csrf_field(); ?>
       <button type="submit">Logout</button>
</form>
   
</body>
</html><?php /**PATH C:\xampp\htdocs\woowe\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>