<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="{{ route('user.dashboard') }}" class="brand-link">
    <span class="brand-text font-weight-light">Student Panel</span>
  </a>

  <div class="sidebar">
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview">
        <li class="nav-item">
          <a href="{{ route('user.dashboard') }}" class="nav-link">
            <i class="nav-icon fas fa-home"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <!-- أضف روابط الطالب هنا -->
      </ul>
    </nav>
  </div>
</aside>
