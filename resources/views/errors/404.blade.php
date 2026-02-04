<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>404 — Page introuvable</title>
  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @keyframes float {
      0% { transform: translateY(0); }
      50% { transform: translateY(-8px); }
      100% { transform: translateY(0); }
    }
    .float { animation: float 3s ease-in-out infinite; }
  </style>
</head>
<body class="min-h-screen bg-gray-100 flex items-center justify-center">
  <main class="max-w-4xl w-full p-6">
    <div class="bg-white shadow-xl rounded-2xl overflow-hidden grid grid-cols-1 md:grid-cols-2">

      <!-- Message section -->
      <section class="p-10 flex flex-col justify-center space-y-6">
        <div>
          <h1 class="text-6xl font-extrabold text-purple-600">404</h1>
          <h2 class="mt-2 text-2xl font-semibold text-gray-800">Page introuvable</h2>
          <p class="mt-3 text-gray-600">Oups ! La page que vous recherchez semble introuvable. Elle a peut-être été déplacée, renommée ou n'a jamais existé.</p>
        </div>

        <!-- Buttons -->
        <div class="flex flex-wrap gap-3">
          <a href="/" class="inline-flex items-center px-4 py-2 bg-purple-600 text-white rounded-lg shadow hover:bg-purple-700 transition">Retour à l'accueil</a>
          <button onclick="history.back()" class="inline-flex items-center px-4 py-2 border rounded-lg text-gray-700 hover:bg-gray-100 transition">Page précédente</button>
          <a href="/contact" class="inline-flex items-center px-4 py-2 border rounded-lg text-gray-700 hover:bg-gray-100 transition">Contacter le support</a>
        </div>

        <div class="text-sm text-gray-500 mt-2">Code erreur : <span class="font-medium">404_NOT_FOUND</span></div>
      </section>

      <!-- Illustration -->
      <aside class="hidden md:flex items-center justify-center bg-gradient-to-br from-purple-50 to-white p-8">
        <div class="text-center">
          <div class="inline-block p-6 bg-white rounded-full shadow float">
            <!-- Icon: Search -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-purple-500" viewBox="0 0 24 24" fill="none">
              <circle cx="11" cy="11" r="6" stroke="currentColor" stroke-width="1.5"></circle>
              <path d="M20 20l-4.35-4.35" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
            </svg>
          </div>
          <p class="mt-6 text-gray-600">Impossible de trouver la ressource demandée.</p>
        </div>
      </aside>
    </div>

    <footer class="mt-6 text-center text-xs text-gray-400">© <span id="year"></span> Ton Organisation — Tous droits réservés</footer>
  </main>

  <script>
    document.getElementById('year').textContent = new Date().getFullYear();
  </script>
</body>
</html>
