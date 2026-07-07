<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orbit Khitan — Khitan Modern Tanpa Jarum Suntik | Aman & Nyaman</title>
    <meta name="description" content="Orbit Khitan — Khitan modern tanpa jarum suntik. Aman, minim nyeri, cepat pulih. Ditangani dokter berpengalaman. Layanan homecare tersedia.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        navy: { DEFAULT: '#0F2747', mid: '#1a3a5c', dark: '#091d36' },
                        brand: { blue: '#2563EB', mid: '#1d4ed8', light: '#EEF4FF', pale: '#F0F6FF' },
                        wa: { DEFAULT: '#25D366', dark: '#1da851' },
                        soft: '#F5F7FA',
                    },
                    fontFamily: {
                        poppins: ['Poppins', 'sans-serif'],
                        jakarta: ['"Plus Jakarta Sans"', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        h1,h2,h3,h4,h5 { font-family: 'Poppins', sans-serif; }
        html { scroll-behavior: smooth; }
        ::-webkit-scrollbar { width:5px; }
        ::-webkit-scrollbar-track { background:#F5F7FA; }
        ::-webkit-scrollbar-thumb { background:#DDE4EE; border-radius:3px; }
        @keyframes gradShift { 0%{background-position:0% center} 100%{background-position:200% center} }
        .announce { background:linear-gradient(90deg,#0F2747,#1d4ed8,#0F2747); background-size:200% auto; animation:gradShift 6s linear infinite; }
        .hero-ov { background:linear-gradient(105deg,rgba(15,39,71,.93) 0%,rgba(15,39,71,.78) 45%,rgba(37,99,235,.2) 100%); }
        .img-zoom img { transition:transform .5s; }
        .img-zoom:hover img { transform:scale(1.06); }
        .gal-cap { opacity:0; transition:opacity .3s; background:linear-gradient(to top,rgba(15,39,71,.78) 0%,transparent 55%); }
        .gal-item:hover .gal-cap { opacity:1; }
        .faq-a { display:none; }
        .faq-a.open { display:block; }
        .faq-icon { transition:transform .3s; }
        .faq-item.open .faq-icon { transform:rotate(180deg); background:#0F2747!important; color:#fff!important; }
        #mobileNav { display:none; }
        #mobileNav.open { display:flex; }
        @keyframes pdot { 0%,100%{opacity:1;transform:scale(1)} 50%{opacity:.4;transform:scale(1.6)} }
        .pdot { animation:pdot 2s ease-in-out infinite; }
    </style>
</head>
<body class="bg-white overflow-x-hidden">
    @yield('content')
    <script>
    window.addEventListener('scroll',()=>document.getElementById('hdr').classList.toggle('shadow-md',scrollY>20));
    document.getElementById('mBtn').addEventListener('click',()=>document.getElementById('mobileNav').classList.toggle('open'));
    document.querySelectorAll('#mobileNav a').forEach(a=>a.addEventListener('click',()=>document.getElementById('mobileNav').classList.remove('open')));
    document.querySelectorAll('a[href^="#"]').forEach(a=>a.addEventListener('click',e=>{const t=document.querySelector(a.getAttribute('href'));if(t&&a.getAttribute('href')!=='#'){e.preventDefault();t.scrollIntoView({behavior:'smooth',block:'start'});}}));
    document.querySelectorAll('.faq-q').forEach(btn=>btn.addEventListener('click',()=>{const item=btn.closest('.faq-item'),ans=item.querySelector('.faq-a'),open=item.classList.contains('open');document.querySelectorAll('.faq-item').forEach(i=>{i.classList.remove('open');i.querySelector('.faq-a').classList.remove('open');});if(!open){item.classList.add('open');ans.classList.add('open');}}));
    const obs=new IntersectionObserver(entries=>entries.forEach(e=>{if(e.isIntersecting){e.target.style.opacity='1';e.target.style.transform='translateY(0)';}}),{threshold:.1});
    document.querySelectorAll('.img-zoom,.testi-card').forEach(el=>{el.style.opacity='0';el.style.transform='translateY(20px)';el.style.transition='opacity .5s ease,transform .5s ease';obs.observe(el);});
</script>
</body>
</html>