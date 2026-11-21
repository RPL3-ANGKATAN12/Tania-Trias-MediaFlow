
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anggota — Piposmart</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Fraunces:ital,opsz,wght@0,9..144,400;0,9..144,500;0,9..144,600;1,9..144,400;1,9..144,500;1,9..144,600&display=swap" rel="stylesheet">

    <style>
        :root {
            --red-50: #fff4f4;
            --red-100: #ffe4e4;
            --red-200: #ffc9c9;
            --red-300: #fca5a5;
            --red-400: #f26d6d;
            --red-500: #d92d2d;
            --red-600: #b81f1f;
            --red-700: #941616;

            --ink-900: #17171d;
            --ink-700: #3a3a44;
            --ink-500: #6b6b76;
            --ink-400: #9a9aa4;

            --bg: #faf8f7;
            --surface: #fff;
            --border: #ebe7e5;
            --border-strong: #ddd6d3;

            --radius-lg: 22px;
            --radius: 16px;
            --radius-sm: 11px;

            --shadow-xs: 0 1px 2px rgba(23,23,29,.04);
            --shadow-sm: 0 2px 10px rgba(23,23,29,.05);
            --shadow-red: 0 10px 32px rgba(217,45,45,.28);
            --shadow-lg: 0 24px 60px rgba(148,22,22,.18);

            --font-sans: 'Plus Jakarta Sans', Arial, sans-serif;
            --font-serif: 'Fraunces', Georgia, serif;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: var(--font-sans);
            background: var(--bg);
            color: var(--ink-900);
            line-height: 1.55;
            min-height: 100vh;
        }

        body::before {
            content: "";
            position: fixed;
            top: 0;
            right: 0;
            width: 380px;
            height: 380px;
            background: repeating-linear-gradient(
                -45deg,
                rgba(217,45,45,.05) 0px,
                rgba(217,45,45,.05) 1px,
                transparent 1px,
                transparent 14px
            );
            pointer-events: none;
            z-index: 0;
            mask-image: radial-gradient(circle at top right, #000, transparent 72%);
        }

        .sidebar {
            width: 268px;
            min-height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            padding: 28px 18px 24px;
            background: var(--surface);
            border-right: 1px solid var(--border);
            display: flex;
            flex-direction: column;
            overflow-y: auto;
            z-index: 20;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 0 6px;
        }

        .brand-logo {
            width: 44px;
            height: 44px;
            border-radius: 13px;
            background: #fff;
            border: 1px solid var(--border);
            display: grid;
            place-items: center;
            overflow: hidden;
            flex-shrink: 0;
            box-shadow: var(--shadow-sm);
        }

        .brand-logo img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            padding: 5px;
        }

        .brand-text .name {
            font-family: var(--font-serif);
            font-size: 18px;
            font-weight: 500;
            color: var(--ink-900);
        }

        .brand-text .sub {
            font-size: 10.5px;
            font-weight: 700;
            letter-spacing: 1.8px;
            text-transform: uppercase;
            color: var(--red-500);
        }

        .nav-label {
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 1.8px;
            text-transform: uppercase;
            color: var(--ink-400);
            padding: 0 12px;
            margin: 32px 0 12px;
        }

        .menu {
            display: flex;
            flex-direction: column;
            gap: 3px;
        }

        .menu a {
            display: flex;
            align-items: center;
            gap: 12px;
            color: var(--ink-500);
            text-decoration: none;
            padding: 10px 12px;
            border-radius: var(--radius-sm);
            font-size: 13.5px;
            font-weight: 500;
            transition: .2s;
        }

        .menu a svg {
            color: var(--ink-400);
            flex-shrink: 0;
        }

        .menu a:hover {
            background: var(--red-50);
            color: var(--red-700);
        }

        .menu a.active {
            background: var(--red-500);
            color: #fff;
            font-weight: 600;
            box-shadow: 0 6px 18px rgba(217,45,45,.3);
        }

        .menu a.active svg {
            color: #fff;
        }

        .sidebar-foot {
            margin-top: auto;
            padding-top: 24px;
            border-top: 1px solid var(--border);
        }

        .logout-btn {
            width: 100%;
            display: flex;
            align-items: center;
            gap: 10px;
            background: transparent;
            border: 1px solid var(--border-strong);
            color: var(--ink-500);
            padding: 10px 13px;
            font-size: 13px;
            font-weight: 600;
            font-family: var(--font-sans);
            cursor: pointer;
            border-radius: var(--radius-sm);
            transition: .2s;
        }

        .logout-btn:hover {
            background: var(--red-50);
            border-color: var(--red-300);
            color: var(--red-600);
        }

        .main {
            margin-left: 268px;
            padding: 38px 48px 60px;
            position: relative;
            z-index: 1;
            min-width: 0;
        }

        .header {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 20px;
            flex-wrap: wrap;
            margin-bottom: 26px;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 2.2px;
            text-transform: uppercase;
            color: var(--red-500);
            margin-bottom: 10px;
        }

        .eyebrow::before {
            content: "";
            width: 22px;
            height: 2px;
            background: var(--red-500);
            border-radius: 2px;
        }

        .header h1 {
            font-family: var(--font-serif);
            font-size: clamp(26px,3vw,34px);
            font-weight: 500;
            line-height: 1.14;
        }

        .header h1 em {
            color: var(--red-600);
        }

        .header p {
            color: var(--ink-500);
            font-size: 13.5px;
            margin-top: 8px;
        }

        .box {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: var(--radius-lg);
            padding: 26px;
            box-shadow: var(--shadow-sm);
        }

        .box-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 22px;
        }

        .box-header h2 {
            font-family: var(--font-serif);
            font-size: 20px;
            font-weight: 600;
        }

        .btn-tambah {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: var(--red-500);
            color: #fff;
            border: none;
            text-decoration: none;
            padding: 11px 20px;
            border-radius: var(--radius-sm);
            font-size: 13px;
            font-weight: 700;
            font-family: var(--font-sans);
            cursor: pointer;
            box-shadow: var(--shadow-red);
            transition: .2s;
        }

        .btn-tambah:hover {
            background: var(--red-600);
            transform: translateY(-1px);
        }

        .search-box {
            position: relative;
            width: 100%;
            max-width: 420px;
            margin-bottom: 20px;
        }

        .search-box input {
            width: 100%;
            padding: 12px 16px 12px 44px;
            border: 1px solid var(--border-strong);
            border-radius: var(--radius-sm);
            outline: none;
            font-family: var(--font-sans);
            font-size: 13.5px;
        }

        .search-box input:focus {
            border-color: var(--red-400);
            box-shadow: 0 0 0 3px var(--red-100);
        }

        .search-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--ink-400);
        }

        .table-wrapper {
            width: 100%;
            overflow-x: auto;
            border-radius: var(--radius-sm);
            border: 1px solid var(--border);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 13px;
            min-width: 520px;
        }

        thead tr {
            background: var(--red-50);
            text-align: left;
        }

        th {
            padding: 13px 16px;
            color: var(--red-700);
            font-size: 10.5px;
            letter-spacing: 1.4px;
            text-transform: uppercase;
            border-bottom: 1px solid var(--red-100);
        }

        td {
            padding: 14px 16px;
            color: var(--ink-700);
            border-bottom: 1px solid var(--border);
        }

        tbody tr:last-child td {
            border-bottom: none;
        }

        tbody tr.anggota-row:hover {
            background: var(--red-50);
        }

        td:nth-child(1) {
            color: var(--ink-400);
            font-weight: 700;
            width: 60px;
        }

        td:nth-child(2) {
            font-weight: 700;
            color: var(--ink-900);
            font-family: var(--font-serif);
            font-size: 14.5px;
        }

        td:nth-child(3) {
            color: var(--ink-500);
        }

        .action-group {
            display: flex;
            gap: 8px;
            align-items: center;
            flex-wrap: wrap;
        }

        .btn-edit,
        .btn-hapus {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 8px 13px;
            border-radius: 8px;
            font-size: 12px;
            font-weight: 700;
            cursor: pointer;
            font-family: var(--font-sans);
            border: 1px solid transparent;
            transition: .2s;
        }

        .btn-edit {
            background: var(--red-50);
            color: var(--red-600);
            border-color: var(--red-100);
        }

        .btn-edit:hover {
            background: var(--red-500);
            color: #fff;
        }

        .btn-hapus {
            background: #fff;
            color: var(--red-600);
            border-color: var(--red-200);
        }

        .btn-hapus:hover {
            background: var(--red-600);
            color: #fff;
        }

        .action-form {
            display: inline-flex;
        }

        .empty,
        .no-result {
            padding: 40px 20px;
            text-align: center;
            color: var(--ink-400);
            font-size: 13px;
        }

        .no-result {
            display: none;
        }

        /*popup modal */
        .modal-overlay {
            position: fixed;
            inset: 0;
            background: rgba(23,23,29,.55);
            backdrop-filter: blur(4px);
            display: none;
            align-items: center;
            justify-content: center;
            padding: 20px;
            z-index: 100;
        }

        .modal-overlay.show {
            display: flex;
            animation: fadeIn .2s ease;
        }

        .modal {
            background: #fff;
            width: 100%;
            max-width: 460px;
            border-radius: 20px;
            padding: 28px;
            box-shadow: 0 24px 70px rgba(0,0,0,.2);
            animation: modalIn .25s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes modalIn {
            from {
                opacity: 0;
                transform: translateY(15px) scale(.98);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 24px;
        }

        .modal-eyebrow {
            color: var(--red-500);
            font-size: 10px;
            font-weight: 800;
            letter-spacing: 1.8px;
            text-transform: uppercase;
            margin-bottom: 5px;
        }

        .modal-header h2 {
            font-family: var(--font-serif);
            font-size: 25px;
            font-weight: 600;
            color: var(--ink-900);
        }

        .modal-header p {
            color: var(--ink-500);
            font-size: 12px;
            margin-top: 4px;
        }

        .modal-close {
            width: 34px;
            height: 34px;
            border: 1px solid var(--border);
            border-radius: 10px;
            background: #fff;
            color: var(--ink-500);
            font-size: 21px;
            cursor: pointer;
        }

        .modal-close:hover {
            background: var(--red-50);
            color: var(--red-600);
            border-color: var(--red-200);
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-group label {
            display: block;
            font-size: 12px;
            font-weight: 700;
            color: var(--ink-700);
            margin-bottom: 8px;
        }

        .form-group input {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid var(--border-strong);
            border-radius: 10px;
            outline: none;
            font-family: var(--font-sans);
            font-size: 13px;
            color: var(--ink-900);
        }

        .form-group input:focus {
            border-color: var(--red-400);
            box-shadow: 0 0 0 3px var(--red-100);
        }

        .form-group input::placeholder {
            color: var(--ink-400);
        }

        .modal-actions {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin-top: 26px;
        }

        .btn-batal,
        .btn-simpan {
            padding: 11px 18px;
            border-radius: 9px;
            font-family: var(--font-sans);
            font-size: 12px;
            font-weight: 700;
            cursor: pointer;
            transition: .2s;
        }

        .btn-batal {
            background: #fff;
            color: var(--ink-500);
            border: 1px solid var(--border-strong);
        }

        .btn-batal:hover {
            background: var(--bg);
        }

        .btn-simpan {
            background: var(--red-500);
            color: #fff;
            border: 1px solid var(--red-500);
        }

        .btn-simpan:hover {
            background: var(--red-600);
        }

        .error-message {
            color: var(--red-600);
            font-size: 11px;
            margin-top: 5px;
        }

        @media (max-width: 1024px) {
            .main {
                padding: 32px 30px 48px;
            }
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                min-height: auto;
                position: static;
                border-right: none;
                border-bottom: 1px solid var(--border);
                padding: 18px 16px;
            }

            .nav-label {
                display: none;
            }

            .menu {
                flex-direction: row;
                flex-wrap: wrap;
                gap: 6px;
                margin-top: 16px;
            }

            .menu a {
                padding: 8px 12px;
                font-size: 12px;
            }

            .sidebar-foot {
                margin-top: 16px;
                padding-top: 16px;
            }

            .logout-btn {
                width: auto;
            }

            .main {
                margin-left: 0;
                padding: 24px 18px 44px;
            }

            .box {
                padding: 20px;
            }

            .box-header {
                align-items: flex-start;
            }

            .search-box {
                max-width: 100%;
            }
        }

        @media (max-width: 440px) {
            .menu {
                flex-direction: column;
            }

            .menu a {
                width: 100%;
            }

            .header h1 {
                font-size: 24px;
            }

            .modal {
                padding: 22px;
            }
        }
    </style>
</head>

<body>

    <aside class="sidebar">

        <div class="brand">
            <div class="brand-logo">
                <img src="{{ asset('image/logo-piposmart.png') }}" alt="Logo Piposmart">
            </div>

            <div class="brand-text">
                <div class="name">Piposmart</div>
                <div class="sub">Tim Media</div>
            </div>
        </div>

        <div class="nav-label">Menu Utama</div>

        <nav class="menu">
            <a href="/dashboard" class="{{ request()->is('dashboard') ? 'active' : '' }}">
                <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="3" y="3" width="7" height="9" rx="1.5"/>
                    <rect x="14" y="3" width="7" height="5" rx="1.5"/>
                    <rect x="14" y="12" width="7" height="9" rx="1.5"/>
                    <rect x="3" y="16" width="7" height="5" rx="1.5"/>
                </svg>
                Dashboard
            </a>

            <a href="/anggota" class="{{ request()->is('anggota*') ? 'active' : '' }}">
                <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                    <circle cx="9" cy="7" r="4"/>
                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                </svg>
                Data Anggota
            </a>

            <a href="/konten" class="{{ request()->is('konten*') ? 'active' : '' }}">
                <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="3" y="3" width="18" height="18" rx="2"/>
                    <path d="M8 7h8"/>
                    <path d="M8 12h8"/>
                    <path d="M8 17h5"/>
                </svg>
                Manajemen Konten
            </a>

            <a href="/aktivitas" class="{{ request()->is('aktivitas*') ? 'active' : '' }}">
                <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M22 12h-4l-3 9L9 3l-3 9H2"/>
                </svg>
                Aktivitas Harian
            </a>

            <a href="/video" class="{{ request()->is('video*') ? 'active' : '' }}">
                <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polygon points="23 7 16 12 23 17 23 7"/>
                    <rect x="1" y="5" width="15" height="14" rx="2"/>
                </svg>
                Arsip Video
            </a>
        </nav>

        <div class="sidebar-foot">
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="logout-btn">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/>
                        <polyline points="16 17 21 12 16 7"/>
                        <line x1="21" y1="12" x2="9" y2="12"/>
                    </svg>
                    Logout
                </button>
            </form>
        </div>

    </aside>

    <main class="main">

        <header class="header">
            <div>
                <div class="eyebrow">Data Anggota</div>
                <h1>Anggota <em>Tim Media</em></h1>
                <p>Kelola dan lihat data anggota tim media Piposmart.</p>
            </div>
        </header>

        <section class="box">

            <div class="box-header">
                <h2>Daftar Anggota</h2>

                @if(auth()->user()->role === 'admin')
                    <button type="button" class="btn-tambah" onclick="bukaModalTambah()">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="12" y1="5" x2="12" y2="19"/>
                            <line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                        Tambah Anggota
                    </button>
                @endif
            </div>

            <div class="search-box">
                <span class="search-icon">
                    <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="11" cy="11" r="7"/>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"/>
                    </svg>
                </span>

                <input
                    type="text"
                    id="searchAnggota"
                    placeholder="Cari nama atau jabatan anggota..."
                    autocomplete="off"
                >
            </div>

            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Jabatan</th>

                            @if(auth()->user()->role === 'admin')
                                <th>Aksi</th>
                            @endif
                        </tr>
                    </thead>

                    <tbody id="daftarAnggota">

                        @forelse ($anggota as $item)
                            <tr class="anggota-row">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->jabatan }}</td>

                                @if(auth()->user()->role === 'admin')
                                    <td>
                                        <div class="action-group">

                                            <button
                                                type="button"
                                                class="btn-edit"
                                                data-id="{{ $item->id }}"
                                                data-nama="{{ $item->nama }}"
                                                data-jabatan="{{ $item->jabatan }}"
                                                onclick="bukaModalEdit(this)"
                                            >
                                                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M12 20h9"/>
                                                    <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/>
                                                </svg>
                                                Edit
                                            </button>

                                            <form action="/anggota/{{ $item->id }}"
                                                  method="POST"
                                                  class="action-form"
                                                  onsubmit="return confirm('Yakin ingin menghapus anggota ini?');">

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn-hapus">
                                                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                                                        <polyline points="3 6 5 6 21 6"/>
                                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6"/>
                                                        <path d="M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/>
                                                    </svg>
                                                    Hapus
                                                </button>
                                            </form>

                                        </div>
                                    </td>
                                @endif
                            </tr>
                        @empty
                            <tr>
                                <td colspan="{{ auth()->user()->role === 'admin' ? 4 : 3 }}" class="empty">
                                    Belum ada data anggota tim.
                                </td>
                            </tr>
                        @endforelse

                        <tr id="noResult">
                            <td colspan="{{ auth()->user()->role === 'admin' ? 4 : 3 }}" class="no-result">
                                Anggota tidak ditemukan.
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </section>

    </main>

    <!-- popup tambah anggota -->
    @if(auth()->user()->role === 'admin')
    <div class="modal-overlay" id="modalTambah" onclick="klikLuarModal(event, 'modalTambah')">
        <div class="modal">

            <div class="modal-header">
                <div>
                    <div class="modal-eyebrow">Data Tim Media</div>
                    <h2>Tambah Anggota</h2>
                    <p>Masukkan informasi anggota baru.</p>
                </div>

                <button type="button" class="modal-close" onclick="tutupModal('modalTambah')">&times;</button>
            </div>

            <form action="/anggota" method="POST">
                @csrf

                <div class="form-group">
                    <label for="namaTambah">Nama Anggota</label>
                    <input
                        type="text"
                        id="namaTambah"
                        name="nama"
                        placeholder="Masukkan nama anggota"
                        value="{{ old('nama') }}"
                        required
                    >
                    @error('nama')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="jabatanTambah">Jabatan</label>
                    <input
                        type="text"
                        id="jabatanTambah"
                        name="jabatan"
                        placeholder="Contoh: Tim Media"
                        value="{{ old('jabatan') }}"
                        required
                    >
                    @error('jabatan')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="modal-actions">
                    <button type="button" class="btn-batal" onclick="tutupModal('modalTambah')">
                        Batal
                    </button>
                    <button type="submit" class="btn-simpan">
                        Simpan Anggota
                    </button>
                </div>
            </form>

        </div>
    </div>

    <!-- popup edit anggota -->
    <div class="modal-overlay" id="modalEdit" onclick="klikLuarModal(event, 'modalEdit')">
        <div class="modal">

            <div class="modal-header">
                <div>
                    <div class="modal-eyebrow">Perbarui Data</div>
                    <h2>Edit Anggota</h2>
                    <p>Ubah informasi anggota tim media.</p>
                </div>

                <button type="button" class="modal-close" onclick="tutupModal('modalEdit')">&times;</button>
            </div>

            <form id="formEdit" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="namaEdit">Nama Anggota</label>
                    <input
                        type="text"
                        id="namaEdit"
                        name="nama"
                        placeholder="Masukkan nama anggota"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="jabatanEdit">Jabatan</label>
                    <input
                        type="text"
                        id="jabatanEdit"
                        name="jabatan"
                        placeholder="Masukkan jabatan"
                        required
                    >
                </div>

                <div class="modal-actions">
                    <button type="button" class="btn-batal" onclick="tutupModal('modalEdit')">
                        Batal
                    </button>
                    <button type="submit" class="btn-simpan">
                        Simpan Perubahan
                    </button>
                </div>
            </form>

        </div>
    </div>
    @endif

    <script>
        // pencarian anggota
        const searchInput = document.getElementById('searchAnggota');
        const rows = document.querySelectorAll('.anggota-row');
        const noResult = document.getElementById('noResult');

        searchInput.addEventListener('input', function () {
            const keyword = this.value.toLowerCase().trim();
            let jumlahDitemukan = 0;

            rows.forEach(function (row) {
                const nama = row.children[1].textContent.toLowerCase();
                const jabatan = row.children[2].textContent.toLowerCase();

                if (nama.includes(keyword) || jabatan.includes(keyword)) {
                    row.style.display = '';
                    jumlahDitemukan++;
                } else {
                    row.style.display = 'none';
                }
            });

            noResult.style.display =
                jumlahDitemukan === 0 && rows.length > 0 ? 'table-row' : 'none';
        });

        // bka popup tmbah
        function bukaModalTambah() {
            document.getElementById('modalTambah').classList.add('show');
            document.getElementById('namaTambah').focus();
        }

        // buka popup edit
        function bukaModalEdit(button) {
            const id = button.dataset.id;
            const nama = button.dataset.nama;
            const jabatan = button.dataset.jabatan;

            document.getElementById('formEdit').action = '/anggota/' + id;
            document.getElementById('namaEdit').value = nama;
            document.getElementById('jabatanEdit').value = jabatan;

            document.getElementById('modalEdit').classList.add('show');
            document.getElementById('namaEdit').focus();
        }

        // tutup pop up
        function tutupModal(id) {
            document.getElementById(id).classList.remove('show');
        }

        // tutup ketika klik area luar popup
        function klikLuarModal(event, id) {
            if (event.target.id === id) {
                tutupModal(id);
            }
        }

        // tutup dngan tombol ESC
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                document.querySelectorAll('.modal-overlay.show').forEach(function(modal) {
                    modal.classList.remove('show');
                });
            }
        });
    </script>

</body>
</html>
