<nav class="sidebar sidebar-offcanvas" id="sidebar" style="width: 8cm">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="/">
        <i class="typcn typcn-device-desktop menu-icon"></i>
        <span class="menu-title">Halaman Utama</span>
        <div class="badge badge-danger">new</div>
      </a>
    </li>
    <li class="nav-item @if ($sb_menu == 'Mahasiswa') menu-open @endif">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <i class="typcn typcn-document-text menu-icon"></i>
        <span class="menu-title">Mahasiswa</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="/mastermhs">Master Mahasiswa</a></li>
          <li class="nav-item"> <a class="nav-link" href="/mastermk">Master MK</a></li>
          <li class="nav-item"> <a class="nav-link" href="/masterkelas">Master Kelas</a></li>
          <li class="nav-item"> <a class="nav-link" href="/masterdosen">Master Dosen</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
        <i class="typcn typcn-film menu-icon"></i>
        <span class="menu-title">Perkuliahan</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="form-elements">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">IYAAA</a></li>
          <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">IYAAA</a></li>
          <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">IYAAA</a></li>
          <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">IYAAA</a></li>
        </ul>
      </div>
    </li>
  </ul>
</nav>