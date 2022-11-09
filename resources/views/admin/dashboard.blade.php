<!DOCTYPE html>
<html>
<head>
    <title>Admin Auth Laravel 8 </title>
</head>
<body>
  
<div class="container">
    Welcome, Admin
</div>
<form action="{{ route('logout') }}" method="post">
       @csrf
       <button type="submit">Logout</button>
</form>
   
</body>
</html>