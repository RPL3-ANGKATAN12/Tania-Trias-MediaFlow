
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Konten — Piposmart</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Fraunces:ital,opsz,wght@0,9..144,400;0,9..144,500;0,9..144,600;1,9..144,400;1,9..144,500;1,9..144,600&display=swap" rel="stylesheet">

    <style>
        :root {
            --red-50:#fff4f4;
            --red-100:#ffe4e4;
            --red-200:#ffc9c9;
            --red-300:#fca5a5;
            --red-400:#f26d6d;
            --red-500:#d92d2d;
            --red-600:#b81f1f;
            --red-700:#941616;
            --red-800:#701010;

            --ink-900:#17171d;
            --ink-700:#3a3a44;
            --ink-500:#6b6b76;
            --ink-400:#9a9aa4;

            --bg:#faf8f7;
            --surface:#ffffff;
            --border:#ebe7e5;
            --border-strong:#ddd6d3;

            --radius-lg:22px;
            --radius-sm:11px;

            --shadow-sm:0 2px 10px rgba(23,23,29,.05);
            --shadow-red:0 10px 32px rgba(217,45,45,.28);
            --shadow-lg:0 24px 60px rgba(148,22,22,.18);

            --font-sans:'Plus Jakarta Sans',Arial,sans-serif;
            --font-serif:'Fraunces',Georgia,serif;

            --status-belum-bg:#fff4f4;
            --status-belum-text:#b81f1f;
            --status-sedang-bg:#fff8ec;
            --status-sedang-text:#a86214;
            --status-selesai-bg:#f0faf3;
            --status-selesai-text:#1f7a4d;
        }

        * {
            box-sizing:border-box;
            margin:0;
            padding:0;
        }

        html {scroll-behavior:smooth;}

        body {
            font-family:var(--font-sans);
            background:var(--bg);
            color:var(--ink-900);
            line-height:1.55;
            min-height:100vh;
            -webkit-font-smoothing:antialiased;
        }

        body::before {
            content:"";
            position:fixed;
            top:0;
            right:0;
            width:380px;
            height:380px;
            background:repeating-linear-gradient(
                -45deg,
                rgba(217,45,45,.05) 0px,
                rgba(217,45,45,.05) 1px,
                transparent 1px,
                transparent 14px
            );
            pointer-events:none;
            z-index:0;
            mask-image:radial-gradient(circle at top right,#000 0%,transparent 72%);
        }

        /* SIDEBAR */
        .sidebar {
            width:268px;
            min-height:100vh;
            position:fixed;
            left:0;
            top:0;
            padding:28px 18px 24px;
            background:var(--surface);
            border-right:1px solid var(--border);
            display:flex;
            flex-direction:column;
            overflow-y:auto;
            z-index:20;
        }

        .brand {
            display:flex;
            align-items:center;
            gap:12px;
            padding:0 6px;
            margin-bottom:4px;
        }

        .brand-logo {
            width:44px;
            height:44px;
            border-radius:13px;
            background:#fff;
            border:1px solid var(--border);
            display:grid;
            place-items:center;
            overflow:hidden;
            flex-shrink:0;
            box-shadow:var(--shadow-sm);
        }

        .brand-logo img {
            width:100%;
            height:100%;
            object-fit:contain;
            padding:5px;
        }

        .brand-text .name {
            font-family:var(--font-serif);
            font-size:18px;
            font-weight:500;
            color:var(--ink-900);
        }

        .brand-text .sub {
            font-size:10.5px;
            font-weight:700;
            letter-spacing:1.8px;
            text-transform:uppercase;
            color:var(--red-500);
            margin-top:3px;
        }

        .nav-label {
            font-size:10px;
            font-weight:700;
            letter-spacing:1.8px;
            text-transform:uppercase;
            color:var(--ink-400);
            padding:0 12px;
            margin:32px 0 12px;
        }

        .menu {
            display:flex;
            flex-direction:column;
            gap:3px;
        }

        .menu a {
            display:flex;
            align-items:center;
            gap:12px;
            color:var(--ink-500);
            text-decoration:none;
            padding:10px 12px;
            border-radius:var(--radius-sm);
            font-size:13.5px;
            font-weight:500;
            transition:.2s;
        }

        .menu a svg {flex-shrink:0;color:var(--ink-400);}

        .menu a:hover {
            background:var(--red-50);
            color:var(--red-700);
        }

        .menu a.active {
            background:var(--red-500);
            color:#fff;
            font-weight:600;
            box-shadow:0 6px 18px rgba(217,45,45,.3);
        }

        .menu a.active svg {color:#fff;}

        .sidebar-foot {
            margin-top:auto;
            padding-top:24px;
            border-top:1px solid var(--border);
        }

        .logout-btn {
            width:100%;
            display:flex;
            align-items:center;
            gap:10px;
            background:transparent;
            border:1px solid var(--border-strong);
            color:var(--ink-500);
            padding:10px 13px;
            font-size:13px;
            font-weight:600;
            font-family:var(--font-sans);
            cursor:pointer;
            border-radius:var(--radius-sm);
        }

        .logout-btn:hover {
            background:var(--red-50);
            border-color:var(--red-300);
            color:var(--red-600);
        }

        /* KONTEN UTAMA */
        .main {
            margin-left:268px;
            padding:38px 48px 60px;
            position:relative;
            z-index:1;
            min-width:0;
        }

        .header {
            display:flex;
            align-items:flex-start;
            justify-content:space-between;
            gap:20px;
            flex-wrap:wrap;
            margin-bottom:26px;
        }

        .header .eyebrow {
            display:inline-flex;
            align-items:center;
            gap:9px;
            font-size:11px;
            font-weight:700;
            letter-spacing:2.2px;
            text-transform:uppercase;
            color:var(--red-500);
            margin-bottom:10px;
        }

        .header .eyebrow::before {
            content:"";
            width:22px;
            height:2px;
            background:var(--red-500);
            border-radius:2px;
        }

        .header h1 {
            font-family:var(--font-serif);
            font-size:clamp(26px,3vw,34px);
            font-weight:500;
            line-height:1.14;
            color:var(--ink-900);
        }

        .header h1 em {
            font-style:italic;
            color:var(--red-600);
        }

        .header p {
            color:var(--ink-500);
            font-size:13.5px;
            margin-top:8px;
            max-width:560px;
        }

        /* TOMBOL TAMBAH */
        .btn-tambah {
            display:inline-flex;
            align-items:center;
            gap:8px;
            background:var(--red-500);
            color:#fff;
            padding:11px 20px;
            border:none;
            border-radius:var(--radius-sm);
            font-family:var(--font-sans);
            font-size:13px;
            font-weight:700;
            cursor:pointer;
            box-shadow:var(--shadow-red);
            transition:.2s;
        }

        .btn-tambah:hover {
            background:var(--red-600);
            transform:translateY(-1px);
        }

        /* KOTAK */
        .box {
            background:var(--surface);
            border:1px solid var(--border);
            border-radius:var(--radius-lg);
            padding:26px;
            box-shadow:var(--shadow-sm);
            margin-bottom:24px;
        }

        .box-header {
            display:flex;
            justify-content:space-between;
            align-items:center;
            flex-wrap:wrap;
            gap:15px;
            margin-bottom:22px;
        }

        .box-header h2 {
            font-family:var(--font-serif);
            font-size:20px;
            font-weight:600;
            color:var(--ink-900);
        }

        .box-header-actions {
            display:flex;
            align-items:center;
            gap:10px;
            flex-wrap:wrap;
        }

        .filter-form {
            display:flex;
            gap:8px;
        }

        .filter-form select {
            padding:10px 14px;
            border:1px solid var(--border-strong);
            border-radius:var(--radius-sm);
            background:#fff;
            color:var(--ink-900);
            font-family:var(--font-sans);
            font-size:13px;
            font-weight:600;
            cursor:pointer;
        }

        /* KALENDER */
        .calendar {
            display:grid;
            grid-template-columns:repeat(7,minmax(0,1fr));
            gap:8px;
        }

        .day-name {
            text-align:center;
            padding:12px 5px;
            font-size:11px;
            font-weight:700;
            letter-spacing:1.4px;
            text-transform:uppercase;
            color:var(--ink-400);
        }

        .day {
            min-height:108px;
            border:1px solid var(--border);
            border-radius:var(--radius-sm);
            padding:10px;
            font-size:12.5px;
            overflow-wrap:anywhere;
            background:#fff;
            position:relative;
        }

        .day:hover {border-color:var(--red-200);}

        .day > strong {
            display:inline-block;
            font-family:var(--font-serif);
            font-size:14px;
            color:var(--ink-700);
            margin-bottom:4px;
        }

        .day.today {
            border:1.5px solid var(--red-500);
            background:var(--red-50);
        }

        .day.today > strong {color:var(--red-600);}

        .day.today > strong::after {
            content:" •";
            color:var(--red-500);
        }

        .day.empty {
            background:transparent;
            border:1px dashed var(--border);
        }

        .content-item {
            margin-top:6px;
            padding:7px 8px;
            background:var(--red-50);
            border:1px solid var(--red-100);
            border-radius:7px;
            font-size:10.5px;
            line-height:1.4;
        }

        .content-item strong {
            display:block;
            font-weight:700;
            color:var(--ink-900);
            margin-bottom:5px;
            font-size:11px;
            overflow-wrap:anywhere;
        }

        /* STATUS */
        .status {
            display:inline-block;
            margin-top:4px;
            padding:3px 8px;
            border-radius:5px;
            font-size:9.5px;
            font-weight:700;
            letter-spacing:.2px;
            text-transform:uppercase;
        }

        .status-belum {
            background:var(--status-belum-bg);
            color:var(--status-belum-text);
        }

        .status-sedang {
            background:var(--status-sedang-bg);
            color:var(--status-sedang-text);
        }

        .status-selesai {
            background:var(--status-selesai-bg);
            color:var(--status-selesai-text);
        }

        /* SEARCH */
        .search-box {
            position:relative;
            width:100%;
            max-width:420px;
            margin-bottom:20px;
        }

        .search-box input {
            width:100%;
            padding:12px 16px 12px 44px;
            border:1px solid var(--border-strong);
            border-radius:var(--radius-sm);
            outline:none;
            font-family:var(--font-sans);
            font-size:13.5px;
            color:var(--ink-900);
            background:#fff;
        }

        .search-box input:focus {
            border-color:var(--red-400);
            box-shadow:0 0 0 3px var(--red-100);
        }

        .search-icon {
            position:absolute;
            left:15px;
            top:50%;
            transform:translateY(-50%);
            color:var(--ink-400);
            pointer-events:none;
            display:flex;
        }

        /* TABEL */
        .table-wrapper {
            width:100%;
            overflow-x:auto;
            border-radius:var(--radius-sm);
            border:1px solid var(--border);
        }

        table {
            width:100%;
            border-collapse:collapse;
            font-size:13px;
        }

        thead tr {
            background:var(--red-50);
            text-align:left;
        }

        th {
            padding:13px 16px;
            color:var(--red-700);
            font-weight:700;
            font-size:10.5px;
            letter-spacing:1.4px;
            text-transform:uppercase;
            border-bottom:1px solid var(--red-100);
            white-space:nowrap;
        }

        td {
            padding:14px 16px;
            color:var(--ink-700);
            border-bottom:1px solid var(--border);
            white-space:nowrap;
            vertical-align:middle;
        }

        tbody tr:last-child td {border-bottom:none;}

        tbody tr.konten-row:hover {background:var(--red-50);}

        td:nth-child(2) {
            white-space:normal;
            font-weight:600;
            color:var(--ink-900);
            min-width:180px;
        }

        .status-select {
            padding:8px 12px;
            border:1px solid var(--border-strong);
            border-radius:7px;
            font-size:12px;
            font-weight:700;
            cursor:pointer;
            outline:none;
            font-family:var(--font-sans);
        }

        .status-select.status-belum {
            background:var(--status-belum-bg);
            color:var(--status-belum-text);
            border-color:var(--red-200);
        }

        .status-select.status-sedang {
            background:var(--status-sedang-bg);
            color:var(--status-sedang-text);
            border-color:#f5d9b0;
        }

        .status-select.status-selesai {
            background:var(--status-selesai-bg);
            color:var(--status-selesai-text);
            border-color:#c8e6d2;
        }

        .empty-message,.no-result {
            padding:40px 20px;
            text-align:center;
            color:var(--ink-400);
            font-size:13px;
        }

        /* TOMBOL AKSI */
        .aksi-wrapper {
            display:flex;
            gap:7px;
        }

        .btn-edit,.btn-hapus {
            padding:7px 11px;
            border-radius:7px;
            cursor:pointer;
            font-family:var(--font-sans);
            font-size:12px;
            font-weight:700;
        }

        .btn-edit {
            background:#fff8ec;
            color:#a86214;
            border:1px solid #f5d9b0;
        }

        .btn-hapus {
            background:#fff4f4;
            color:#b81f1f;
            border:1px solid #ffc9c9;
        }

        .btn-edit:hover {background:#fff0d9;}
        .btn-hapus:hover {background:#ffe4e4;}

        /* POPUP */
        .modal {
            display:none;
            position:fixed;
            inset:0;
            background:rgba(23,23,29,.55);
            backdrop-filter:blur(4px);
            z-index:1000;
            justify-content:center;
            align-items:center;
            padding:20px;
        }

        .modal.active {display:flex;}

        .modal-content {
            background:#fff;
            width:100%;
            max-width:520px;
            max-height:90vh;
            overflow-y:auto;
            border-radius:20px;
            padding:28px;
            box-shadow:var(--shadow-lg);
            animation:modalMasuk .25s ease;
        }

        @keyframes modalMasuk {
            from {opacity:0;transform:translateY(15px);}
            to {opacity:1;transform:translateY(0);}
        }

        .modal-header {
            display:flex;
            justify-content:space-between;
            align-items:center;
            margin-bottom:22px;
        }

        .modal-header h2 {
            font-family:var(--font-serif);
            font-size:23px;
            color:var(--ink-900);
        }

        .modal-close {
            border:none;
            background:var(--red-50);
            color:var(--red-600);
            width:34px;
            height:34px;
            border-radius:9px;
            font-size:22px;
            cursor:pointer;
        }

        .form-group {margin-bottom:16px;}

        .form-group label {
            display:block;
            font-size:12px;
            font-weight:700;
            color:var(--ink-700);
            margin-bottom:7px;
        }

        .form-group input,
        .form-group select {
            width:100%;
            padding:12px 13px;
            border:1px solid var(--border-strong);
            border-radius:9px;
            font-family:var(--font-sans);
            font-size:13px;
            outline:none;
            background:#fff;
        }

        .form-group input:focus,
        .form-group select:focus {
            border-color:var(--red-400);
            box-shadow:0 0 0 3px var(--red-100);
        }

        .modal-actions {
            display:flex;
            justify-content:flex-end;
            gap:10px;
            margin-top:24px;
        }

        .btn-batal,.btn-simpan {
            padding:11px 18px;
            border-radius:9px;
            font-family:var(--font-sans);
            font-size:13px;
            font-weight:700;
            cursor:pointer;
        }

        .btn-batal {
            background:#fff;
            border:1px solid var(--border-strong);
            color:var(--ink-500);
        }

        .btn-simpan {
            background:var(--red-500);
            border:none;
            color:#fff;
        }

        .btn-simpan:hover {background:var(--red-600);}

        /* RESPONSIVE */
        @media(max-width:1024px) {
            .main {padding:32px 30px 48px;}
        }

        @media(max-width:900px) {
            .box {padding:20px;}
            .day {min-height:82px;padding:7px;}
            .day-name {font-size:10px;padding:9px 3px;}
            .content-item {padding:5px 6px;font-size:9.5px;}
            .content-item strong {font-size:10px;}
            .status {font-size:8.5px;padding:2px 6px;}
        }

        @media(max-width:768px) {
            .sidebar {
                width:100%;
                min-height:auto;
                position:static;
                border-right:none;
                border-bottom:1px solid var(--border);
                padding:18px 16px;
            }

            .nav-label {display:none;}

            .menu {
                flex-direction:row;
                flex-wrap:wrap;
                gap:6px;
                margin-top:16px;
            }

            .menu a {padding:8px 12px;font-size:12.5px;}

            .sidebar-foot {
                margin-top:16px;
                padding-top:16px;
            }

            .logout-btn {width:auto;}

            .main {margin-left:0;padding:24px 18px 44px;}

            .box-header {
                flex-direction:column;
                align-items:flex-start;
            }

            .box-header-actions {width:100%;}

            .filter-form {flex:1;}

            .filter-form select {flex:1;min-width:0;}

            .calendar {gap:4px;}

            .day {
                min-height:62px;
                padding:4px;
                font-size:10.5px;
            }

            .day > strong {font-size:12px;}

            .content-item {
                padding:3px 5px;
                font-size:8.5px;
                margin-top:3px;
            }

            .content-item strong {
                font-size:9px;
                margin-bottom:2px;
            }

            .status {font-size:7.5px;padding:2px 4px;}

            .search-box {max-width:100%;}
        }

        @media(max-width:440px) {
            .menu {flex-direction:column;}
            .menu a {width:100%;}
            .header h1 {font-size:24px;}
        }

        @media(max-width:500px) {
            .modal-content {padding:20px;}
        }

        @media(prefers-reduced-motion:reduce) {
            *,*::before,*::after {
                animation:none!important;
                transition:none!important;
            }
        }
    </style>
</head>

<body>

    <!-- SIDEBAR -->
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
                    <path d="M8 7h8"/><path d="M8 12h8"/><path d="M8 17h5"/>
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

    <!-- KONTEN UTAMA -->
    <main class="main">

        <header class="header">
            <div>
                <div class="eyebrow">Manajemen Konten</div>
                <h1>Kelola <em>Konten Media</em></h1>
                <p>Kelola dan pantau jadwal konten media sosial tim.</p>
            </div>
        </header>

        <!-- KALENDER KONTEN -->
        <section class="box">
            <div class="box-header">
                <h2>Kalender Konten</h2>

                <div class="box-header-actions">
                    <button type="button" class="btn-tambah" onclick="bukaModalTambah()">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="12" y1="5" x2="12" y2="19"/>
                            <line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                        Tambah Konten
                    </button>

                    <form method="GET" action="/konten" class="filter-form">
                        <select name="bulan" onchange="this.form.submit()">
                            @foreach(range(1, 12) as $i)
                                <option value="{{ sprintf('%02d', $i) }}"
                                    {{ $bulan == sprintf('%02d', $i) ? 'selected' : '' }}>
                                    {{ \Carbon\Carbon::create()->month($i)->translatedFormat('F') }}
                                </option>
                            @endforeach
                        </select>
                            <input
                                type="number"
                                name="tahun"
                                value="{{ $tahun }}"
                                min="2000"
                                max="2100"
                                placeholder="Tahun"
                                onchange="this.form.submit()"
                                style="
                                    width:100px;
                                    padding:10px 14px;
                                    border:1px solid var(--border-strong);
                                    border-radius:var(--radius-sm);
                                    background:#fff;
                                    color:var(--ink-900);
                                    font-family:var(--font-sans);
                                    font-size:13px;
                                    font-weight:600;
                                ">
                    </form>
                </div>
            </div>

            <div class="calendar">
                @foreach(['Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu'] as $hari)
                    <div class="day-name">{{ $hari }}</div>
                @endforeach

                @php
                    $awalBulan = \Carbon\Carbon::createFromDate($tahun, $bulan, 1);
                    $jumlahHari = $awalBulan->daysInMonth;
                    $offset = $awalBulan->dayOfWeek;
                @endphp

                @for($i = 0; $i < $offset; $i++)
                    <div class="day empty"></div>
                @endfor

                @for($tanggal = 1; $tanggal <= $jumlahHari; $tanggal++)
                    @php
                        $tanggalLengkap = sprintf('%04d-%02d-%02d', $tahun, $bulan, $tanggal);
                    @endphp

                    <div class="day {{ $tanggal == date('d') && $bulan == date('m') && $tahun == date('Y') ? 'today' : '' }}">
                        <strong>{{ $tanggal }}</strong>

                        @foreach($konten->where('tanggal_target', $tanggalLengkap) as $item)
                            <div class="content-item">
                                <strong>{{ $item->judul }}</strong>

                                <span class="status {{ $item->status == 'Belum Dikerjakan' ? 'status-belum' : ($item->status == 'Sedang Dikerjakan' ? 'status-sedang' : 'status-selesai') }}">
                                    {{ $item->status }}
                                </span>
                            </div>
                        @endforeach
                    </div>
                @endfor
            </div>
        </section>

        <!-- DAFTAR KONTEN -->
        <section class="box">
            <div class="box-header">
                <h2>Daftar Konten</h2>
            </div>

            <!-- PENCARIAN -->
            <div class="search-box">
                <span class="search-icon">
                    <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="11" cy="11" r="7"/>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"/>
                    </svg>
                </span>

                <input
                    type="text"
                    id="searchKonten"
                    placeholder="Cari judul, jenis, platform, PIC, atau status..."
                    autocomplete="off">
            </div>

            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Judul Konten</th>
                            <th>Jenis</th>
                            <th>Platform</th>
                            <th>PIC</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($konten as $item)
                            <tr class="konten-row">
                                <td>
                                    {{ \Carbon\Carbon::parse($item->tanggal_target)->format('d/m/Y') }}
                                </td>

                                <td>{{ $item->judul }}</td>
                                <td>{{ $item->jenis }}</td>
                                <td>{{ $item->platform->nama_platform ?? '-' }}</td>
                                <td>{{ $item->pic_nama ?? optional($item->anggota)->nama ?? '-' }}</td>

                                <td>
                                    <form action="/konten/{{ $item->id }}/status" method="POST">
                                        @csrf

                                        <select
                                            name="status"
                                            class="status-select {{ $item->status == 'Belum Dikerjakan' ? 'status-belum' : ($item->status == 'Sedang Dikerjakan' ? 'status-sedang' : 'status-selesai') }}"
                                            onchange="this.form.submit()">

                                            <option value="Belum Dikerjakan" {{ $item->status == 'Belum Dikerjakan' ? 'selected' : '' }}>
                                                Belum Dikerjakan
                                            </option>

                                            <option value="Sedang Dikerjakan" {{ $item->status == 'Sedang Dikerjakan' ? 'selected' : '' }}>
                                                Sedang Dikerjakan
                                            </option>

                                            <option value="Selesai" {{ $item->status == 'Selesai' ? 'selected' : '' }}>
                                                Selesai
                                            </option>
                                        </select>
                                    </form>
                                </td>

                                <!-- TOMBOL EDIT DAN HAPUS -->
                                <td>
                                    <div class="aksi-wrapper">

                                        <button
                                            type="button"
                                            class="btn-edit"
                                            onclick="bukaModalEdit(this)"
                                            data-id="{{ $item->id }}"
                                            data-judul="{{ $item->judul }}"
                                            data-jenis="{{ $item->jenis }}"
                                            data-platform="{{ $item->platform_id }}"
                                            data-pic="{{ $item->pic_nama }}"
                                            data-tanggal="{{ $item->tanggal_target }}"
                                            data-status="{{ $item->status }}">
                                            Edit
                                        </button>

                                        <button
                                            type="button"
                                            class="btn-hapus"
                                            onclick="bukaModalHapus(this)"
                                            data-id="{{ $item->id }}"
                                            data-judul="{{ $item->judul }}">
                                            Hapus
                                        </button>

                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="empty-message">
                                    Belum ada konten pada bulan ini.
                                </td>
                            </tr>
                        @endforelse

                        <tr id="noResult" style="display:none;">
                            <td colspan="7" class="no-result">
                                Konten yang kamu cari tidak ditemukan.
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <!-- POPUP TAMBAH -->
    <div class="modal" id="modalTambah">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Tambah Konten</h2>
                <button type="button" class="modal-close" onclick="tutupModal('modalTambah')">&times;</button>
            </div>

            <form action="/konten" method="POST">
                @csrf

                <div class="form-group">
                    <label>Judul Konten</label>
                    <input type="text" name="judul" required maxlength="150">
                </div>

                <div class="form-group">
                    <label>Jenis Konten</label>
                    <input type="text" name="jenis" required placeholder="Contoh: Feed, Story, Reels">
                </div>

                <div class="form-group">
                    <label>Platform</label>
                    <select name="platform_id" required>
                        <option value="">Pilih Platform</option>
                        @foreach($platform as $p)
                            <option value="{{ $p->id }}">{{ $p->nama_platform }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>PIC</label>
                    <input type="text" name="pic_nama" required maxlength="100" placeholder="Nama penanggung jawab">
                </div>

                <div class="form-group">
                    <label>Tanggal Target</label>
                    <input type="date" name="tanggal_target" required>
                </div>

                <div class="form-group">
                    <label>Status</label>
                    <select name="status" required>
                        <option value="Belum Dikerjakan">Belum Dikerjakan</option>
                        <option value="Sedang Dikerjakan">Sedang Dikerjakan</option>
                        <option value="Selesai">Selesai</option>
                    </select>
                </div>

                <div class="modal-actions">
                    <button type="button" class="btn-batal" onclick="tutupModal('modalTambah')">Batal</button>
                    <button type="submit" class="btn-simpan">Simpan Konten</button>
                </div>
            </form>
        </div>
    </div>

    <!-- POPUP EDIT -->
    <div class="modal" id="modalEdit">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Edit Konten</h2>
                <button type="button" class="modal-close" onclick="tutupModal('modalEdit')">&times;</button>
            </div>

            <form id="formEdit" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label>Judul Konten</label>
                    <input type="text" name="judul" id="editJudul" required maxlength="150">
                </div>

                <div class="form-group">
                    <label>Jenis Konten</label>
                    <input type="text" name="jenis" id="editJenis" required>
                </div>

                <div class="form-group">
                    <label>Platform</label>
                    <select name="platform_id" id="editPlatform" required>
                        <option value="">Pilih Platform</option>
                        @foreach($platform as $p)
                            <option value="{{ $p->id }}">{{ $p->nama_platform }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>PIC</label>
                    <input type="text" name="pic_nama" id="editPic" required maxlength="100">
                </div>

                <div class="form-group">
                    <label>Tanggal Target</label>
                    <input type="date" name="tanggal_target" id="editTanggal" required>
                </div>

                <div class="form-group">
                    <label>Status</label>
                    <select name="status" id="editStatus" required>
                        <option value="Belum Dikerjakan">Belum Dikerjakan</option>
                        <option value="Sedang Dikerjakan">Sedang Dikerjakan</option>
                        <option value="Selesai">Selesai</option>
                    </select>
                </div>

                <div class="modal-actions">
                    <button type="button" class="btn-batal" onclick="tutupModal('modalEdit')">Batal</button>
                    <button type="submit" class="btn-simpan">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>

    <!-- POPUP HAPUS -->
    <div class="modal" id="modalHapus">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Hapus Konten</h2>
                <button type="button" class="modal-close" onclick="tutupModal('modalHapus')">&times;</button>
            </div>

            <p style="font-size:14px;color:var(--ink-500);">
                Apakah kamu yakin ingin menghapus konten
                <strong id="hapusJudul" style="color:var(--ink-900);"></strong>?
                Data yang dihapus tidak dapat dikembalikan.
            </p>

            <form id="formHapus" method="POST">
                @csrf
                @method('DELETE')

                <div class="modal-actions">
                    <button type="button" class="btn-batal" onclick="tutupModal('modalHapus')">Batal</button>
                    <button type="submit" class="btn-simpan">Ya, Hapus</button>
                </div>
            </form>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {

            // PENCARIAN KONTEN
            const searchInput = document.getElementById('searchKonten');
            const rows = document.querySelectorAll('.konten-row');
            const noResult = document.getElementById('noResult');

            if (searchInput) {
                searchInput.addEventListener('input', function () {
                    const keyword = this.value.toLowerCase().trim();
                    let ditemukan = 0;

                    rows.forEach(function (row) {
                        const isiBaris = row.textContent.toLowerCase();

                        if (isiBaris.includes(keyword)) {
                            row.style.display = '';
                            ditemukan++;
                        } else {
                            row.style.display = 'none';
                        }
                    });

                    if (noResult) {
                        noResult.style.display =
                            ditemukan === 0 && rows.length > 0
                                ? 'table-row'
                                : 'none';
                    }
                });
            }

            // TUTUP POPUP KETIKA KLIK AREA LUAR
            document.querySelectorAll('.modal').forEach(function (modal) {
                modal.addEventListener('click', function (event) {
                    if (event.target === modal) {
                        modal.classList.remove('active');
                    }
                });
            });

            // TUTUP POPUP DENGAN TOMBOL ESCAPE
            document.addEventListener('keydown', function (event) {
                if (event.key === 'Escape') {
                    document.querySelectorAll('.modal.active').forEach(function (modal) {
                        modal.classList.remove('active');
                    });
                }
            });

        });

        // BUKA POPUP TAMBAH
        function bukaModalTambah() {
            document.getElementById('modalTambah').classList.add('active');
        }

        // BUKA POPUP EDIT
        function bukaModalEdit(tombol) {
            const id = tombol.dataset.id;

            document.getElementById('formEdit').action = '/konten/' + id;

            document.getElementById('editJudul').value = tombol.dataset.judul || '';
            document.getElementById('editJenis').value = tombol.dataset.jenis || '';
            document.getElementById('editPlatform').value = tombol.dataset.platform || '';
            document.getElementById('editPic').value = tombol.dataset.pic || '';
            document.getElementById('editTanggal').value = tombol.dataset.tanggal || '';
            document.getElementById('editStatus').value = tombol.dataset.status || 'Belum Dikerjakan';

            document.getElementById('modalEdit').classList.add('active');
        }

        // BUKA POPUP HAPUS
        function bukaModalHapus(tombol) {
            const id = tombol.dataset.id;

            document.getElementById('formHapus').action = '/konten/' + id;
            document.getElementById('hapusJudul').textContent = tombol.dataset.judul || '';

            document.getElementById('modalHapus').classList.add('active');
        }

        // TUTUP POPUP
        function tutupModal(id) {
            document.getElementById(id).classList.remove('active');
        }
    </script>

</body>
</html>
