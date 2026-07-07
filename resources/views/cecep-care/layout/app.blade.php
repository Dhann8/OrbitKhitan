<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cecep Care — dr. Cecep Chandra Supriadi, AIFO-K | Khitan · Homecare · Bedah Minor</title>
    <meta name="description" content="Pelayanan medis profesional oleh dr. Cecep Chandra Supriadi, AIFO-K. Khitan Modern, Homecare, dan Bedah Minor. Datang ke lokasi Anda.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" crossorigin="anonymous">
    @vite('resources/css/app.css')
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        h1,h2,h3,h4,h5 { font-family: 'Poppins', sans-serif; }
        html { scroll-behavior: smooth; }
        ::-webkit-scrollbar { width:5px; }
        ::-webkit-scrollbar-track { background:#F5F7FA; }
        ::-webkit-scrollbar-thumb { background:#DDE4EE; border-radius:3px; }
        .hero-ov { background:linear-gradient(to right,rgba(15,39,71,.92) 0%,rgba(15,39,71,.65) 55%,rgba(15,39,71,.1) 100%); }
        .svc-img { overflow:hidden; }
        .svc-img img { transition:transform .5s; }
        .svc-card:hover .svc-img img { transform:scale(1.05); }
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
</script>
</body>
</html>