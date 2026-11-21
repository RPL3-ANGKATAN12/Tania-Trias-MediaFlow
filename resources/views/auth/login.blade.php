<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk — Piposmart Tim Media</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Fraunces:ital,opsz,wght@0,9..144,400;0,9..144,500;0,9..144,600;1,9..144,400;1,9..144,500;1,9..144,600&display=swap" rel="stylesheet">

    <style>

        :root {
            --red-50:  #fff4f4;
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

            --bg:      #faf8f7;
            --surface: #ffffff;
            --border:  #ebe7e5;
            --border-strong: #ddd6d3;

            --radius-lg: 22px;
            --radius:    16px;
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

        html, body {
            height: 100%;
            overflow: hidden;  
        }

        body {
            font-family: var(--font-sans);
            background: var(--bg);
            color: var(--ink-900);
            line-height: 1.55;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px;
            -webkit-font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
            font-feature-settings: "ss01", "cv11";
            position: relative;
        }

        body::before {
            content: "";
            position: fixed;
            top: 0;
            right: 0;
            width: 380px;
            height: 380px;
            background:
                repeating-linear-gradient(
                    -45deg,
                    rgba(217, 45, 45, .06) 0px,
                    rgba(217, 45, 45, .06) 1px,
                    transparent 1px,
                    transparent 14px
                );
            pointer-events: none;
            z-index: 0;
            mask-image: radial-gradient(circle at top right, #000 0%, transparent 72%);
            -webkit-mask-image: radial-gradient(circle at top right, #000 0%, transparent 72%);
        }

        body::after {
            content: "";
            position: fixed;
            left: -160px;
            bottom: -160px;
            width: 460px;
            height: 460px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(217, 45, 45, .06) 0%, transparent 65%);
            pointer-events: none;
            z-index: 0;
        }
        .login-card {
            position: relative;
            z-index: 1;
            width: 100%;
            max-width: 420px;
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-lg);
            overflow: hidden;
            display: flex;
            flex-direction: column;
            max-height: calc(100vh - 48px);   /* tetap aman di layar pendek */
        }

        .login-card::before {
            content: "";
            display: block;
            height: 5px;
            background: linear-gradient(90deg, var(--red-500), var(--red-700));
            flex-shrink: 0;
        }

        .login-body {
            padding: 32px 32px 28px;
            display: flex;
            flex-direction: column;
        }
        
        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 26px;
        }

        .brand-logo {
            width: 46px;
            height: 46px;
            border-radius: 13px;
            background: #fff;
            border: 1px solid var(--border);
            display: grid;
            place-items: center;
            overflow: hidden;
            flex-shrink: 0;
            box-shadow: var(--shadow-sm);
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

        .brand-text .name {
            font-family: var(--font-serif);
            font-size: 19px;
            font-weight: 500;
            letter-spacing: -.4px;
            line-height: 1.1;
            color: var(--ink-900);
        }

        .brand-text .sub {
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 1.8px;
            text-transform: uppercase;
            color: var(--red-500);
            margin-top: 3px;
        }

        .login-title {
            font-family: var(--font-serif);
            font-size: 24px;
            font-weight: 500;
            letter-spacing: -.5px;
            line-height: 1.15;
            color: var(--ink-900);
            margin-bottom: 4px;
        }

        .login-title em {
            font-style: italic;
            color: var(--red-600);
        }

        .login-sub {
            font-size: 12.5px;
            color: var(--ink-500);
            margin-bottom: 22px;
        }

        .error {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            background: var(--red-50);
            border: 1px solid var(--red-200);
            color: var(--red-700);
            font-size: 12.5px;
            font-weight: 600;
            padding: 11px 14px;
            border-radius: var(--radius-sm);
            margin-bottom: 18px;
            line-height: 1.5;
        }

        .error svg {
            flex-shrink: 0;
            margin-top: 1px;
            color: var(--red-600);
        }

        .form-group {
            margin-bottom: 14px;
        }

        .form-group label {
            display: block;
            margin-bottom: 7px;
            color: var(--ink-700);
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .3px;
        }

        .input-wrap {
            position: relative;
        }

        .input-wrap .input-icon {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--ink-400);
            pointer-events: none;
            display: flex;
            transition: color .2s var(--ease);
        }

        .form-group input {
            width: 100%;
            padding: 12px 15px 12px 42px;
            border: 1px solid var(--border-strong);
            border-radius: var(--radius-sm);
            outline: none;
            font-family: var(--font-sans);
            font-size: 13px;
            color: var(--ink-900);
            background: #fff;
            transition: border-color .2s var(--ease), box-shadow .2s var(--ease);
        }

        .form-group input::placeholder {
            color: var(--ink-400);
        }

        .form-group input:focus {
            border-color: var(--red-400);
            box-shadow: 0 0 0 3px var(--red-100);
        }

        .input-wrap:focus-within .input-icon {
            color: var(--red-500);
        }

        .btn-submit {
            width: 100%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 9px;
            padding: 13px;
            border: none;
            border-radius: var(--radius-sm);
            background: var(--red-500);
            color: #fff;
            font-family: var(--font-sans);
            font-size: 13.5px;
            font-weight: 700;
            letter-spacing: .3px;
            cursor: pointer;
            box-shadow: var(--shadow-red);
            transition: background .2s var(--ease), transform .2s var(--ease), box-shadow .25s var(--ease);
            margin-top: 8px;
        }

        .btn-submit:hover {
            background: var(--red-600);
            transform: translateY(-1px);
            box-shadow: 0 14px 36px rgba(217, 45, 45, .35);
        }

        .btn-submit:active {
            transform: translateY(0);
        }

        .btn-submit svg {
            transition: transform .25s var(--ease);
        }

        .btn-submit:hover svg {
            transform: translateX(3px);
        }

        /* Footer */
        .login-footer {
            text-align: center;
            margin-top: 22px;
            padding-top: 18px;
            border-top: 1px solid var(--border);
            color: var(--ink-400);
            font-size: 11.5px;
            line-height: 1.6;
        }

        .login-footer strong {
            color: var(--ink-700);
            font-weight: 700;
        }

        @media (max-height: 720px) {
            .login-body { padding: 24px 26px 22px; }
            .brand { margin-bottom: 18px; }
            .login-title { font-size: 21px; }
            .login-sub { margin-bottom: 16px; }
            .form-group { margin-bottom: 12px; }
            .login-footer { margin-top: 16px; padding-top: 14px; }
        }

        @media (max-height: 600px) {
            .login-card { max-width: 460px; }
            .login-body { padding: 18px 22px 18px; }
            .brand { margin-bottom: 12px; }
            .brand-logo { width: 40px; height: 40px; border-radius: 11px; }
            .brand-text .name { font-size: 17px; }
            .login-title { font-size: 18px; margin-bottom: 2px; }
            .login-sub { font-size: 11.5px; margin-bottom: 12px; }
            .form-group { margin-bottom: 10px; }
            .form-group label { margin-bottom: 5px; font-size: 11px; }
            .form-group input { padding: 10px 14px 10px 38px; font-size: 12.5px; }
            .btn-submit { padding: 11px; margin-top: 4px; }
            .login-footer { display: none; }
        }

        @media (max-width: 480px) {
            body { padding: 16px; }
            .login-card { max-height: calc(100vh - 32px); }
            .login-body { padding: 26px 22px 24px; }
            .login-title { font-size: 21px; }
        }

        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after {
                animation: none !important;
                transition: none !important;
            }
        }
    </style>
