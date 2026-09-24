<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Website Profil Mahasiswa') - Rizki Fahrizal Kurniawan</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background-color: #f1f5f9;
            color: #1e293b;
            line-height: 1.6;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Navbar Navigation */
        .navbar {
            background-color: #ffffff;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px -1px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 50;
        }

        .navbar-container {
            max-width: 900px;
            margin: 0 auto;
            padding: 0.9rem 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar-brand {
            font-size: 1.15rem;
            font-weight: 700;
            color: #2563eb;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .nav-links {
            display: flex;
            gap: 0.5rem;
            list-style: none;
        }

        .nav-link {
            text-decoration: none;
            padding: 0.5rem 1rem;
            font-size: 0.925rem;
            font-weight: 500;
            color: #64748b;
            border-radius: 6px;
            transition: all 0.2s ease-in-out;
        }

        .nav-link:hover {
            color: #2563eb;
            background-color: #eff6ff;
        }

        .nav-link.active {
            color: #ffffff;
            background-color: #2563eb;
            font-weight: 600;
        }

        /* Main Container */
        .main-container {
            max-width: 900px;
            width: 100%;
            margin: 2rem auto;
            padding: 0 1.5rem;
            flex: 1;
        }

        /* Card Styles */
        .card {
            background-color: #ffffff;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -2px rgba(0, 0, 0, 0.05);
            overflow: hidden;
        }

        .card-header {
            background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%);
            color: #ffffff;
            padding: 2rem;
            text-align: center;
        }

        .avatar-circle {
            width: 80px;
            height: 80px;
            background-color: #ffffff;
            color: #2563eb;
            font-size: 1.75rem;
            font-weight: 700;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem auto;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        }

        .card-header h1 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 0.35rem;
        }

        .card-header p {
            font-size: 0.95rem;
            opacity: 0.9;
        }

        .card-body {
            padding: 2rem;
        }

        /* Info List */
        .info-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1rem;
        }

        @media (min-width: 640px) {
            .info-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        .info-item {
            background-color: #f8fafc;
            border: 1px solid #e2e8f0;
            padding: 1.15rem;
            border-radius: 8px;
            transition: transform 0.15s ease, border-color 0.15s ease;
        }

        .info-item:hover {
            border-color: #cbd5e1;
            transform: translateY(-2px);
        }

        .info-label {
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: #64748b;
            font-weight: 600;
            margin-bottom: 0.35rem;
        }

        .info-value {
            font-size: 1.05rem;
            color: #0f172a;
            font-weight: 600;
            word-break: break-word;
        }

        .info-value a {
            color: #2563eb;
            text-decoration: none;
        }

        .info-value a:hover {
            text-decoration: underline;
        }

        /* Timeline / Education List */
        .timeline {
            position: relative;
            padding-left: 2rem;
        }

        .timeline::before {
            content: '';
            position: absolute;
            top: 10px;
            bottom: 10px;
            left: 7px;
            width: 2px;
            background-color: #e2e8f0;
        }

        .timeline-item {
            position: relative;
            margin-bottom: 1.75rem;
        }

        .timeline-item:last-child {
            margin-bottom: 0;
        }

        .timeline-marker {
            position: absolute;
            left: -2rem;
            top: 4px;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background-color: #2563eb;
            border: 3px solid #eff6ff;
            box-shadow: 0 0 0 2px #2563eb;
        }

        .timeline-content {
            background-color: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 1.25rem;
        }

        .timeline-badge {
            display: inline-block;
            font-size: 0.75rem;
            font-weight: 600;
            color: #2563eb;
            background-color: #dbeafe;
            padding: 0.2rem 0.6rem;
            border-radius: 9999px;
            margin-bottom: 0.5rem;
        }

        .timeline-title {
            font-size: 1.15rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 0.25rem;
        }

        .timeline-year {
            font-size: 0.9rem;
            color: #64748b;
            font-weight: 500;
        }

        /* Button Switcher */
        .action-container {
            margin-top: 2rem;
            padding-top: 1.5rem;
            border-top: 1px solid #e2e8f0;
            display: flex;
            justify-content: center;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            padding: 0.65rem 1.25rem;
            font-size: 0.925rem;
            font-weight: 600;
            border-radius: 6px;
            text-decoration: none;
            transition: all 0.2s ease;
            cursor: pointer;
        }

        .btn-primary {
            background-color: #2563eb;
            color: #ffffff;
        }

        .btn-primary:hover {
            background-color: #1d4ed8;
        }

        .btn-secondary {
            background-color: #f1f5f9;
            color: #334155;
            border: 1px solid #cbd5e1;
        }

        .btn-secondary:hover {
            background-color: #e2e8f0;
        }

        /* Footer */
        .footer {
            background-color: #ffffff;
            border-top: 1px solid #e2e8f0;
            padding: 1.25rem;
            text-align: center;
            font-size: 0.875rem;
            color: #64748b;
            margin-top: auto;
        }

        @media (max-width: 640px) {
            .navbar-container {
                flex-direction: column;
                gap: 0.75rem;
            }
            .card-header {
                padding: 1.5rem 1rem;
            }
            .card-body {
                padding: 1.25rem;
            }
        }
    </style>
</head>
<body>

    <!-- Header / Navigasi -->
    <nav class="navbar">
        <div class="navbar-container">
            <a href="{{ url('/') }}" class="navbar-brand">
                <span>🎓</span> Profil Mahasiswa
            </a>
            <ul class="nav-links">
                <li>
                    <a href="{{ url('/profil') }}" class="nav-link {{ request()->is('profil') || request()->is('/') ? 'active' : '' }}">
                        Profil
                    </a>
                </li>
                <li>
                    <a href="{{ url('/pendidikan') }}" class="nav-link {{ request()->is('pendidikan') ? 'active' : '' }}">
                        Pendidikan
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Konten Halaman -->
    <main class="main-container">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; {{ date('Y') }} Profil Mahasiswa - <strong>{{ $nama ?? 'Rizki Fahrizal Kurniawan' }}</strong> (NIM: {{ $nim ?? '2411500545' }})</p>
    </footer>

</body>
</html>
