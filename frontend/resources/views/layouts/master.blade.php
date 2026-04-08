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
                        'bmw-dark': '#213F5C',
                        'bmw-light-bg': '#EFF7FA',
                        'bmw-active-btn': '#D3D9DE',
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
            
            <header class="bg-white rounded-[12px] border border-[#D9E2EC] p-[16px] flex items-center justify-between shadow-sm mb-[20px]">
                <h2 class="text-[20px] font-bold text-bmw-dark">@yield('title_header', 'Dashboard')</h2>
                
                <div class="flex items-center gap-[12px]">
                    <div class="flex items-center gap-[10px] bg-[#F7F9FC] border border-[#D9E2EC] px-[12px] py-[6px] rounded-[8px]">
                        <div class="w-[36px] h-[36px] rounded-full bg-[#213F5C] flex items-center justify-center text-white font-bold text-[14px]">E</div>
                        <div class="leading-none">
                            <p class="text-[13px] font-bold text-[#213F5C]">Edsel Septa Haryanto</p>
                            <p class="text-[11px] font-bold text-[#1273EB] mt-[2px] bg-[#E3EAFA] px-[8px] py-[2px] rounded-full inline-block uppercase tracking-wider">Developer</p>
                        </div>
                    </div>
                    <button class="flex items-center gap-[8px] bg-[#FFF5F5] border border-[#FFDADA] text-[#CF3C3C] font-bold px-[20px] py-[10px] rounded-[8px] text-[13px] hover:bg-[#FFE8E8] transition-all">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                        Keluar
                    </button>
                </div>
            </header>

            @yield('content')

            <footer class="mt-[24px] text-[13px] text-[#627D98]">
                © 2026, Sistem Manajemen Bengkel GARASIBMW | 404SquadNotFound
            </footer>
        </main>
    </div>
</body>
</html>