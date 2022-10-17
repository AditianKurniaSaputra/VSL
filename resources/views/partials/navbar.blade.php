
<nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #000000;">

  <div class="container">
    <a class="navbar-brand" href="/">VL School</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> 
    
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link {{ ($active === "home") ? 'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === "about") ? 'active' : '' }}" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === "posts") ? 'active' : '' }}" href="/posts">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === "categories") ? 'active' : '' }}" href="/categories">Categories</a>
        </li>
      </ul>

       
          <!-- DarkMode 
            <label>
                <input type="checkbox">
                <span class="check"></span>
      
            </label> -->
     
      <ul class="navbar-nav1">
          @auth
            <li class="nav-item dropdown">
              <a class="nav-link1 dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Welcome , {{ auth()->user()->name }}
              </a>
               <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/dashboardvl"><i class="bi bi-layers-half"></i></i></i> Admin | Post</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="/logout" method="post">
                      @csrf
                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"> Logout</i></button>
                  </form>
                </li>
              </ul>
          @else

          <!-- <li class="nav-item">
              <a href="/login" class="nav-link {{ ($active === "login") ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
          </li> --> 

          @endauth 
        </ul>

 
    </div>
  </div>
</nav>

