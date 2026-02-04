<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mon Site Laravel')</title>
<link rel="stylesheet" href="{{ asset('assets/font/fontawesome-free-7.1.0-web/css/all.css') }}">
<link rel="icon" href="{{ asset('assets/upload/dash_img/logo-1.png') }}" type="image/png">
<link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
<!-- Font Awesome 6 Free -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-bxCxD5Yl+6DhtQ3TF/DJwxVtWZ+vS7Dw+q6KQnZnPZkbkhZpVf+hzw2i9CqI6S8cP7VnI3g0S2zbyK9hSz6S/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-o1cRfiNIX+qY8XzTjMqCF6eH4K0G5J4EtEJqO/NFcvxF6p4g/0Bq4VdJLyKZ3J4Gp2z5yAxy1XIb2XY6Fl1mQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body class="font-sans">


@if (!Request::is('Dashboard'))
@endif
    @include('dashboard.inc.sidebar')




<!-- ✅ Loader global -->
<div id="loader-overlay"
     class="fixed inset-0 bg-white/80 backdrop-blur-sm flex items-center justify-center z-[9999] hidden">
    <div class="w-12 h-12 border-4 border-[rgb(179,28,121)] border-t-transparent rounded-full animate-spin"></div>
</div>

<script>
    const loader = document.getElementById('loader-overlay');

    // ✅ Affiche le loader immédiatement quand la page commence à charger
    document.addEventListener("DOMContentLoaded", () => {
        loader.classList.add("hidden");
    });

    // ✅ Quand on clique sur un lien interne, montre le loader
    document.querySelectorAll("a:not([target='_blank']):not([href^='#'])")
        .forEach(a => {
            a.addEventListener("click", function () {
                loader.classList.remove("hidden");
            });
        });

    // ✅ Quand un formulaire est soumis, montre le loader
    document.querySelectorAll("form").forEach(form => {
        form.addEventListener("submit", () => {
            loader.classList.remove("hidden");
        });
    });

    // ✅ Si tu utilises Alpine.js, ou changement dynamique, affiche loader
    document.addEventListener('alpine:init', () => {
        loader.classList.add("hidden");
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
<!-- SheetJS pour Excel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>

<!-- jsPDF pour PDF -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.28/jspdf.plugin.autotable.min.js"></script>

</body>

<script src="https://unpkg.com/heroicons@2.0.18/dist/heroicons.min.js"></script>
<!-- <script src="//unpkg.com/alpinejs" defer></script> -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</html>
