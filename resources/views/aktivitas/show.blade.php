<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aktivitas Anggota — Piposmart</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Fraunces:ital,opsz,wght@0,9..144,400;0,9..144,500;0,9..144,600;1,9..144,400;1,9..144,500;1,9..144,600&display=swap" rel="stylesheet">

    <style>
        :root {
            --red-50: #fff4f4;
            --red-100: #ffe4e4;
            --red-200: #ffc9c9;
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
            --font-sans: 'Plus Jakarta Sans', Arial, sans-serif;
            --font-serif: 'Fraunces', Georgia, serif;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0
        }

        body {
            font-family: var(--font-sans);
            background: var(--bg);
            color: var(--ink-900);
            line-height: 1.55;
            min-height: 100vh;
        }

        .sidebar {
            width: 268px;
            min-height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            padding: 28px 18px 24px;
            background: #fff;
            border-right: 1px solid var(--border);
            display: flex;
            flex-direction: column;
            z-index: 20;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 0 6px
        }

        .brand-logo {
            width: 44px;
            height: 44px;
            border-radius: 13px;
            border: 1px solid var(--border);
            display: grid;
            place-items: center;
            overflow: hidden;
        }

        .brand-logo img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            padding: 5px
        }

        .brand-text .name {
            font-family: var(--font-serif);
            font-size: 18px
        }

        .brand-text .sub {
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 1.8px;
            color: var(--red-500);
            text-transform: uppercase;
        }

        .nav-label {
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 1.8px;
            color: var(--ink-400);
            margin: 32px 0 12px;
            padding: 0 12px;
        }

        .menu {
            display: flex;
            flex-direction: column;
            gap: 3px
        }

        .menu a {
            display: flex;
            align-items: center;
            gap: 12px;
            color: var(--ink-500);
            text-decoration: none;
            padding: 10px 12px;
            border-radius: 11px;
            font-size: 13.5px;
            font-weight: 500;
        }

        .menu a:hover {
            background: var(--red-50);
            color: var(--red-700)
        }

        .menu a.active {
            background: var(--red-500);
            color: #fff;
            font-weight: 700;
            box-shadow: 0 6px 18px #d92d2d30;
        }

        .sidebar-foot {
            margin-top: auto;
            padding-top: 24px;
            border-top: 1px solid var(--border)
        }

        .logout-btn {
            width: 100%;
            display: flex;
            align-items: center;
            gap: 10px;
            background: #fff;
            border: 1px solid var(--border-strong);
            color: var(--ink-500);
            padding: 10px 13px;
            font-size: 13px;
            font-weight: 600;
            cursor: pointer;
            border-radius: 11px;
            font-family: var(--font-sans);
        }

        .logout-btn:hover {
            background: var(--red-50);
            color: var(--red-600)
        }

        .main {
            margin-left: 268px;
            padding: 38px 48px 60px
        }

        .back {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            color: var(--ink-500);
            text-decoration: none;
            font-size: 12.5px;
            font-weight: 600;
            margin-bottom: 22px;
            padding: 7px 12px;
            border-radius: 8px;
            border: 1px solid var(--border);
            background: #fff;
        }

        .back:hover {
            color: var(--red-600);
            background: var(--red-50)
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
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 2.2px;
            text-transform: uppercase;
            color: var(--red-500);
            margin-bottom: 10px;
        }

        .header h1 {
            font-family: var(--font-serif);
            font-size: clamp(26px, 3vw, 34px);
            font-weight: 500;
            line-height: 1.14;
        }

        .header h1 em {
            color: var(--red-600)
        }

        .header p {
            color: var(--ink-500);
            font-size: 13.5px;
            margin-top: 8px
        }

        .btn-tambah {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: var(--red-500);
            color: #fff;
            padding: 11px 20px;
            border-radius: 11px;
            font-size: 13px;
            font-weight: 700;
            border: none;
            cursor: pointer;
            font-family: var(--font-sans);
        }

        .btn-tambah:hover {
            background: var(--red-600)
        }

        .box {
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 22px;
            padding: 26px;
            box-shadow: 0 2px 10px #17171d08;
        }

        .box-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 15px;
            flex-wrap: wrap;
            margin-bottom: 22px;
        }

        .box-header h2 {
            font-family: var(--font-serif);
            font-size: 20px
        }

        .box-header p {
            font-size: 12.5px;
            color: var(--ink-500)
        }

        .filter-form {
            display: flex;
            gap: 8px;
            flex-wrap: wrap
        }

        .filter-form select,
        .filter-form input {
            padding: 10px 14px;
            border: 1px solid var(--border-strong);
            border-radius: 10px;
            background: #fff;
            color: var(--ink-900);
            font-family: var(--font-sans);
            font-size: 13px;
            outline: none;
        }

        .filter-form input {
            width: 110px
        }

        .filter-form select:focus,
        .filter-form input:focus {
            border-color: var(--red-400);
            box-shadow: 0 0 0 3px var(--red-100);
        }

        .table-wrapper {
            width: 100%;
            overflow-x: auto;
            border-radius: 11px;
            border: 1px solid var(--border);
        }

        table {
            width: 100%;
            min-width: 1300px;
            border-collapse: collapse;
            font-size: 13px
        }

        thead tr {
            background: var(--red-50)
        }

        th {
            color: var(--red-700);
            font-size: 10.5px;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
            text-align: left;
            padding: 13px 14px;
            border-bottom: 1px solid var(--red-100);
            white-space: nowrap;
        }

        td {
            padding: 14px;
            border-bottom: 1px solid var(--border);
            color: var(--ink-700);
            vertical-align: middle;
        }

        tbody tr:last-child td {
            border-bottom: none
        }

        tbody tr:hover {
            background: #fffafa
        }

        td:first-child {
            color: var(--ink-400);
            font-weight: 700;
            width: 55px
        }

        td:nth-child(8),
        td:nth-child(9) {
            min-width: 180px;
            white-space: normal
        }

        .status-badge {
            display: inline-block;
            padding: 6px 10px;
            border-radius: 7px;
            font-size: 10px;
            font-weight: 800;
            white-space: nowrap;
        }

        .status-create {
            background: #ffe4e4;
            color: #b81f1f
        }

        .status-start {
            background: #fff0e6;
            color: #c45b16
        }

        .status-halfway {
            background: #fff7d6;
            color: #9b7410
        }

        .status-finalizing {
            background: #eaf1ff;
            color: #315eae
        }

        .status-finished {
            background: #e8f8ee;
            color: #197342
        }

        .status-overdue {
            background: #f0eafa;
            color: #7042a3
        }

        .checkbox-wrapper {
            display: inline-flex;
            align-items: center;
            justify-content: center
        }

        .checkbox-custom {
            appearance: none;
            -webkit-appearance: none;
            width: 20px;
            height: 20px;
            border: 1.5px solid #c9c9d0;
            border-radius: 6px;
            background: #fff;
            cursor: pointer;
            position: relative;
            transition: .2s;
        }

        .checkbox-custom:hover:not(:disabled) {
            border-color: #16a34a
        }

        .checkbox-custom:checked {
            background: #16a34a;
            border-color: #16a34a;
        }

        .checkbox-custom:checked::after {
            content: "";
            position: absolute;
            left: 6px;
            top: 2px;
            width: 5px;
            height: 10px;
            border: solid #fff;
            border-width: 0 2px 2px 0;
            transform: rotate(45deg);
        }

        .checkbox-custom:disabled {
            cursor: not-allowed;
            opacity: .7
        }

        .checkbox-custom:disabled:checked {
            background: #16a34a;
            border-color: #16a34a;
            opacity: 1;
        }

        .action-group {
            display: flex;
            gap: 7px;
            align-items: center
        }

        .btn-edit,
        .btn-hapus {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            padding: 7px 12px;
            border-radius: 7px;
            font-size: 11.5px;
            font-weight: 700;
            cursor: pointer;
            font-family: var(--font-sans);
            border: 1px solid transparent;
        }

        .btn-edit {
            background: var(--red-50);
            color: var(--red-600);
            border-color: var(--red-100)
        }

        .btn-edit:hover {
            background: var(--red-500);
            color: #fff
        }

        .btn-hapus {
            background: #fff;
            color: var(--red-600);
            border-color: var(--red-200)
        }

        .btn-hapus:hover {
            background: var(--red-600);
            color: #fff
        }

        .empty {
            text-align: center;
            color: var(--ink-400);
            padding: 50px 20px
        }

        .modal {
            display: none;
            position: fixed;
            inset: 0;
            z-index: 1000;
            background: rgba(23, 23, 29, .55);
            padding: 20px;
            align-items: center;
            justify-content: center;
            overflow-y: auto;
        }

        .modal.show {
            display: flex
        }

        .modal-content {
            width: 100%;
            max-width: 620px;
            background: #fff;
            border-radius: 20px;
            padding: 26px;
            box-shadow: 0 24px 60px #0003;
            max-height: 90vh;
            overflow-y: auto;
        }

        .modal-small {
            max-width: 420px
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .modal-header h2 {
            font-family: var(--font-serif);
            font-size: 23px
        }

        .close-btn {
            border: none;
            background: var(--red-50);
            color: var(--red-600);
            width: 34px;
            height: 34px;
            border-radius: 9px;
            font-size: 21px;
            cursor: pointer;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 14px
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 6px
        }

        .form-group.full {
            grid-column: 1/-1
        }

        .form-group label {
            font-size: 12px;
            font-weight: 700;
            color: var(--ink-700)
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 11px 12px;
            border: 1px solid var(--border-strong);
            border-radius: 9px;
            font-family: var(--font-sans);
            font-size: 13px;
            outline: none;
            background: #fff;
        }

        .form-group textarea {
            min-height: 85px;
            resize: vertical
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            border-color: var(--red-400);
            box-shadow: 0 0 0 3px var(--red-100);
        }

        .modal-actions {
            display: flex;
            justify-content: flex-end;
            gap: 9px;
            margin-top: 22px
        }

        .btn-batal,
        .btn-simpan {
            padding: 10px 17px;
            border-radius: 9px;
            font-family: var(--font-sans);
            font-size: 12px;
            font-weight: 700;
            cursor: pointer;
        }

        .btn-batal {
            background: #fff;
            border: 1px solid var(--border-strong);
            color: var(--ink-500)
        }

        .btn-simpan {
            background: var(--red-500);
            border: 1px solid var(--red-500);
            color: #fff
        }

        .btn-simpan:hover {
            background: var(--red-600)
        }

        .btn-hapus-confirm {
            background: var(--red-500);
            color: #fff;
            border: 0;
            padding: 10px 17px;
            border-radius: 9px;
            font-weight: 700;
            cursor: pointer;
        }

        .modal-note {
            font-size: 13px;
            color: var(--ink-500);
            line-height: 1.6
        }

        @media(max-width:1024px) {
            .main {
                padding: 32px 25px
            }
        }

        @media(max-width:768px) {
            .sidebar {
                width: 100%;
                min-height: auto;
                position: static;
                padding: 18px 16px
            }

            .nav-label {
                display: none
            }

            .menu {
                flex-direction: row;
                flex-wrap: wrap;
                margin-top: 16px
            }

            .menu a {
                font-size: 12px;
                padding: 8px
            }

            .sidebar-foot {
                margin-top: 16px;
                padding-top: 16px
            }

            .logout-btn {
                width: auto
            }

            .main {
                margin-left: 0;
                padding: 24px 16px
            }

            .box {
                padding: 18px
            }

            .box-header {
                flex-direction: column
            }
        }

        @media(max-width:480px) {
            .menu {
                flex-direction: column
            }

            .menu a {
                width: 100%
            }

            .form-grid {
                grid-template-columns: 1fr
            }

            .form-group.full {
                grid-column: auto
            }

            .modal-content {
                padding: 19px
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
            <a href="/dashboard">Dashboard</a>
            <a href="/anggota">Data Anggota</a>
            <a href="/konten">Manajemen Konten</a>
            <a href="/aktivitas" class="active">Aktivitas Harian</a>
            <a href="/video">Arsip Video</a>
        </nav>

        <div class="sidebar-foot">
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="logout-btn">↪ Logout</button>
            </form>
        </div>
    </aside>

    <main class="main">

        <a href="/aktivitas" class="back">← Kembali ke daftar anggota</a>

        <header class="header">
            <div>
                <div class="eyebrow">Aktivitas Harian</div>
                <h1>Aktivitas <em>{{ $anggota->nama }}</em></h1>
                <p>{{ $anggota->jabatan }} · Catatan pekerjaan harian</p>
            </div>

            <button type="button" class="btn-tambah" onclick="bukaTambah()">
                + Tambah Pekerjaan
            </button>
        </header>

        <section class="box">
            <div class="box-header">
                <div>
                    <h2>Daftar Pekerjaan</h2>
                    <p>Aktivitas harian {{ $anggota->nama }}</p>
                </div>

                <form method="GET" action="/aktivitas/anggota/{{ $anggota->id }}" class="filter-form" id="formFilter">
                    <select name="bulan" id="filterBulan">
                        @foreach (range(1, 12) as $bulan)
                        <option value="{{ $bulan }}" {{ request('bulan', date('n')) == $bulan ? 'selected' : '' }}>
                            {{ \Carbon\Carbon::create()->month($bulan)->translatedFormat('F') }}
                        </option>
                        @endforeach
                    </select>

                    <input type="number" name="tahun" id="filterTahun"
                        value="{{ request('tahun', date('Y')) }}"
                        placeholder="Tahun" min="2000" max="2100">
                </form>
            </div>

            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Bulan</th>
                            <th>Week Timeline</th>
                            <th>Tanggal Timeline</th>
                            <th>Keterangan Pekerjaan</th>
                            <th>Kategori Target</th>
                            <th>Status</th>
                            <th>List Pekerjaan</th>
                            <th>Keterangan</th>
                            <th>Validasi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($aktivitas as $index => $item)
                        @php
                        $statusClass = match($item->status) {
                        'Create - 0%' => 'status-create',
                        'Start - 25%' => 'status-start',
                        'Halfway - 50%' => 'status-halfway',
                        'Finalizing - 75%' => 'status-finalizing',
                        'Finished - 100%' => 'status-finished',
                        'Overdue - 0%' => 'status-overdue',
                        default => 'status-create',
                        };
                        @endphp

                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('F') }}</td>
                            <td>{{ $item->week_timeline }}</td>
                            <td>{{ date('d/m/Y', strtotime($item->tanggal)) }}</td>
                            <td>{{ $item->keterangan_pekerjaan }}</td>
                            <td>{{ $item->kategori_target }}</td>
                            <td>
                                <span class="status-badge {{ $statusClass }}">
                                    {{ $item->status }}
                                </span>
                            </td>
                            <td>{{ $item->deskripsi }}</td>
                            <td>{{ $item->hasil ?? '-' }}</td>

                            <td style="text-align:center">
                                @if (auth()->user()->role === 'admin')
                                <form action="/aktivitas/anggota/{{ $anggota->id }}/validasi/{{ $item->id }}"
                                    method="POST" class="checkbox-wrapper">
                                    @csrf
                                    <input type="checkbox" class="checkbox-custom"
                                        {{ $item->validasi ? 'checked' : '' }}
                                        onchange="this.form.submit()">
                                </form>
                                @else
                                <span class="checkbox-wrapper">
                                    <input type="checkbox" class="checkbox-custom"
                                        {{ $item->validasi ? 'checked' : '' }} disabled>
                                </span>
                                @endif
                            </td>

                            <td>
                                <div class="action-group">
                                    <button type="button" class="btn-edit"
                                        onclick="bukaEdit(this)"
                                        data-id="{{ $item->id }}"
                                        data-week="{{ $item->week_timeline }}"
                                        data-tanggal="{{ $item->tanggal }}"
                                        data-keterangan="{{ $item->keterangan_pekerjaan }}"
                                        data-kategori="{{ $item->kategori_target }}"
                                        data-status="{{ $item->status }}"
                                        data-deskripsi="{{ $item->deskripsi }}"
                                        data-hasil="{{ $item->hasil }}">
                                        Edit
                                    </button>

                                    <button type="button" class="btn-hapus"
                                        onclick="bukaHapus('{{ $item->id }}')">
                                        Hapus
                                    </button>
                                </div>
                            </td>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="11" class="empty">Belum ada pekerjaan yang dicatat.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <!-- popup tambah -->
    <div class="modal" id="modalTambah">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Tambah Pekerjaan</h2>
                <button type="button" class="close-btn" onclick="tutupModal('modalTambah')">×</button>
            </div>

            <form action="/aktivitas/anggota/{{ $anggota->id }}/simpan" method="POST">
                @csrf
                <div class="form-grid">
                    <div class="form-group full">
                        <label>Nama Anggota</label>
                        <input type="text" value="{{ $anggota->nama }}" disabled>
                    </div>

                    <div class="form-group">
                        <label>Week Timeline</label>
                        <select name="week_timeline" required>
                            @foreach (['Week 1','Week 2','Week 3','Week 4','Week 5'] as $week)
                            <option value="{{ $week }}">{{ $week }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" name="tanggal" max="{{ date('Y-m-d') }}" required>
                    </div>

                    <div class="form-group">
                        <label>Keterangan Pekerjaan</label>
                        <select name="keterangan_pekerjaan" required>
                            <option value="New Project">New Project</option>
                            <option value="Existing">Existing</option>
                            <option value="Existing - Daily">Existing - Daily</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Kategori Target</label>
                        <select name="kategori_target" required>
                            <option value="Major">Major</option>
                            <option value="Minor">Minor</option>
                        </select>
                    </div>

                    <div class="form-group full">
                        <label>Status</label>
                        <select name="status" class="status-select" required>
                            <option value="Create - 0%">Create - 0%</option>
                            <option value="Start - 25%">Start - 25%</option>
                            <option value="Halfway - 50%">Halfway - 50%</option>
                            <option value="Finalizing - 75%">Finalizing - 75%</option>
                            <option value="Finished - 100%">Finished - 100%</option>
                            <option value="Overdue - 0%">Overdue - 0%</option>
                        </select>
                    </div>

                    <div class="form-group full">
                        <label>List Pekerjaan</label>
                        <textarea name="deskripsi" placeholder="Tuliskan pekerjaan..." required></textarea>
                    </div>

                    <div class="form-group full">
                        <label>Keterangan / Hasil</label>
                        <textarea name="hasil" placeholder="Tuliskan keterangan atau hasil pekerjaan..."></textarea>
                    </div>
                </div>

                <div class="modal-actions">
                    <button type="button" class="btn-batal" onclick="tutupModal('modalTambah')">Batal</button>
                    <button type="submit" class="btn-simpan">Simpan Pekerjaan</button>
                </div>
            </form>
        </div>
    </div>

    <!-- popup edit -->
    <div class="modal" id="modalEdit">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Edit Pekerjaan</h2>
                <button type="button" class="close-btn" onclick="tutupModal('modalEdit')">×</button>
            </div>

            <form id="formEdit" method="POST">
                @csrf
                <div class="form-grid">
                    <div class="form-group full">
                        <label>Nama Anggota</label>
                        <input type="text" value="{{ $anggota->nama }}" disabled>
                    </div>

                    <div class="form-group">
                        <label>Week Timeline</label>
                        <select name="week_timeline" id="editWeek" required>
                            @foreach (['Week 1','Week 2','Week 3','Week 4','Week 5'] as $week)
                            <option value="{{ $week }}">{{ $week }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" name="tanggal" id="editTanggal" max="{{ date('Y-m-d') }}" required>
                    </div>

                    <div class="form-group">
                        <label>Keterangan Pekerjaan</label>
                        <select name="keterangan_pekerjaan" id="editKeterangan" required>
                            <option value="New Project">New Project</option>
                            <option value="Existing">Existing</option>
                            <option value="Existing - Daily">Existing - Daily</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Kategori Target</label>
                        <select name="kategori_target" id="editKategori" required>
                            <option value="Major">Major</option>
                            <option value="Minor">Minor</option>
                        </select>
                    </div>

                    <div class="form-group full">
                        <label>Status</label>
                        <select name="status" id="editStatus" required>
                            <option value="Create - 0%">Create - 0%</option>
                            <option value="Start - 25%">Start - 25%</option>
                            <option value="Halfway - 50%">Halfway - 50%</option>
                            <option value="Finalizing - 75%">Finalizing - 75%</option>
                            <option value="Finished - 100%">Finished - 100%</option>
                            <option value="Overdue - 0%">Overdue - 0%</option>
                        </select>
                    </div>

                    <div class="form-group full">
                        <label>List Pekerjaan</label>
                        <textarea name="deskripsi" id="editDeskripsi" required></textarea>
                    </div>

                    <div class="form-group full">
                        <label>Keterangan / Hasil</label>
                        <textarea name="hasil" id="editHasil"></textarea>
                    </div>
                </div>

                <div class="modal-actions">
                    <button type="button" class="btn-batal" onclick="tutupModal('modalEdit')">Batal</button>
                    <button type="submit" class="btn-simpan">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>

    <!-- popup hapus -->
    <div class="modal" id="modalHapus">
        <div class="modal-content modal-small">
            <div class="modal-header">
                <h2>Hapus Pekerjaan?</h2>
                <button type="button" class="close-btn" onclick="tutupModal('modalHapus')">×</button>
            </div>

            <p class="modal-note">Apakah kamu yakin ingin menghapus pekerjaan ini? Data yang sudah dihapus tidak dapat dikembalikan.</p>

            <form id="formHapus" method="POST">
                @csrf
                <div class="modal-actions">
                    <button type="button" class="btn-batal" onclick="tutupModal('modalHapus')">Batal</button>
                    <button type="submit" class="btn-hapus-confirm">Ya, Hapus</button>
                </div>
            </form>
        </div>
    </div>

    <div id="statusValidasi"
        data-error="{{ $errors->any() ? '1' : '0' }}"
        hidden>
    </div>

    <script>
        function bukaTambah() {
            document.getElementById('modalTambah').classList.add('show');
        }

        function tutupModal(id) {
            document.getElementById(id).classList.remove('show');
        }

        function bukaEdit(button) {
            const id = button.dataset.id;

            document.getElementById('formEdit').action =
                `/aktivitas/anggota/{{ $anggota->id }}/edit/${id}`;

            document.getElementById('editWeek').value = button.dataset.week;
            document.getElementById('editTanggal').value = button.dataset.tanggal;
            document.getElementById('editKeterangan').value = button.dataset.keterangan;
            document.getElementById('editKategori').value = button.dataset.kategori;
            document.getElementById('editStatus').value = button.dataset.status;
            document.getElementById('editDeskripsi').value = button.dataset.deskripsi;
            document.getElementById('editHasil').value = button.dataset.hasil || '';

            document.getElementById('modalEdit').classList.add('show');
        }

        function bukaHapus(id) {
            document.getElementById('formHapus').action =
                `/aktivitas/anggota/{{ $anggota->id }}/hapus/${id}`;

            document.getElementById('modalHapus').classList.add('show');
        }

        document.getElementById('filterBulan').addEventListener('change', function() {
            document.getElementById('formFilter').submit();
        });

        let timerTahun;
        document.getElementById('filterTahun').addEventListener('input', function() {
            clearTimeout(timerTahun);

            timerTahun = setTimeout(function() {
                if (document.getElementById('filterTahun').value !== '') {
                    document.getElementById('formFilter').submit();
                }
            }, 700);
        });

        document.querySelectorAll('.modal').forEach(function(modal) {
            modal.addEventListener('click', function(event) {
                if (event.target === modal) {
                    modal.classList.remove('show');
                }
            });
        });

        document.querySelectorAll('.status-select, #editStatus').forEach(function(select) {
            function ubahWarna() {
                const warna = {
                    'Create - 0%': '#b81f1f',
                    'Start - 25%': '#c45b16',
                    'Halfway - 50%': '#9b7410',
                    'Finalizing - 75%': '#315eae',
                    'Finished - 100%': '#197342',
                    'Overdue - 0%': '#7042a3'
                };

                select.style.color = warna[select.value] || '#17171d';
                select.style.fontWeight = '700';
            }

            select.addEventListener('change', ubahWarna);
            ubahWarna();
        });

        const statusValidasi = document.getElementById('statusValidasi');

        if (statusValidasi && statusValidasi.dataset.error === '1') {
            document.getElementById('modalTambah').classList.add('show');
        }
    </script>
</body>

</html>