</head>

<body>

    <div class="login-card">
        <div class="login-body">
            <div class="brand">
                <div class="brand-logo">
                    <img
                        src="https://placehold.co/88x88/ffffff/d92d2d?text=P&font=playfair-display"
                        alt="Logo Piposmart">
                </div>
                <div class="brand-text">
                    <div class="name">Piposmart</div>
                    <div class="sub">Tim Media</div>
                </div>
            </div>

            <h1 class="login-title">Masuk ke <em>Panel</em></h1>
            <p class="login-sub">Masukkan email dan password untuk melanjutkan.</p>

            @if ($errors->any())
                <div class="error">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"/>
                        <line x1="12" y1="8" x2="12" y2="12"/>
                        <line x1="12" y1="16" x2="12.01" y2="16"/>
                    </svg>
                    <span>{{ $errors->first() }}</span>
                </div>
            @endif

            <form action="/login" method="POST">
                @csrf

                <div class="form-group">
                    <label for="email">Email</label>
                    <div class="input-wrap">
                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="nama@piposmart.com"
                            value="{{ old('email') }}"
                            required
                            autocomplete="email"
                        >
                        <span class="input-icon">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="2" y="4" width="20" height="16" rx="2"/>
                                <path d="m22 7-10 6L2 7"/>
                            </svg>
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="input-wrap">
                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Masukkan password"
                            required
                            autocomplete="current-password"
                        >
                        <span class="input-icon">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="11" width="18" height="11" rx="2"/>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                            </svg>
                        </span>
                    </div>
                </div>

                <button type="submit" class="btn-submit">
                    Masuk
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="5" y1="12" x2="19" y2="12"/>
                        <polyline points="12 5 19 12 12 19"/>
                    </svg>
                </button>
            </form>

            <div class="login-footer">
                © 2026 <strong>Piposmart</strong> · Tim Media
            </div>
        </div>
    </div>
    
</body>
</html>