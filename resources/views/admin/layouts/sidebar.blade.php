<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{ route('admin.admin.dashboard') }}" class="brand-link">
    <span class="brand-text font-weight-light">Admin Panel</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview">
        <li class="nav-item">
          <a href="{{ route('admin.admin.dashboard') }}" class="nav-link">
            <i class="nav-icon fas fa-home"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.students.index') }}" class="nav-link">
            <i class="nav-icon fas fa-user-graduate"></i>
            <p>Students</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.exams.index') }}" class="nav-link">
                <i class="nav-icon fas fa-file-alt"></i>
                <p>Exams</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.questions.index') }}" class="nav-link">
                <i class="nav-icon fas fa-question-circle"></i>
                <p>Manage Questions</p>
            </a>
        </li>
        </ul>
    </nav>
  </div>
</aside>
