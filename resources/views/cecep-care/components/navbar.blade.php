<header id="hdr" class="sticky top-0 z-50 bg-white/5 backdrop-blur-md border-b border-slate-200 transition-shadow duration-300">    <div class="max-w-6xl mx-auto px-6">
        <div class="flex items-center justify-between h-[68px]">

            {{-- Logo --}}
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-linear-to-br from-navy to-brand-blue flex items-center justify-center shadow-md shadow-brand-blue/25">
                    <i class="fas fa-user-doctor text-white text-sm"></i>
                </div>
                <div>
                    <p class="font-poppins font-extrabold text-navy text-lg leading-none">Cecep <span class="text-brand-blue">Care</span></p>
                    <p class="text-slate-400 text-xs font-semibold leading-none mt-0.5">dr. Cecep Chandra Supriadi, AIFO-K</p>
                </div>
            </div>

            {{-- Desktop nav --}}
            <nav class="hidden lg:flex items-center gap-7">
                <a href="#hero"    class="text-sm font-semibold text-slate-500 hover:text-navy transition-colors">Beranda</a>
                <a href="#services" class="text-sm font-semibold text-slate-500 hover:text-navy transition-colors">Layanan</a>
                <a href="#why"     class="text-sm font-semibold text-slate-500 hover:text-navy transition-colors">Keunggulan</a>
                <a href="#process" class="text-sm font-semibold text-slate-500 hover:text-navy transition-colors">Alur</a>
                <a href="#gallery" class="text-sm font-semibold text-slate-500 hover:text-navy transition-colors">Galeri</a>
                <a href="#faq"     class="text-sm font-semibold text-slate-500 hover:text-navy transition-colors">FAQ</a>
            </nav>

            {{-- Actions --}}
            <div class="flex items-center gap-2">
                <a href="https://wa.me/6281234567890"
                   class="hidden lg:inline-flex items-center gap-2 bg-wa hover:bg-wa-dark text-white font-poppins font-bold text-sm px-5 py-2.5 rounded-full shadow-md shadow-wa/30 hover:-translate-y-0.5 transition-all">
                    <i class="fab fa-whatsapp"></i> Booking WA
                </a>
                <button id="mBtn" class="lg:hidden w-10 h-10 flex items-center justify-center rounded-xl hover:bg-soft text-navy text-xl transition-colors">
                    <i class="fas fa-bars"></i>
                </button>
            </div>

        </div>
    </div>

    {{-- Mobile nav --}}
    <div id="mobileNav" class="flex-col bg-white border-t border-slate-200 px-6 py-4 gap-1">
        <a href="#hero"    class="block py-2.5 text-sm font-semibold text-slate-500 border-b border-slate-100">Beranda</a>
        <a href="#services" class="block py-2.5 text-sm font-semibold text-slate-500 border-b border-slate-100">Layanan</a>
        <a href="#why"     class="block py-2.5 text-sm font-semibold text-slate-500 border-b border-slate-100">Keunggulan</a>
        <a href="#process" class="block py-2.5 text-sm font-semibold text-slate-500 border-b border-slate-100">Alur</a>
        <a href="#gallery" class="block py-2.5 text-sm font-semibold text-slate-500 border-b border-slate-100">Galeri</a>
        <a href="#faq"     class="block py-2.5 text-sm font-semibold text-slate-500">FAQ</a>
    </div>
</header>