<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <style>
  	body {
  		margin: 50px;
  		line-height: 30px;
  	}
</style>
</head>
<body>
	
	<div class="container-fluid">
    
    <ul class="nav">
      @if (Auth::check())
        <li class="nav-item">
        <li class="nav-item">
          <a href="/admin/profile" class="nav-link">Profile</a>
        </li>
          <a href="/invoices" class="nav-link">Invoices</a>
        </li>
        </li>
          <a href="/playlists/1" class="nav-link">Playlists</a>
        </li>
        <li class="nav-item">
          <a href="/admin/settings" class="nav-link">Settings</a>
        </li>
        <li class="nav-item">
          <a href="/logout" class="nav-link">Logout</a>
        </li>

      @else
        <li class="nav-item">
          <a href="/login" class="nav-link">Login</a>
        </li>
        <li class="nav-item">
          <a href="/signup" class="nav-link">Signup</a>
        </li>

      @endif
      
      
    </ul>
    <hr/><br/>

		@yield('main')
	</div>

</body>
</html>