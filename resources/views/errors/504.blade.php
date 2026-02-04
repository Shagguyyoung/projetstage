<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>504 — Gateway Timeout</title>
  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @keyframes float {
      0% { transform: translateY(0); }
      50% { transform: translateY(-6px); }
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
          <h1 class="text-6xl font-extrabold text-yellow-600">504</h1>
          <h2 class="mt-2 text-2xl font-semibold text-gray-800">Gateway Timeout</h2>
          <p class="mt-3 text-gray-600">Le serveur a mis trop de temps à répondre. Veuillez réessayer ultérieurement. Si le problème persiste, contactez le support.</p>
        </div>

        <!-- Buttons -->
        <div class="flex flex-wrap gap-3">
          <a href="/" class="inline-flex items-center px-4 py-2 bg-yellow-600 text-white rounded-lg shadow hover:bg-yellow-700 transition">Retour à l'accueil</a>
          <button onclick="history.back()" class="inline-flex items-center px-4 py-2 border rounded-lg text-gray-700 hover:bg-gray-100 transition">Page précédente</button>
          <a href="/contact" class="inline-flex items-center px-4 py-2 border rounded-lg text-gray-700 hover:bg-gray-100 transition">Contacter le support</a>
        </div>

        <div class="text-sm text-gray-500 mt-2">Code erreur : <span class="font-medium">504_GATEWAY_TIMEOUT</span></div>
      </section>

      <!-- Illustration -->
      <aside class="hidden md:flex items-center justify-center bg-gradient-to-br from-yellow-50 to-white p-8">
        <div class="text-center">
          <div class="inline-block p-6 bg-white rounded-full shadow float">
            <!-- Icon: Clock / Timeout -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6l4 2" />
            </svg>
          </div>
          <p class="mt-6 text-gray-600">Le serveur n'a pas répondu à temps.</p>
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
