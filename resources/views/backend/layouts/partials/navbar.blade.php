<nav class="main-navbar">
    <div class="container">
      <ul>
        <li class="menu-item">
          <a href="{{ route('dashboard') }}" data-toggle="ajax" class="menu-link">
            <span><i class="fas fa-home"></i> Dashboard</span>
          </a>
        </li>
        @canany(['read-users', 'read-roles'])
          <li class="menu-item has-sub">
            <a href="javascript:void(0)" class="menu-link">
              <span><i class="fas fa-users"></i> User Management</span>
            </a>
            <div class="submenu">
              <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
              <div class="submenu-group-wrapper">
                <ul class="submenu-group">
                  <li class="submenu-item">
                    <a
                      href="{{ url('/') }}/apps/users"
                      class="submenu-link"
                      data-toggle="ajax"
                      >Users</a
                    >
                  </li>

                  <li class="submenu-item">
                    <a
                      href="javascript:void(0)"
                      class="submenu-link"
                      data-toggle="ajax"
                      >Roles</a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </li>
        @endcanany
      </ul>
    </div>
  </nav>