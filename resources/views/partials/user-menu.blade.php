<li class="nav-item dropdown d-none d-lg-block user-dropdown">
    <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
      <img class="img-xs rounded-circle" src="images/faces/face8.jpg" alt="Profile image"> </a>
    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
      <div class="dropdown-header text-center">
        <img class="img-md rounded-circle" src="images/faces/face8.jpg" alt="Profile image">
        <p class="mb-1 mt-3 font-weight-semibold">{{ auth()->user()->name }}</p>
        <p class="fw-light text-muted mb-0">{{ auth()->user()->email }}</p>
      </div>
      <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
      <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-message-text-outline text-primary me-2"></i> Messages</a>
      <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-calendar-check-outline text-primary me-2"></i> Activity</a>
      <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2"></i> FAQ</a>
      <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
      <form method="POST" action="http://gic.test/logout" x-data="">
        <input type="hidden" name="_token" value="gfVzcbRmxufrpJDErBpV9Yo2SHz013amSfRJ530N">
        <a class="block w-full px-4 py-2 text-left text-sm leading-5 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-800 transition duration-150 ease-in-out" href="http://gic.test/logout" @click.prevent="$root.submit();">Log Out</a>
    </form>
    </div>
</li>