      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          @auth
              <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.index') }}">
                  <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                  <span class="menu-title">Dashboard</span>
                </a>
              </li>
            @if(auth()->user()->role == 'admin')
              <!-- Tampilkan fitur khusus admin -->
              <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.relawan') }}">
                  <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                  <span class="menu-title">Relawan</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.program') }}">
                  <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                  <span class="menu-title">Program</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.histori') }}">
                  <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                  <span class="menu-title">Histori</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.galeri') }}">
                  <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                  <span class="menu-title">Galeri</span>
                </a>
              </li>
            @elseif(auth()->user()->role == 'admin-dokumentator')
              <!-- Tampilkan fitur dokumentator -->
              <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.galeri') }}">
                  <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                  <span class="menu-title">Galeri</span>
                </a>
              </li>
            @endif
          @endauth
        </ul>
      </nav>