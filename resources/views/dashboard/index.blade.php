
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Piposmart — Dashboard Tim Media</title>

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
            --red-800: #701010;

            --ink-900: #17171d;
            --ink-700: #3a3a44;
            --ink-500: #6b6b76;
            --ink-400: #9a9aa4;
            --ink-300: #c9c9d0;

            --bg: #faf8f7;
            --surface: #ffffff;
            --border: #ebe7e5;
            --border-strong: #ddd6d3;

            --radius-lg: 22px;
            --radius: 16px;
            --radius-sm: 11px;

            --shadow-xs: 0 1px 2px rgba(23, 23, 29, .04);
            --shadow-sm: 0 2px 10px rgba(23, 23, 29, .05);
            --shadow-red: 0 10px 32px rgba(217, 45, 45, .28);
            --shadow-lg: 0 24px 60px rgba(148, 22, 22, .18);

            --ease: cubic-bezier(.22, 1, .36, 1);

            --font-sans: 'Plus Jakarta Sans', -apple-system, 'Segoe UI', system-ui, Arial, sans-serif;
            --font-serif: 'Fraunces', 'Playfair Display', Georgia, 'Times New Roman', serif;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: var(--font-sans);
            background: var(--bg);
            color: var(--ink-900);
            line-height: 1.55;
            min-height: 100vh;
            -webkit-font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
            font-feature-settings: "ss01", "cv11";
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
                rgba(217, 45, 45, .05) 0px,
                rgba(217, 45, 45, .05) 1px,
                transparent 1px,
                transparent 14px
            );
            pointer-events: none;
            z-index: 0;
            mask-image: radial-gradient(circle at top right, #000 0%, transparent 72%);
            -webkit-mask-image: radial-gradient(circle at top right, #000 0%, transparent 72%);
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
            margin-bottom: 4px;
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
            position: relative;
            transition: transform .3s var(--ease), box-shadow .3s var(--ease);
        }

        .brand-logo:hover {
            transform: translateY(-1px);
            box-shadow: var(--shadow-red);
        }

        .brand-logo img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            display: block;
            padding: 5px;
        }

        .brand-logo-fallback {
            display: none;
        }

        .brand-text .name {
            font-family: var(--font-serif);
            font-size: 18px;
            font-weight: 500;
            letter-spacing: -.4px;
            line-height: 1.1;
            color: var(--ink-900);
        }

        .brand-text .sub {
            font-family: var(--font-sans);
            font-size: 10.5px;
            font-weight: 700;
            letter-spacing: 1.8px;
            text-transform: uppercase;
            color: var(--red-500);
            margin-top: 3px;
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
            position: relative;
            transition: background .2s var(--ease), color .2s var(--ease);
        }

        .menu a svg {
            color: var(--ink-400);
            transition: color .2s var(--ease), transform .25s var(--ease);
            flex-shrink: 0;
        }

        .menu a:hover {
            background: var(--red-50);
            color: var(--red-700);
        }

        .menu a:hover svg {
            color: var(--red-500);
            transform: translateX(1px);
        }

        .menu a.active {
            background: var(--red-500);
            color: #fff;
            font-weight: 600;
            box-shadow: 0 6px 18px rgba(217, 45, 45, .3);
        }

        .menu a.active svg {
            color: #fff;
        }

        /* Logout */
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
            transition: all .2s var(--ease);
        }

        .logout-btn svg {
            flex-shrink: 0;
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

        /* Header */
        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            flex-wrap: wrap;
            margin-bottom: 30px;
        }

        .header .eyebrow {
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

        .header .eyebrow::before {
            content: "";
            width: 22px;
            height: 2px;
            background: var(--red-500);
            border-radius: 2px;
        }

        .header h1 {
            font-family: var(--font-serif);
            font-size: clamp(26px, 3vw, 34px);
            font-weight: 500;
            letter-spacing: -.6px;
            line-height: 1.14;
            color: var(--ink-900);
        }

        .header h1 em {
            font-style: italic;
            color: var(--red-600);
            font-weight: 500;
        }

        .header p {
            color: var(--ink-500);
            font-size: 13.5px;
            margin-top: 8px;
            max-width: 560px;
        }

        .welcome {
            background: linear-gradient(135deg, var(--red-600) 0%, var(--red-800) 100%);
            border-radius: var(--radius-lg);
            overflow: hidden;
            box-shadow: var(--shadow-lg);
            margin-bottom: 26px;
            display: grid;
            grid-template-columns: 1.1fr 1fr;
            min-height: 260px;
            position: relative;
            color: #fff;
        }

        .welcome::before {
            content: "";
            position: absolute;
            left: -100px;
            bottom: -100px;
            width: 280px;
            height: 280px;
            border-radius: 50%;
            border: 1.5px solid rgba(255, 255, 255, .14);
            pointer-events: none;
        }

        .welcome::after {
            content: "";
            position: absolute;
            left: -50px;
            bottom: -150px;
            width: 380px;
            height: 380px;
            border-radius: 50%;
            border: 1.5px solid rgba(255, 255, 255, .08);
            pointer-events: none;
        }

        .welcome-body {
            padding: 38px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
            z-index: 2;
        }

        .welcome .hello {
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 2.4px;
            text-transform: uppercase;
            color: var(--red-200);
            margin-bottom: 14px;
            display: inline-flex;
            align-items: center;
            gap: 9px;
        }

        .welcome .hello::before {
            content: "";
            width: 22px;
            height: 2px;
            background: var(--red-300);
            border-radius: 2px;
        }

        .welcome h2 {
            font-family: var(--font-serif);
            font-size: clamp(22px, 2.5vw, 30px);
            font-weight: 400;
            letter-spacing: -.3px;
            line-height: 1.28;
            color: #fff;
            margin-bottom: 14px;
        }

        .welcome h2 .greeting {
            font-style: italic;
            font-weight: 400;
            color: rgba(255, 255, 255, .92);
        }

        .welcome h2 .name {
            display: inline-block;
            font-family: var(--font-serif);
            font-style: italic;
            font-weight: 600;
            font-size: 1.06em;
            letter-spacing: -.3px;
            color: var(--red-700);
            background: #fff;
            padding: 2px 16px 4px;
            border-radius: 10px;
            box-shadow:
                0 3px 14px rgba(0, 0, 0, .16),
                inset 0 -2px 0 rgba(217, 45, 45, .12);
            transform: translateY(-1px);
            margin: 0 2px;
            line-height: 1.3;
        }

        .welcome .team {
            font-size: 13.5px;
            color: rgba(255, 255, 255, .82);
            line-height: 1.72;
            max-width: 420px;
        }

        .welcome .team strong {
            color: #fff;
            font-weight: 700;
        }

        .welcome-media {
            position: relative;
            overflow: hidden;
            min-height: 260px;
        }

        .welcome-media img {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 1.2s var(--ease);
            filter: saturate(.95) contrast(1.02);
        }

        .welcome:hover .welcome-media img {
            transform: scale(1.05);
        }

        .welcome-media::before {
            content: "";
            position: absolute;
            inset: 0;
            background:
                linear-gradient(90deg, var(--red-700) 0%, rgba(148, 22, 22, 0) 42%),
                linear-gradient(0deg, rgba(112, 16, 16, .3) 0%, transparent 55%);
            z-index: 1;
            pointer-events: none;
        }

        .welcome-media .caption {
            position: absolute;
            left: 22px;
            bottom: 20px;
            z-index: 2;
            display: inline-flex;
            align-items: center;
            gap: 9px;
            background: rgba(255, 255, 255, .94);
            backdrop-filter: blur(10px);
            padding: 8px 16px;
            border-radius: 999px;
            font-size: 12px;
            font-weight: 700;
            color: var(--red-700);
            box-shadow: 0 6px 20px rgba(0, 0, 0, .2);
        }

        .welcome-media .caption .dot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: var(--red-500);
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 18px;
        }

        .card {
            display: block;
            text-decoration: none;
            color: inherit;
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 22px;
            position: relative;
            overflow: hidden;
            box-shadow: var(--shadow-xs);
            transition: transform .3s var(--ease), box-shadow .3s var(--ease), border-color .3s var(--ease);
        }

        .card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 3px;
            height: 100%;
            background: linear-gradient(180deg, var(--red-500), var(--red-700));
            transform: scaleY(.35);
            transform-origin: top;
            transition: transform .35s var(--ease);
        }

        .card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-lg);
            border-color: var(--red-200);
        }

        .card:hover::before {
            transform: scaleY(1);
        }

        .card:focus-visible {
            outline: 2px solid var(--red-500);
            outline-offset: 3px;
        }

        .card .icon {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            display: grid;
            place-items: center;
            background: var(--red-50);
            color: var(--red-600);
            border: 1px solid var(--red-100);
            margin-bottom: 18px;
            transition: background .3s var(--ease), color .3s var(--ease), transform .35s var(--ease);
        }

        .card:hover .icon {
            background: var(--red-500);
            color: #fff;
            border-color: var(--red-500);
            transform: rotate(-5deg) scale(1.05);
            box-shadow: 0 6px 16px rgba(217, 45, 45, .3);
        }

        .card h3 {
            font-size: 14px;
            font-weight: 700;
            color: var(--ink-900);
            letter-spacing: -.15px;
            margin-bottom: 5px;
        }

        .card .desc {
            font-size: 12px;
            color: var(--ink-400);
            line-height: 1.55;
            margin-bottom: 18px;
        }

        .card .go {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-size: 11.5px;
            font-weight: 700;
            color: var(--red-600);
            letter-spacing: .3px;
        }

        .card .go svg {
            transition: transform .3s var(--ease);
        }

        .card:hover .go svg {
            transform: translateX(4px);
        }

        @media (max-width: 1180px) {
            .cards {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 1024px) {
            .main {
                padding: 32px 30px 48px;
            }
        }

        @media (max-width: 900px) {
            .welcome {
                grid-template-columns: 1fr;
            }

            .welcome-media {
                min-height: 220px;
            }

            .welcome-media::before {
                background: linear-gradient(180deg, rgba(184, 31, 31, .85) 0%, transparent 45%);
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
                font-size: 12.5px;
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

            .welcome-body {
                padding: 28px 24px;
            }

            .cards {
                grid-template-columns: 1fr;
                gap: 14px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            *,
            *::before,
            *::after {
                animation: none !important;
                transition: none !important;
            }
        }
    </style>
</head>


<body>

    <aside class="sidebar">
        <div class="brand">

            <div class="brand-logo">
                <img src="{{ asset('image/logo-piposmart.png') }}" alt="Logo Piposmart">
                <span class="brand-logo-fallback" aria-hidden="true">P</span>
            </div>

            <div class="brand-text">
                <div class="name">Piposmart</div>
                <div class="sub">Tim Media</div>
            </div>

        </div>

        <!-- Navigation Menu -->
        <div class="nav-label">Menu Utama</div>

        <nav class="menu">
            <a href="/dashboard"
                class="{{ request()->is('dashboard') ? 'active' : '' }}">

                <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="3" y="3" width="7" height="9" rx="1.5" />
                    <rect x="14" y="3" width="7" height="5" rx="1.5" />
                    <rect x="14" y="12" width="7" height="9" rx="1.5" />
                    <rect x="3" y="16" width="7" height="5" rx="1.5" />
                </svg>

                Dashboard
            </a>

            <!-- Data Anggota -->
            <a href="/anggota"
                class="{{ request()->is('anggota*') ? 'active' : '' }}">

                <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                    <circle cx="9" cy="7" r="4" />
                    <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                    <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                </svg>

                Data Anggota
            </a>

            <!-- Manajemen Konten -->
            <a href="/konten"
                class="{{ request()->is('konten*') ? 'active' : '' }}">

                <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="3" y="3" width="18" height="18" rx="2" />
                    <path d="M8 7h8" />
                    <path d="M8 12h8" />
                    <path d="M8 17h5" />
                </svg>

                Manajemen Konten
            </a>


            <!-- Aktivitas Harian -->
            <a href="/aktivitas"
                class="{{ request()->is('aktivitas*') ? 'active' : '' }}">

                <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M22 12h-4l-3 9L9 3l-3 9H2" />
                </svg>

                Aktivitas Harian
            </a>

            <!-- Arsip Video -->
            <a href="/video"
                class="{{ request()->is('video*') ? 'active' : '' }}">

                <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polygon points="23 7 16 12 23 17 23 7" />
                    <rect x="1" y="5" width="15" height="14" rx="2" />
                </svg>

                Arsip Video
            </a>
        </nav>

        <!-- Logout -->
        <div class="sidebar-foot">

            <form action="/logout" method="POST">
                @csrf

                <button type="submit" class="logout-btn">

                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                        <polyline points="16 17 21 12 16 7" />
                        <line x1="21" y1="12" x2="9" y2="12" />
                    </svg>
                    Logout
                </button>
            </form>
        </div>
    </aside>

    <main class="main">

        <!-- Header -->
        <header class="header">

            <div>
                <div class="eyebrow">Dashboard</div>

                <h1>
                    Selamat datang di <em>Piposmart</em>
                </h1>

                <p>
                    Mendukung alur kerja Tim Media Piposmart dalam menciptakan & mengembangkan konten digital.
                </p>
            </div>

        </header>

        <section class="welcome">
            <div class="welcome-body">

                <div class="hello">Halo,</div>

                <h2>
                    <span class="greeting">Selamat datang,</span>
                    <span class="name">{{ auth()->user()->name }}</span>
                </h2>

                <p class="team">
                    Pusat pengelolaan aktivitas Tim Media Piposmart.
                    Mendukung proses perencanaan, produksi, hingga publikasi
                    konten secara lebih terorganisir.
                </p>
            </div>

            <!-- Welcome Image -->
            <div class="welcome-media">

                <img
                    src="{{ asset('image/foto-tim-media.png') }}"
                    alt="Foto Tim Media Piposmart"
                    loading="lazy">

                <span class="caption">
                    <span class="dot"></span>
                    Tim Media Piposmart
                </span>

            </div>

        </section>

        <section class="cards">

            <!-- Data Anggota -->
            <a href="/anggota" class="card" aria-label="Buka Data Anggota">

                <div class="icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                        <circle cx="9" cy="7" r="4" />
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                    </svg>
                </div>

                <h3>Data Anggota</h3>

                <p class="desc">
                    Kelola profil, peran, dan struktur tim.
                </p>

                <span class="go">
                    Buka halaman

                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="5" y1="12" x2="19" y2="12" />
                        <polyline points="12 5 19 12 12 19" />
                    </svg>
                </span>

            </a>

            <!-- Manajemen Konten -->
            <a href="/konten" class="card" aria-label="Buka Manajemen Konten">

                <div class="icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="3" width="18" height="18" rx="2" />
                        <path d="M8 7h8" />
                        <path d="M8 12h8" />
                        <path d="M8 17h5" />
                    </svg>
                </div>

                <h3>Manajemen Konten</h3>

                <p class="desc">
                    Kelola artikel, publikasi, dan jadwal posting.
                </p>

                <span class="go">
                    Buka halaman

                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="5" y1="12" x2="19" y2="12" />
                        <polyline points="12 5 19 12 12 19" />
                    </svg>
                </span>

            </a>

            <!-- Aktivitas Harian -->
            <a href="/aktivitas" class="card" aria-label="Buka Aktivitas Harian">

                <div class="icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 12h-4l-3 9L9 3l-3 9H2" />
                    </svg>
                </div>

                <h3>Aktivitas Harian</h3>

                <p class="desc">
                    Pantau produktivitas dan laporan harian tim.
                </p>

                <span class="go">
                    Buka halaman

                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="5" y1="12" x2="19" y2="12" />
                        <polyline points="12 5 19 12 12 19" />
                    </svg>
                </span>

            </a>

            <!-- Arsip Video -->
            <a href="/video" class="card" aria-label="Buka Arsip Video">

                <div class="icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polygon points="23 7 16 12 23 17 23 7" />
                        <rect x="1" y="5" width="15" height="14" rx="2" />
                    </svg>
                </div>

                <h3>Arsip Video</h3>

                <p class="desc">
                    Simpan dan kelola dokumentasi video tim.
                </p>

                <span class="go">
                    Buka halaman

                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="5" y1="12" x2="19" y2="12" />
                        <polyline points="12 5 19 12 12 19" />
                    </svg>
                </span>
            </a>
</section>
</main>
</body>
</html>