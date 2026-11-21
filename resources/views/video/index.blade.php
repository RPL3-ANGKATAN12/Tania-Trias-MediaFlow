<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arsip Video — Piposmart</title>

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
            --radius-lg: 22px;
            --radius: 16px;
            --radius-sm: 11px;
            --shadow-sm: 0 2px 10px rgba(23, 23, 29, .05);
            --shadow-red: 0 10px 32px rgba(217, 45, 45, .25);
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
            background: repeating-linear-gradient(-45deg, rgba(217, 45, 45, .05) 0 1px, transparent 1px 14px);
            pointer-events: none;
            z-index: 0;
            mask-image: radial-gradient(circle at top right, #000 0%, transparent 72%);
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
            box-shadow: 0 6px 18px rgba(217, 45, 45, .3);
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
        }

        .logout-btn:hover {
            background: var(--red-50);
            border-color: var(--red-400);
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
        }

        .header h1 {
            font-family: var(--font-serif);
            font-size: clamp(26px, 3vw, 34px);
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

        .btn-tambah {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: var(--red-500);
            color: #fff;
            border: 0;
            padding: 11px 20px;
            border-radius: var(--radius-sm);
            font-size: 13px;
            font-weight: 700;
            cursor: pointer;
            box-shadow: var(--shadow-red);
            font-family: var(--font-sans);
            transition: .25s;
        }

        .btn-tambah:hover {
            background: var(--red-600);
            transform: translateY(-2px);
        }

        .video-box {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: var(--radius-lg);
            padding: 26px;
            box-shadow: var(--shadow-sm);
        }

        .search {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            gap: 10px;
            margin-bottom: 24px;
        }

        .search input {
            width: 100%;
            min-width: 0;
            padding: 11px 14px;
            border: 1px solid var(--border-strong);
            border-radius: var(--radius-sm);
            outline: none;
            font-family: var(--font-sans);
            font-size: 13px;
        }

        .search input:focus,
        .form-control:focus {
            border-color: var(--red-400);
            box-shadow: 0 0 0 3px var(--red-100);
        }

        .success {
            color: var(--red-700);
            background: var(--red-50);
            border: 1px solid var(--red-200);
            padding: 12px 16px;
            border-radius: var(--radius-sm);
            margin-bottom: 20px;
            font-size: 13.5px;
            font-weight: 600;
        }

        /* kartu video */
        .video-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(270px, 1fr));
            gap: 20px;
        }

        .video-card {
            background: #fff;
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 14px;
            overflow: hidden;
            position: relative;
            box-shadow: 0 1px 2px rgba(23, 23, 29, .04);
            transition: .3s;
        }

        .video-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 24px 60px rgba(148, 22, 22, .15);
            border-color: var(--red-200);
        }

        .video-thumbnail {
            position: relative;
            cursor: pointer;
            border-radius: var(--radius-sm);
            overflow: hidden;
            background: #111;
            aspect-ratio: 16/10;
        }

        .video-thumbnail video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            background: #111;
        }

        .play-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 56px;
            height: 56px;
            background: rgba(255, 255, 255, .95);
            color: var(--red-600);
            border-radius: 50%;
            display: grid;
            place-items: center;
            font-size: 20px;
            padding-left: 4px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, .25);
            pointer-events: none;
        }

        .video-card h3 {
            font-family: var(--font-serif);
            font-size: 17px;
            font-weight: 600;
            color: var(--ink-900);
            margin: 14px 0 10px;
            line-height: 1.3;
            overflow-wrap: anywhere;
        }

        .video-card>small {
            color: var(--ink-400);
            font-size: 11px;
            display: block;
            line-height: 1.5;
            overflow-wrap: anywhere;
            margin-top: 4px;
        }

        .caption-box {
            background: var(--red-50);
            border: 1px solid var(--red-100);
            border-radius: var(--radius-sm);
            padding: 12px;
            margin: 12px 0;
            position: relative;
            padding-bottom: 58px;
        }

        .caption-title {
            font-size: 10.5px;
            font-weight: 700;
            letter-spacing: 1.4px;
            text-transform: uppercase;
            color: var(--red-600);
            margin-bottom: 8px;
        }

        .caption-text {
            font-size: 12.5px;
            color: var(--ink-700);
            line-height: 1.6;
            white-space: pre-line;
            overflow-wrap: anywhere;
            margin-bottom: 0;
            padding-right: 5px;
        }

        /* ikon salin */
        .copy-icon {
            width: 42px;
            height: 42px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            right: 12px;
            bottom: 10px;
            background: #fff;
            color: var(--red-600);
            border: 1px solid var(--red-200);
            border-radius: 10px;
            cursor: pointer;
            transition: .2s;
        }

        .copy-icon:hover {
            background: var(--red-500);
            color: #fff;
        }

        .copy-icon svg {
            width: 19px;
            height: 19px;
        }

        .copy-icon::after {
            content: "Salin Caption";
            position: absolute;
            bottom: calc(100% + 9px);
            left: 50%;
            transform: translateX(-50%);
            background: var(--ink-900);
            color: #fff;
            padding: 6px 10px;
            border-radius: 6px;
            font-size: 10px;
            white-space: nowrap;
            opacity: 0;
            visibility: hidden;
            transition: .2s;
            pointer-events: none;
            z-index: 10;
        }

        .copy-icon:hover::after {
            opacity: 1;
            visibility: visible;
        }

        .download-icon {
            position: absolute;
            top: 10px;
            right: 10px;
            z-index: 3;
            width: 36px;
            height: 36px;
            display: grid;
            place-items: center;
            border-radius: 9px;
            background: rgba(255, 255, 255, .95);
            color: var(--red-600);
            text-decoration: none;
            box-shadow: 0 3px 12px rgba(0, 0, 0, .2);
            transition: .2s;
        }

        .download-icon:hover {
            background: var(--red-500);
            color: #fff;
            transform: translateY(-2px);
        }

        .download-icon svg {
            width: 19px;
            height: 19px;
        }

        .video-actions {
            display: flex;
            gap: 8px;
            margin-top: 15px;
        }

        .btn-edit,
        .btn-hapus {
            flex: 1;
            text-align: center;
            padding: 9px 10px;
            border-radius: 8px;
            font-size: 12px;
            font-weight: 700;
            cursor: pointer;
            font-family: var(--font-sans);
            border: 1px solid transparent;
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

        .video-actions form {
            flex: 1;
            display: flex;
        }

        .video-hapus {
            width: 100%;
        }

        .empty {
            padding: 60px 20px;
            text-align: center;
            color: var(--ink-400);
            grid-column: 1/-1;
            background: var(--red-50);
            border: 1px dashed var(--red-200);
            border-radius: var(--radius);
        }

        .empty h3 {
            font-family: var(--font-serif);
            font-size: 18px;
            color: var(--ink-700);
            margin-bottom: 6px;
        }

        .empty p {
            font-size: 13px;
            color: var(--ink-500);
        }

        .modal {
            display: none;
            position: fixed;
            inset: 0;
            z-index: 9999;
            background: rgba(23, 23, 29, .72);
            backdrop-filter: blur(5px);
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .modal.active {
            display: flex;
            animation: fadeIn .2s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        .modal-content {
            background: #fff;
            width: 100%;
            max-width: 600px;
            max-height: 90vh;
            overflow-y: auto;
            border-radius: 20px;
            padding: 28px;
            position: relative;
            box-shadow: 0 25px 70px rgba(0, 0, 0, .25);
            animation: modalIn .25s ease;
        }

        @keyframes modalIn {
            from {
                transform: translateY(15px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .modal-header {
            margin-bottom: 22px;
            padding-right: 35px;
        }

        .modal-header h2 {
            font-family: var(--font-serif);
            font-size: 24px;
            font-weight: 600;
            color: var(--ink-900);
        }

        .modal-header p {
            font-size: 12.5px;
            color: var(--ink-500);
            margin-top: 5px;
        }

        .btn-close {
            position: absolute;
            top: 17px;
            right: 18px;
            width: 35px;
            height: 35px;
            border: 1px solid var(--border);
            background: #fff;
            color: var(--ink-700);
            border-radius: 50%;
            font-size: 22px;
            cursor: pointer;
            z-index: 5;
        }

        .btn-close:hover {
            background: var(--red-500);
            color: #fff;
        }

        .form-group {
            margin-bottom: 17px;
        }

        .form-group label {
            display: block;
            font-size: 12.5px;
            font-weight: 700;
            color: var(--ink-700);
            margin-bottom: 7px;
        }

        .form-control {
            display: block;
            width: 100%;
            padding: 12px 13px;
            border: 1px solid var(--border-strong);
            border-radius: 9px;
            outline: none;
            font-family: var(--font-sans);
            font-size: 13px;
            color: var(--ink-900);
            background: #fff;
        }

        textarea.form-control {
            min-height: 110px;
            resize: vertical;
        }

        input[type=file].form-control {
            padding: 9px;
            background: #fff;
        }

        .form-hint {
            color: var(--ink-400);
            font-size: 11px;
            margin-top: 6px;
        }

        .error {
            color: #c62828;
            font-size: 11.5px;
            margin-top: 5px;
        }

        .form-actions {
            display: flex;
            gap: 10px;
            justify-content: flex-end;
            flex-wrap: wrap;
            margin-top: 24px;
        }

        .btn-save,
        .btn-cancel {
            padding: 11px 19px;
            border-radius: 9px;
            font-family: var(--font-sans);
            font-size: 12.5px;
            font-weight: 700;
            cursor: pointer;
            text-decoration: none;
            border: 0;
        }

        .btn-save {
            background: var(--red-500);
            color: #fff;
        }

        .btn-save:hover {
            background: var(--red-600);
        }

        .btn-cancel {
            background: #f1eeee;
            color: var(--ink-700);
        }

        .btn-cancel:hover {
            background: #e7e2e0;
        }

        .current-video {
            width: 100%;
            max-height: 230px;
            background: #111;
            border-radius: 10px;
            display: block;
            margin-bottom: 10px;
        }

        .file-info {
            color: var(--ink-400);
            font-size: 11px;
            overflow-wrap: anywhere;
        }

        .video-player-content {
            max-width: 1050px;
            padding: 28px;
        }

        .video-player-content .modal-header {
            margin-bottom: 18px;
        }

        .video-player-layout {
            display: grid;
            grid-template-columns: minmax(0, 1.55fr) minmax(260px, .85fr);
            gap: 22px;
            align-items: stretch;
        }

        .player-left {
            min-width: 0;
            background: #111;
            border-radius: 15px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 300px;
        }

        .modal-video {
            width: 100%;
            max-height: 65vh;
            display: block;
            background: #000;
            object-fit: contain;
        }

        .caption-right {
            min-width: 0;
            display: flex;
            flex-direction: column;
            background: #fffafa;
            border: 1px solid var(--red-100);
            border-radius: 15px;
            padding: 19px;
        }

        .caption-panel-heading {
            display: flex;
            align-items: center;
            gap: 9px;
            margin-bottom: 15px;
            color: var(--red-600);
        }

        .caption-panel-heading svg {
            width: 19px;
            height: 19px;
            flex-shrink: 0;
        }

        .caption-panel-heading h3 {
            font-size: 12px;
            font-weight: 800;
            letter-spacing: 1.2px;
            text-transform: uppercase;
        }

        .modal-caption-text {
            font-size: 13px;
            color: var(--ink-700);
            line-height: 1.8;
            white-space: pre-line;
            overflow-wrap: anywhere;
            flex: 1;
            min-height: 150px;
            max-height: 40vh;
            overflow-y: auto;
            padding: 14px;
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 10px;
        }

        .caption-actions {
            display: flex;
            gap: 9px;
            margin-top: 15px;
        }

        .caption-action-btn {
            flex: 1;
            min-height: 42px;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 8px;
            border-radius: 9px;
            font-family: var(--font-sans);
            font-size: 11.5px;
            font-weight: 700;
            text-decoration: none;
            cursor: pointer;
            transition: .2s;
        }

        .caption-action-btn svg {
            width: 17px;
            height: 17px;
            flex-shrink: 0;
        }

        .caption-copy-btn {
            background: #fff;
            color: var(--red-600);
            border: 1px solid var(--red-200);
        }

        .caption-copy-btn:hover {
            background: var(--red-500);
            color: #fff;
        }

        .caption-download-btn {
            background: var(--red-500);
            color: #fff;
            border: 1px solid var(--red-500);
        }

        .caption-download-btn:hover {
            background: var(--red-600);
        }

        .delete-message {
            color: var(--ink-500);
            font-size: 13px;
            line-height: 1.7;
        }

        .delete-message strong {
            color: var(--ink-900);
        }

        @media(max-width:1024px) {
            .main {
                padding: 32px 30px 48px;
            }
        }

        @media(max-width:900px) {
            .search {
                grid-template-columns: 1fr 1fr;
            }

            .search input:first-child {
                grid-column: 1/-1;
            }

            .video-player-layout {
                grid-template-columns: 1fr;
            }

            .player-left {
                min-height: 250px;
            }

            .modal-video {
                max-height: 48vh;
            }

            .modal-caption-text {
                min-height: 100px;
                max-height: 25vh;
            }
        }

        @media(max-width:768px) {
            .sidebar {
                width: 100%;
                min-height: auto;
                position: static;
                border-right: 0;
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

            .video-box {
                padding: 18px;
            }

            .video-list {
                grid-template-columns: 1fr;
            }

            .search {
                grid-template-columns: 1fr;
            }

            .search input:first-child {
                grid-column: auto;
            }

            .modal-content {
                padding: 22px 18px;
            }

            .video-player-content {
                padding: 22px 18px;
            }
        }

        @media(max-width:440px) {
            .menu {
                flex-direction: column;
            }

            .menu a {
                width: 100%;
            }

            .header h1 {
                font-size: 25px;
            }

            .form-actions>* {
                width: 100%;
                text-align: center;
            }

            .caption-actions {
                flex-direction: column;
            }

            .caption-action-btn {
                width: 100%;
            }

            .player-left {
                min-height: 190px;
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
                <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="3" y="3" width="7" height="9" rx="1.5" />
                    <rect x="14" y="3" width="7" height="5" rx="1.5" />
                    <rect x="14" y="12" width="7" height="9" rx="1.5" />
                    <rect x="3" y="16" width="7" height="5" rx="1.5" />
                </svg>
                Dashboard
            </a>

            <a href="/anggota" class="{{ request()->is('anggota*') ? 'active' : '' }}">
                <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                    <circle cx="9" cy="7" r="4" />
                    <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                    <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                </svg>
                Data Anggota
            </a>

            <a href="/konten" class="{{ request()->is('konten*') ? 'active' : '' }}">
                <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="3" y="3" width="18" height="18" rx="2" />
                    <path d="M8 7h8M8 12h8M8 17h5" />
                </svg>
                Manajemen Konten
            </a>

            <a href="/aktivitas" class="{{ request()->is('aktivitas*') ? 'active' : '' }}">
                <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M22 12h-4l-3 9L9 3l-3 9H2" />
                </svg>
                Aktivitas Harian
            </a>

            <a href="/video" class="{{ request()->is('video*') ? 'active' : '' }}">
                <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polygon points="23 7 16 12 23 17 23 7" />
                    <rect x="1" y="5" width="15" height="14" rx="2" />
                </svg>
                Arsip Video
            </a>
        </nav>

        <div class="sidebar-foot">
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="logout-btn">↪ Logout</button>
            </form>
        </div>
    </aside>

    <main class="main">
        <header class="header">
            <div>
                <div class="eyebrow">Arsip Video</div>
                <h1>Arsip Video <em>Marketing</em></h1>
                <p>Simpan dan kelola video marketing Piposmart dalam satu tempat.</p>
            </div>

            <button type="button" class="btn-tambah" onclick="bukaModal('modalTambah')">
                + Tambah Video
            </button>
        </header>

        <section class="video-box">

            <!-- search & filter -->
            <form action="/video" method="GET" class="search" id="formCari">

                <input
                    type="text"
                    name="cari"
                    placeholder="Cari judul video..."
                    value="{{ request('cari') }}"
                    autocomplete="off">

                <select name="bulan" class="form-control"
                    onchange="document.getElementById('formCari').submit()">

                    <option value="" disabled hidden
                        {{ request('bulan') ? '' : 'selected' }}>
                        Bulan
                    </option>

                    @foreach([
                    1 => 'Januari',
                    2 => 'Februari',
                    3 => 'Maret',
                    4 => 'April',
                    5 => 'Mei',
                    6 => 'Juni',
                    7 => 'Juli',
                    8 => 'Agustus',
                    9 => 'September',
                    10 => 'Oktober',
                    11 => 'November',
                    12 => 'Desember'
                    ] as $angka => $nama)
                    <option value="{{ $angka }}"
                        {{ request('bulan') == $angka ? 'selected' : '' }}>
                        {{ $nama }}
                    </option>
                    @endforeach

                </select>

                <input
                    type="number"
                    name="tahun"
                    placeholder="Contoh: 2026"
                    value="{{ request('tahun') }}"
                    min="2000"
                    max="2100"
                    autocomplete="off">
            </form>

            @if(session('success'))
            <div class="success">{{ session('success') }}</div>
            @endif

            @if($errors->any() && !old('form_type'))
            <div class="success" style="color:#b81f1f">
                Periksa kembali data yang kamu masukkan.
            </div>
            @endif

            <!-- daftar video -->
            <div class="video-list">
                @forelse($video as $item)
                <div class="video-card">

                    <div class="video-thumbnail"
                        onclick="bukaVideo(this.dataset.url, this.dataset.judul, this.dataset.caption, this.dataset.download, this.dataset.filename)"
                        data-url="{{ asset('storage/' . $item->path) }}"
                        data-judul="{{ $item->judul }}"
                        data-caption="{{ $item->caption }}"
                        data-download="{{ asset('storage/' . $item->path) }}"
                        data-filename="{{ $item->nama_file }}">

                        <video muted preload="metadata">
                            <source src="{{ asset('storage/' . $item->path) }}">
                        </video>

                        <div class="play-button">▶</div>

                        <a href="{{ asset('storage/' . $item->path) }}"
                            class="download-icon"
                            download="{{ $item->nama_file }}"
                            title="Download Video"
                            onclick="event.stopPropagation()">

                            <svg viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                                <path d="m7 10 5 5 5-5" />
                                <path d="M12 15V3" />
                            </svg>
                        </a>
                    </div>

                    <h3>{{ $item->judul }}</h3>

                    @if($item->caption)
                    <div class="caption-box">
                        <div class="caption-title">Caption Video</div>

                        <p class="caption-text" id="caption-{{ $item->id }}">{{ $item->caption }}</p>

                        <button type="button" class="copy-icon"
                            title="Salin Caption"
                            onclick="salinCaption('caption-{{ $item->id }}')">
                            <svg viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <rect x="8" y="8" width="13" height="13" rx="2" />
                                <path d="M16 8V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h3" />
                            </svg>
                        </button>
                    </div>
                    @endif

                    <small>
                        Diunggah:
                        {{ $item->created_at ? $item->created_at->translatedFormat('d F Y') : '-' }}
                    </small>

                    <small>{{ $item->nama_file }}</small>

                    <div class="video-actions">
                        <button type="button" class="btn-edit"
                            id="editBtn-{{ $item->id }}"
                            onclick="bukaModalEdit(this)"
                            data-id="{{ $item->id }}"
                            data-judul="{{ $item->judul }}"
                            data-caption="{{ $item->caption }}"
                            data-url="{{ asset('storage/' . $item->path) }}"
                            data-namafile="{{ $item->nama_file }}">
                            ✏️ Edit
                        </button>

                        <button type="button" class="btn-hapus"
                            onclick="bukaModalHapus(this)"
                            data-id="{{ $item->id }}"
                            data-judul="{{ $item->judul }}">
                            🗑 Hapus
                        </button>
                    </div>
                </div>
                @empty
                <div class="empty">
                    <h3>Belum ada video</h3>
                    <p>Video marketing yang diunggah akan muncul di sini.</p>
                </div>
                @endforelse
            </div>
        </section>
    </main>

    <!-- pop up tambah video -->
    <div class="modal" id="modalTambah" onclick="klikLuarModal(event, 'modalTambah')">
        <div class="modal-content">
            <button type="button" class="btn-close" onclick="tutupModal('modalTambah')">&times;</button>

            <div class="modal-header">
                <h2>Tambah Video</h2>
                <p>Masukkan informasi video marketing yang ingin disimpan.</p>
            </div>

            <form action="/video" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="form_type" value="tambah">

                <div class="form-group">
                    <label>Judul Video</label>
                    <input class="form-control" type="text" name="judul"
                        value="{{ old('form_type') === 'tambah' ? old('judul') : '' }}"
                        placeholder="Masukkan judul video" required>

                    @if(old('form_type') === 'tambah')
                    @error('judul')
                    <div class="error">{{ $message }}</div>
                    @enderror
                    @endif
                </div>

                <div class="form-group">
                    <label>Caption Video</label>
                    <textarea class="form-control" name="caption"
                        placeholder="Masukkan caption video">{{ old('form_type') === 'tambah' ? old('caption') : '' }}</textarea>

                    @if(old('form_type') === 'tambah')
                    @error('caption')
                    <div class="error">{{ $message }}</div>
                    @enderror
                    @endif
                </div>

                <div class="form-group">
                    <label>File Video</label>
                    <input class="form-control" type="file" name="video"
                        accept="video/mp4,video/quicktime,video/x-msvideo,video/x-matroska"
                        required>

                    <div class="form-hint">Format: MP4, MOV, AVI, MKV. Maksimal 100 MB.</div>

                    @if(old('form_type') === 'tambah')
                    @error('video')
                    <div class="error">{{ $message }}</div>
                    @enderror
                    @endif
                </div>

                <div class="form-actions">
                    <button type="button" class="btn-cancel" onclick="tutupModal('modalTambah')">Batal</button>
                    <button type="submit" class="btn-save">Simpan Video</button>
                </div>
            </form>
        </div>
    </div>

    <!-- popup edit video -->
    <div class="modal" id="modalEdit" onclick="klikLuarModal(event, 'modalEdit')">
        <div class="modal-content">
            <button type="button" class="btn-close" onclick="tutupModal('modalEdit')">&times;</button>

            <div class="modal-header">
                <h2>Edit Video</h2>
                <p>Ubah informasi video marketing yang sudah tersimpan.</p>
            </div>

            <form id="formEdit" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <input type="hidden" name="form_type" value="edit">
                <input type="hidden" name="video_id" id="editId">

                <div class="form-group">
                    <label>Judul Video</label>
                    <input class="form-control" type="text" name="judul" id="editJudul" required>
                </div>

                <div class="form-group">
                    <label>Caption Video</label>
                    <textarea class="form-control" name="caption" id="editCaption"
                        placeholder="Masukkan caption video..."></textarea>
                </div>

                <div class="form-group">
                    <label>Video Saat Ini</label>
                    <video class="current-video" id="editPreview" controls>
                        Browser tidak mendukung pemutar video.
                    </video>
                    <div class="file-info" id="editNamaFile"></div>
                </div>

                <div class="form-group">
                    <label>Ganti File Video (Opsional)</label>
                    <input class="form-control" type="file" name="video"
                        accept="video/mp4,video/quicktime,video/x-msvideo,video/x-matroska">
                    <div class="form-hint">Kosongkan jika tidak ingin mengganti video.</div>

                    @if(old('form_type') === 'edit')
                    @error('video')
                    <div class="error">{{ $message }}</div>
                    @enderror
                    @endif
                </div>

                <div class="form-actions">
                    <button type="button" class="btn-cancel" onclick="tutupModal('modalEdit')">Batal</button>
                    <button type="submit" class="btn-save">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>

    <!-- popup haps -->
    <div class="modal" id="modalHapus" onclick="klikLuarModal(event, 'modalHapus')">
        <div class="modal-content" style="max-width:430px">
            <button type="button" class="btn-close" onclick="tutupModal('modalHapus')">&times;</button>

            <div class="modal-header">
                <h2>Hapus Video?</h2>
                <p>Konfirmasi penghapusan arsip video.</p>
            </div>

            <p class="delete-message">
                Apakah kamu yakin ingin menghapus video
                <strong id="hapusJudul"></strong>?
                File video juga akan dihapus dari penyimpanan.
            </p>

            <form id="formHapus" method="POST">
                @csrf
                @method('DELETE')

                <div class="form-actions">
                    <button type="button" class="btn-cancel" onclick="tutupModal('modalHapus')">Batal</button>
                    <button type="submit" class="btn-save">Ya, Hapus</button>
                </div>
            </form>
        </div>
    </div>

    <!-- popup pemutar video -->
    <div class="modal" id="videoModal" onclick="klikLuarVideo(event)">
        <div class="modal-content video-player-content">

            <button type="button" class="btn-close" onclick="tutupVideo()">&times;</button>

            <div class="modal-header">
                <h2 id="judulModal">Video Marketing</h2>
                <p>Putar video dan salin caption langsung dari sini.</p>
            </div>

            <div class="video-player-layout">

                <div class="player-left">
                    <video id="modalVideo" class="modal-video" controls playsinline>
                        Browser tidak mendukung pemutar video.
                    </video>
                </div>

                <div class="caption-right">

                    <div class="caption-panel-heading">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M8 6h13M8 12h13M8 18h13" />
                            <path d="M3 6h.01M3 12h.01M3 18h.01" />
                        </svg>
                        <h3>Caption Video</h3>
                    </div>

                    <p class="modal-caption-text" id="captionModal">
                        Belum ada caption untuk video ini.
                    </p>

                    <div class="caption-actions">

                        <button type="button"
                            class="caption-action-btn caption-copy-btn"
                            onclick="salinCaption('captionModal')">

                            <svg viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <rect x="8" y="8" width="13" height="13" rx="2" />
                                <path d="M16 8V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h3" />
                            </svg>

                            Salin Caption
                        </button>

                        <a href="#" id="downloadModal"
                            class="caption-action-btn caption-download-btn"
                            download>

                            <svg viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                                <path d="m7 10 5 5 5-5" />
                                <path d="M12 15V3" />
                            </svg>

                            Download
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- daat validasi BLADE -->
    <div
        id="statusValidasi"
        hidden
        data-error="{{ $errors->any() ? '1' : '0' }}"
        data-type="{{ old('form_type') }}"
        data-video-id="{{ old('video_id') }}"
        data-judul="{{ old('judul') }}"
        data-caption="{{ old('caption') }}"></div>

    <script>
        // buka modal
        function bukaModal(id) {
            document.getElementById(id).classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        // menutup modal
        function tutupModal(id) {
            document.getElementById(id).classList.remove('active');
            document.body.style.overflow = '';
        }

        // menutup modak\l ketika area luar diklik 
        function klikLuarModal(event, id) {
            if (event.target.id === id) {
                tutupModal(id);
            }
        }

        // popup edit
        function bukaModalEdit(tombol) {
            const id = tombol.dataset.id;
            const form = document.getElementById('formEdit');
            const preview = document.getElementById('editPreview');

            form.action = '/video/' + id;

            document.getElementById('editId').value = id;
            document.getElementById('editJudul').value = tombol.dataset.judul || '';
            document.getElementById('editCaption').value = tombol.dataset.caption || '';

            document.getElementById('editNamaFile').textContent =
                'File: ' + (tombol.dataset.namafile || '');

            preview.src = tombol.dataset.url;
            preview.load();

            bukaModal('modalEdit');
        }

        // POPUP HAPUS
        function bukaModalHapus(tombol) {
            document.getElementById('formHapus').action =
                '/video/' + tombol.dataset.id;

            document.getElementById('hapusJudul').textContent =
                '"' + (tombol.dataset.judul || '') + '"';

            bukaModal('modalHapus');
        }

        // pemutar video
        function bukaVideo(url, judul, caption, downloadUrl, filename) {
            const modal = document.getElementById('videoModal');
            const video = document.getElementById('modalVideo');
            const download = document.getElementById('downloadModal');

            document.getElementById('judulModal').textContent =
                judul || 'Video Marketing';

            document.getElementById('captionModal').textContent =
                caption && caption.trim() !== '' ?
                caption :
                'Belum ada caption untuk video ini.';

            download.href = downloadUrl || url;
            download.download = filename || 'video-marketing';

            video.src = url;
            video.load();

            modal.classList.add('active');
            document.body.style.overflow = 'hidden';

            video.play().catch(function() {});
        }

        // tutup pemutar vidio
        function tutupVideo() {
            const video = document.getElementById('modalVideo');

            video.pause();
            video.removeAttribute('src');
            video.load();

            document.getElementById('videoModal').classList.remove('active');
            document.body.style.overflow = '';
        }

        // tutup video ketika area luar di klik 
        function klikLuarVideo(event) {
            if (event.target.id === 'videoModal') {
                tutupVideo();
            }
        }

        // salin caption
        function salinCaption(id) {
            const elemen = document.getElementById(id);

            if (!elemen) return;

            const caption = elemen.innerText.trim();

            if (!caption || caption === 'Belum ada caption untuk video ini.') {
                alert('Belum ada caption yang bisa disalin.');
                return;
            }

            if (navigator.clipboard && window.isSecureContext) {
                navigator.clipboard.writeText(caption)
                    .then(function() {
                        alert('Caption berhasil disalin!');
                    })
                    .catch(function() {
                        salinManual(caption);
                    });
            } else {
                salinManual(caption);
            }
        }

        // salin caption secara manual jika clipboard ga ada 
        function salinManual(teks) {
            const area = document.createElement('textarea');

            area.value = teks;
            area.style.position = 'fixed';
            area.style.opacity = '0';

            document.body.appendChild(area);
            area.select();

            try {
                document.execCommand('copy');
                alert('Caption berhasil disalin!');
            } catch (error) {
                alert('Caption gagal disalin. Silakan salin manual.');
            }

            area.remove();
        }

        // Ttp modal dengan ESCAPE
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                tutupVideo();

                document.querySelectorAll('.modal.active').forEach(function(modal) {
                    modal.classList.remove('active');
                });

                document.body.style.overflow = '';
            }
        });

        // auto search
        let waktuCari;

        document.querySelectorAll('#formCari input').forEach(function(input) {
            input.addEventListener('input', function() {
                clearTimeout(waktuCari);

                waktuCari = setTimeout(function() {
                    document.getElementById('formCari').submit();
                }, 600);
            });
        });

        // bUa kembali kalau popup gagal
        const statusValidasi = document.getElementById('statusValidasi');

        if (statusValidasi && statusValidasi.dataset.error === '1') {

            const tipeForm = statusValidasi.dataset.type;

            if (tipeForm === 'tambah') {
                bukaModal('modalTambah');
            } else if (tipeForm === 'edit') {
                const videoId = statusValidasi.dataset.videoId;

                const tombolEditGagal = document.getElementById(
                    'editBtn-' + videoId
                );

                if (tombolEditGagal) {
                    bukaModalEdit(tombolEditGagal);

                    document.getElementById('editJudul').value =
                        statusValidasi.dataset.judul || '';

                    document.getElementById('editCaption').value =
                        statusValidasi.dataset.caption || '';
                }
            }
        }
    </script>
</body>
</html>