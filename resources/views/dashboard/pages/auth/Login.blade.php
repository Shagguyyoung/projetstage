<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <div class="min-h-screen flex items-center justify-center">
        <div class="w-full max-w-md  p-8 rounded-lg shadow-lg bg-[rgb(179,28,121)]">
            <div class="col-md-12 flex justify-center">
                <img class="logo w-24 h-auto" src="{{ asset('assets/upload/dash_img/logo-1.png') }}" alt="Logo">
            </div>


            <h2 class="text-2xl text-white font-bold text-center mb-6 text-gray-800">
                Connexion à l'Espace
            </h2>

            <!-- Formulaire statique -->
            <form>
                <!-- Email / Matricule -->
                <div class="mb-4">
                    <label class="block text-white font-medium mb-1">Email </label>
                    <input
                        type="text"
                        class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring focus:ring-blue-400 focus:border-blue-500"
                        placeholder="Entrez votre identifiant"
                    >
                </div>

                <!-- Mot de passe -->
                <div class="mb-6">
                    <label class="block text-white font-medium mb-1">Mot de passe</label>
                    <input
                        type="password"
                        class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring focus:ring-blue-400 focus:border-blue-500"
                        placeholder="Entrez votre mot de passe"
                    >
                </div>

                <!-- Bouton Connexion -->
                <a href="{{ route('Accueil') }}"
                class="w-full block bg-black hover:bg-gray-700 text-white font-medium py-2 rounded-lg text-center transition">
                    Se connecter
                </a>

            </form>


        </div>
    </div>

</body>
</html>
