<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="{{ route('admin.admin.dashboard') }}" class="nav-link">Dashboard</a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button class="btn btn-link nav-link" type="submit">Logout</button>
      </form>
    </li>
  </ul>
</nav>
