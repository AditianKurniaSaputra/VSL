<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboardvl">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboardvl/posts">
              <span data-feather="file-text"></span>
              Upload Post
            </a>
          </li>
        


          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bell"></span>
              Reports
            </a>
          </li>
          
          </li>
        </ul>


      </div>
    </nav>