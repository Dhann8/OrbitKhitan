<section id="services" class="py-24 bg-soft">
    <div class="max-w-6xl mx-auto px-6">

        {{-- Header --}}
        <div class="text-center mb-14">
            <span class="inline-flex items-center gap-2 text-xs font-bold tracking-widest uppercase text-brand-blue bg-brand-light border border-brand-blue/20 px-5 py-2 rounded-full">
                <i class="fas fa-notes-medical"></i> Layanan Kami
            </span>
            <h2 class="font-poppins font-extrabold text-navy mt-3 mb-3" style="font-size:clamp(1.8rem,3.5vw,2.5rem)">
                Tiga Layanan <span class="text-brand-blue">Unggulan</span>
            </h2>
            <p class="text-slate-500 max-w-xl mx-auto">Layanan medis komprehensif ditangani langsung oleh dokter berpengalaman dan berlisensi.</p>
            <div class="w-12 h-1 bg-gradient-to-r from-navy to-brand-blue rounded-full mx-auto mt-5"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            {{-- Khitan --}}
            <div class="svc-card bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-sm
                        hover:-translate-y-2 hover:shadow-2xl hover:shadow-brand-blue/10 hover:border-brand-blue/30
                        transition-all duration-300 flex flex-col relative">
                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-brand-blue to-navy rounded-t-3xl"></div>
                <div class="svc-img h-52">
                    <img src="https://images.unsplash.com/photo-1631815588090-d4bfec5b1ccb?auto=format&fit=crop&q=80&w=700"
                         alt="Khitan Modern" class="w-full h-full object-cover">
                </div>
                <div class="p-8 flex flex-col flex-1">
                    <div class="w-14 h-14 rounded-[18px] bg-brand-light text-brand-blue flex items-center justify-center text-2xl mb-5">
                        <i class="fas fa-child-reaching"></i>
                    </div>
                    <h3 class="font-poppins font-extrabold text-navy text-xl mb-3">Khitan Modern</h3>
                    <ul class="space-y-2.5 mb-6 flex-1">
                        <li class="flex items-center gap-3 text-sm text-slate-600 font-semibold"><span class="w-2 h-2 rounded-full bg-brand-blue shrink-0"></span>Metode modern &amp; terkini</li>
                        <li class="flex items-center gap-3 text-sm text-slate-600 font-semibold"><span class="w-2 h-2 rounded-full bg-brand-blue shrink-0"></span>Tanpa jarum suntik (topikal)</li>
                        <li class="flex items-center gap-3 text-sm text-slate-600 font-semibold"><span class="w-2 h-2 rounded-full bg-brand-blue shrink-0"></span>Minim perdarahan</li>
                        <li class="flex items-center gap-3 text-sm text-slate-600 font-semibold"><span class="w-2 h-2 rounded-full bg-brand-blue shrink-0"></span>Pemulihan lebih cepat</li>
                        <li class="flex items-center gap-3 text-sm text-slate-600 font-semibold"><span class="w-2 h-2 rounded-full bg-brand-blue shrink-0"></span>Ramah anak &amp; nyaman</li>
                    </ul>
                    <a href="{{ route('orbit-khitan') }}" class="inline-flex items-center gap-2 text-sm font-bold text-brand-blue hover:gap-3 transition-all">
                        Pelajari Selengkapnya <i class="fas fa-arrow-right text-xs"></i>
                    </a>
                </div>
            </div>

            {{-- Homecare --}}
            <div class="svc-card bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-sm
                        hover:-translate-y-2 hover:shadow-2xl hover:shadow-wa/10 hover:border-wa/30
                        transition-all duration-300 flex flex-col relative">
                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-wa to-green-400 rounded-t-3xl"></div>
                <div class="svc-img h-52">
                    <img src="https://images.unsplash.com/photo-1559000357-f6b52ddfbe37?auto=format&fit=crop&q=80&w=700"
                         alt="Homecare" class="w-full h-full object-cover">
                </div>
                <div class="p-8 flex flex-col flex-1">
                    <div class="w-14 h-14 rounded-[18px] bg-green-50 text-wa flex items-center justify-center text-2xl mb-5">
                        <i class="fas fa-house-medical"></i>
                    </div>
                    <h3 class="font-poppins font-extrabold text-navy text-xl mb-3">Homecare</h3>
                    <ul class="space-y-2.5 mb-6 flex-1">
                        <li class="flex items-center gap-3 text-sm text-slate-600 font-semibold"><span class="w-2 h-2 rounded-full bg-wa shrink-0"></span>Infus &amp; cairan</li>
                        <li class="flex items-center gap-3 text-sm text-slate-600 font-semibold"><span class="w-2 h-2 rounded-full bg-wa shrink-0"></span>Injeksi / suntik</li>
                        <li class="flex items-center gap-3 text-sm text-slate-600 font-semibold"><span class="w-2 h-2 rounded-full bg-wa shrink-0"></span>Perawatan luka</li>
                        <li class="flex items-center gap-3 text-sm text-slate-600 font-semibold"><span class="w-2 h-2 rounded-full bg-wa shrink-0"></span>Kunjungan dokter</li>
                        <li class="flex items-center gap-3 text-sm text-slate-600 font-semibold"><span class="w-2 h-2 rounded-full bg-wa shrink-0"></span>Medical check up</li>
                    </ul>
                    <a href="https://wa.me/6281234567890" class="inline-flex items-center gap-2 text-sm font-bold text-wa-dark hover:gap-3 transition-all">
                        Booking Homecare <i class="fas fa-arrow-right text-xs"></i>
                    </a>
                </div>
            </div>

            {{-- Bedah Minor --}}
            <div class="svc-card bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-sm
                        hover:-translate-y-2 hover:shadow-2xl hover:shadow-navy/10 hover:border-navy/30
                        transition-all duration-300 flex flex-col relative">
                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-navy-mid to-navy rounded-t-3xl"></div>
                <div class="svc-img h-52">
                    <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?auto=format&fit=crop&q=80&w=700"
                         alt="Bedah Minor" class="w-full h-full object-cover">
                </div>
                <div class="p-8 flex flex-col flex-1">
                    <div class="w-14 h-14 rounded-[18px] bg-slate-100 text-navy-mid flex items-center justify-center text-2xl mb-5">
                        <i class="fas fa-kit-medical"></i>
                    </div>
                    <h3 class="font-poppins font-extrabold text-navy text-xl mb-3">Bedah Minor</h3>
                    <ul class="space-y-2.5 mb-6 flex-1">
                        <li class="flex items-center gap-3 text-sm text-slate-600 font-semibold"><span class="w-2 h-2 rounded-full bg-navy-mid shrink-0"></span>Jahit luka</li>
                        <li class="flex items-center gap-3 text-sm text-slate-600 font-semibold"><span class="w-2 h-2 rounded-full bg-navy-mid shrink-0"></span>Angkat kuku</li>
                        <li class="flex items-center gap-3 text-sm text-slate-600 font-semibold"><span class="w-2 h-2 rounded-full bg-navy-mid shrink-0"></span>Lipoma &amp; kista</li>
                        <li class="flex items-center gap-3 text-sm text-slate-600 font-semibold"><span class="w-2 h-2 rounded-full bg-navy-mid shrink-0"></span>Abses</li>
                        <li class="flex items-center gap-3 text-sm text-slate-600 font-semibold"><span class="w-2 h-2 rounded-full bg-navy-mid shrink-0"></span>Benda asing</li>
                    </ul>
                    <a href="https://wa.me/6281234567890" class="inline-flex items-center gap-2 text-sm font-bold text-navy-mid hover:gap-3 transition-all">
                        Konsultasi <i class="fas fa-arrow-right text-xs"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>