<nav class="navbar navbar-expand-lg navbar-dark bg-info p-3">
  <a class="navbar-brand" href="/">Make cV</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto text-center">
      <li class="{{Request::routeIs('home') ? 'nav-item active' : 'nav-item' }} ">
    
        <a class="nav-link" href="/">Home </a>
      </li>
      <li class="{{Request::routeIs('download_cv') ? 'nav-item active' : 'nav-item' }} ">
        <a class="nav-link" href="/download_cv">Cv</a>
      </li>
      <li class="{{Request::routeIs('profile') ? 'nav-item active' : 'nav-item' }} ">
        <a class="nav-link" href="/profile">Profile</a>
      </li>
      
      <!-- <li class="nav-item">
        <a class="btn btn-outline-warning " href="/login">Login</a>
      </li> -->
      <li class="nav-item">
        <a class="btn btn-outline-warning" href="/logout">LogOut</a>
      </li>

      
     
    </ul>
   
  </div>
</nav>