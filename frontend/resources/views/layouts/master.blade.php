<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GarasiBMW - @yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
                theme: {
                    extend: {
                        fontFamily: { sans: ['Inter', 'sans-serif'] },
                        colors: {
                            'bmw-dark': '#213F5C',      // Header Sidebar (Request)
                            'bmw-light-bg': '#EFF7FA',  // Body Sidebar (Request)
                            'bmw-active-btn': '#D3D9DE', // Active Submenu (Request)
                            'bmw-content-bg': '#F8FAFC', 
                            'bmw-blue': '#1273EB',
                        }
                    }
                }
            }
    </script>
    <style>
        .sidebar-item svg { transition: transform 0.2s; }
        .sidebar-item[aria-expanded="true"] svg.arrow { transform: rotate(180deg); }
        body { font-size: 14px; }
    </style>
</head>
<body class="bg-primary-light font-sans text-[#102A43] antialiased">
    <div class="flex min-h-screen">
        @include('layouts.sidebar')

        <main class="flex-1 p-[24px] overflow-y-auto h-screen">
            @yield('content')

            <footer class="mt-[24px] text-[13px] text-[#627D98]">
                © 2026, Sistem Manajemen Bengkel GARASIBMW | 404SquadNotFound
            </footer>
        </main>
    </div>
</body>
</html>