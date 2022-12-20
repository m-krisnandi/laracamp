<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
      <ul class="list-unstyled components">
        <li>
          <a href="/admin/dashboard">Dashboard</a>
        </li>
        <li>
          <a href="/admin/transactions">Data Transactions</a>
        </li>
      </ul>

      @can('admin')
      <ul class="list-unstyled components mb-8">
        <li>
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 ">
            <span>ADMINISTRATOR</span>
        </h6>
          <a href="/admin/users">Manage Users</a>
        </li>
      </ul>
      @endcan
    </nav>


    <!-- Page Content  -->
    <div id="content">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <button type="button" id="sidebarCollapse" class="btn btn-primary">
            <i class="fas fa-align-left"></i>
          </button>
        </div>
      </nav>
      @yield('sidebar')
    </div>
  </div>
