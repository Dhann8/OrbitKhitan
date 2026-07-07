<section id="hero" class="relative min-h-screen flex items-center overflow-hidden">

    {{-- Background image --}}
    <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?auto=format&fit=crop&q=85&w=1600"
         alt="dr. Cecep Care" class="absolute inset-0 w-full h-full object-cover z-0">

    {{-- Overlay --}}
    <div class="hero-ov absolute inset-0 z-10"></div>

    {{-- Decorative circle --}}
    <div class="absolute -top-20 right-[5%] w-96 h-96 rounded-full bg-brand-blue/10 z-10 pointer-events-none"></div>

    {{-- Content --}}
    <div class="max-w-6xl mx-auto px-6 relative z-20">
        <div class="max-w-2xl py-24">

            {{-- Badge --}}
            <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur border border-white/20 rounded-full px-5 py-2 mb-7">
                <i class="fas fa-certificate text-yellow-300 text-xs"></i>
                <span class="text-xs font-bold text-white/90">Pelayanan Medis Profesional &amp; Terpercaya</span>
            </div>

            {{-- Heading --}}
            <h1 class="font-poppins font-black text-white leading-tight mb-3" style="font-size:clamp(2.2rem,5vw,3.8rem)">
                dr. Cecep Chandra<br>Supriadi, AIFO-K
            </h1>

            {{-- Subheading --}}
            <p class="text-white/70 text-lg font-semibold mb-5">
                Khitan Modern &nbsp;·&nbsp; Homecare &nbsp;·&nbsp; Bedah Minor
            </p>

            {{-- Description --}}
            <p class="text-white/75 text-base leading-relaxed max-w-lg mb-8">
                Pelayanan medis profesional dengan tindakan aman, modern, dan datang langsung ke lokasi Anda. Kami hadir untuk kenyamanan terbaik keluarga Anda.
            </p>

            {{-- CTAs --}}
            <div class="flex flex-wrap gap-4 mb-12">
                <a href="https://wa.me/6281234567890"
                   class="inline-flex items-center gap-2.5 bg-wa hover:bg-wa-dark text-white font-poppins font-bold px-8 py-4 rounded-full shadow-lg shadow-wa/35 hover:-translate-y-1 transition-all">
                    <i class="fab fa-whatsapp text-xl"></i> Booking WhatsApp
                </a>
                <a href="#services"
                   class="inline-flex items-center gap-2.5 bg-white/10 backdrop-blur border-2 border-white/40 hover:border-white hover:bg-white/15 text-white font-poppins font-bold px-8 py-4 rounded-full transition-all">
                    <i class="fas fa-stethoscope"></i> Lihat Layanan
                </a>
            </div>

            {{-- Stats --}}
            <div class="flex flex-wrap gap-7 pt-7 border-t border-white">
                <div>
                    <p class="font-poppins font-black text-white text-2xl">5.000+</p>
                    <p class="text-white/60 text-xs font-semibold mt-1">Pasien Ditangani</p>
                </div>
                <div>
                    <p class="font-poppins font-black text-white text-2xl">10 Th</p>
                    <p class="text-white/60 text-xs font-semibold mt-1">Pengalaman</p>
                </div>
                <div>
                    <p class="font-poppins font-black text-white text-2xl">4.9 <i class="fas fa-star text-yellow-400 text-sm"></i></p>
                    <p class="text-white/60 text-xs font-semibold mt-1">Rating Pasien</p>
                </div>
                <div>
                    <p class="font-poppins font-black text-white text-2xl">24 Jam</p>
                    <p class="text-white/60 text-xs font-semibold mt-1">Siap Dihubungi</p>
                </div>
            </div>

        </div>
    </div>
</section>