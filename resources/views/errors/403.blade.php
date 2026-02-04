<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>403 — Accès interdit</title>
  <!-- Tailwind CDN (utile si ton projet n'a pas encore de CSS compilé) -->
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Petite animation douce pour l'icône */
    @keyframes float {
      0% { transform: translateY(0); }
      50% { transform: translateY(-6px); }
      100% { transform: translateY(0); }
    }
    .float { animation: float 3s ease-in-out infinite; }
  </style>
</head>
<body class="min-h-screen bg-gray-50 flex items-center justify-center">
  <main class="max-w-4xl w-full p-6">
    <div class="bg-white shadow-lg rounded-2xl overflow-hidden grid grid-cols-1 md:grid-cols-2">
      <!-- Left: message -->
      <section class="p-10 flex flex-col justify-center space-y-6">
        <div>
          <h1 class="text-6xl font-extrabold text-red-600">403</h1>
          <h2 class="mt-2 text-2xl font-semibold text-gray-800">Accès interdit</h2>
          <p class="mt-3 text-gray-600">Vous n'avez pas la permission d'accéder à cette ressource. Si vous pensez que c'est une erreur, contactez l'administrateur ou reconnectez-vous avec un compte ayant les droits requis.</p>
        </div>

        <div class="flex flex-wrap gap-3">
          <a href="/" class="inline-flex items-center px-4 py-2 bg-red-600 text-white rounded-lg shadow hover:bg-red-700 transition">Retour à l'accueil</a>
          <button onclick="history.back()" class="inline-flex items-center px-4 py-2 border rounded-lg text-gray-700 hover:bg-gray-100 transition">Retour</button>
          <a href="/contact" class="inline-flex items-center px-4 py-2 border rounded-lg text-gray-700 hover:bg-gray-100 transition">Contacter le support</a>
        </div>

        <div class="text-sm text-gray-500 mt-2">Code erreur: <span class="font-medium">403_FORBIDDEN</span></div>
      </section>

      <!-- Right: illustration -->
      <aside class="hidden md:flex items-center justify-center bg-gradient-to-tr from-red-50 to-white p-8">
        <div class="text-center">
          <!-- Simple SVG lock icon -->
          <div class="inline-block p-6 bg-white rounded-full shadow float">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-red-500" viewBox="0 0 24 24" fill="none">
              <path d="M12 15a1 1 0 100-2 1 1 0 000 2z" fill="currentColor" />
              <path stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" d="M7 11V8a5 5 0 0110 0v3" />
              <rect x="5" y="11" width="14" height="8" rx="2" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" fill="none" />
            </svg>
          </div>

          <p class="mt-6 text-gray-600">Accès restreint — autorisation requise.</p>
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
