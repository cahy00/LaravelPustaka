<nav class="sidebar-nav">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="/home">
                <i class="nav-icon icon-speedometer"></i> Dashboard
            </a>
        </li>

        <li class="nav-title">MANAJEMEN PRODUK</li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('student.index') }}">
                <i class="nav-icon icon-drop"></i> Siswa
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('book.index') }}">
                <i class="nav-icon icon-chart"></i> Buku
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('category.index') }}">
                <i class="nav-icon icon-energy"></i> Kategori
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="nav-icon icon-graduation"></i> Kelas
            </a>
        </li>
        <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#">
                <i class="nav-icon icon-credit-card"></i> Transaksi
            </a>
            <ul class="nav-dropdown-items">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('credit.index') }}">
                        <i class="nav-icon icon-bag"></i> Peminjaman
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('book.index') }}">
                        <i class="nav-icon icon-magnifier-remove"></i> Pengembalian
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#">
                <i class="nav-icon icon-settings"></i> Pengaturan
            </a>
            <ul class="nav-dropdown-items">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="nav-icon icon-puzzle"></i> Toko
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>