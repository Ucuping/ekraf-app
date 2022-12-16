<nav class="app-menu main-navbar">
    <div class="container navbar-box">
      <ul class="navbar-i">
        @can('read-dashboard')
        <li class="menu-item">
          <a href="{{ route('apps.dashboard') }}" data-toggle="ajax" class="menu-link">
            <span><i class="fas fa-home"></i> Beranda</span>
          </a>
        </li>
        @endcan
        {{-- @can('read-categories')
        <li class="menu-item">
          <a href="{{ route('apps.dashboard') }}" data-toggle="ajax" class="menu-link">
            <span><i class="fas fa-list-alt"></i> Kategori</span>
          </a>
        </li>
        @endcan --}}
        @can('read-companies')
        <li class="menu-item">
          <a href="{{ route('apps.companies') }}" data-toggle="ajax" class="menu-link">
            <span><i class="fas fa-store-alt"></i> Ekraf</span>
          </a>
        </li>
        @endcan
        @can('company-validations')
        <li class="menu-item">
          <a href="{{ route('apps.validations') }}" data-toggle="ajax" class="menu-link">
            <span><i class="fas fa-check-square"></i> Validasi</span>
          </a>
        </li>
        @endcan
        {{-- @can('read-announcements')
        <li class="menu-item">
          <a href="{{ route('apps.dashboard') }}" data-toggle="ajax" class="menu-link">
            <span><i class="fas fa-newspaper"></i> Berita</span>
          </a>
        </li>
        @endcan --}}
        {{-- @canany(['read-users', 'read-roles'])
          <li class="menu-item has-sub">
            <a href="javascript:void(0)" class="menu-link">
              <span><i class="fas fa-user"></i> User Management</span>
            </a>
            <div class="submenu">
              <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
              <div class="submenu-group-wrapper">
                <ul class="submenu-group">
                  @can('read-users')
                  <li class="submenu-item">
                    <a
                      href="{{ url('/') }}/apps/users"
                      class="submenu-link"
                      data-toggle="ajax"
                      >User</a
                    >
                  </li>
                  @endcan
                  @can('read-roles')
                  <li class="submenu-item">
                    <a
                      href="{{ route('apps.roles') }}"
                      class="submenu-link"
                      data-toggle="ajax"
                      >Role</a
                    >
                  </li>
                  @endcan
                </ul>
              </div>
            </div>
          </li>
        @endcanany --}}
      </ul>
    </div>
  </nav>