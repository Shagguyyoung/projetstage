@extends('citech.layouts.app')

@section('title', 'Accueil')

@section('content')
<div class="min-w-full lg:min-w-[430px]">
    <div class="container mx-auto px-4">
        <!-- Header avec logo et slogan -->
        <div class="flex flex-col items-center text-center bg-[#f24c21] w-full lg:w-[88%] lg:mx-auto py-6 lg:py-8 rounded-t-lg">
            <div class="w-full">
                <img class="w-32 h-32 md:w-40 md:h-40 lg:w-48 lg:h-48 rounded-full mx-auto" 
                     src="{{ asset('assets/upload/img/logo-1-remove.png') }}" 
                     alt="Logo CITech">
            </div>
            <span class="text-white text-lg md:text-xl lg:text-2xl font-serif italic mt-4 px-4">
                Atteindre l'Excellence par le savoir-faire
            </span>
        </div>

        <!-- Marquee -->
        <div class="w-full lg:w-[88%] lg:mx-auto text-sm md:text-base text-gray-700 py-2">
            <marquee>
                "Rentrées avril 2025 : EME Finance, EME Logistique, EME Data et EME Psychologie Sociale Appliquée"
            </marquee>
        </div>
        
        <!-- Espace Auditeurs -->
        <div class="w-full lg:w-[88%] lg:mx-auto border-t-2 border-b-2 border-[#f24c21] py-4">
            <div class="flex flex-col md:flex-row items-center justify-around gap-4 px-4">
                <div class="text-black text-xs md:text-sm font-bold">
                    Espace Auditeurs
                </div>
                
                <div class="w-full md:w-auto">
                    <label for="identifiant" class="block text-xs text-[#f24c21] italic mb-1">
                        Identifiant
                    </label>
                    <input type="text" 
                           name="identifiant" 
                           id="identifiant"
                           class="border-2 border-[#f24c21] rounded px-2 py-1 w-full md:w-40"
                           required>
                </div>
                
                <div class="w-full md:w-auto">
                    <label for="password" class="block text-xs text-[#f24c21] italic mb-1">
                        Mot de passe
                    </label>
                    <input type="password" 
                           name="mot_de_passe" 
                           id="password"
                           class="border-2 border-[#f24c21] rounded px-2 py-1 w-full md:w-40"
                           required>
                </div>
                
                <div class="mt-4 md:mt-6">
                    <button type="submit" 
                            class=" rounded-full p-2 hover:opacity-80 transition-opacity">
                        <img class="w-8 h-8 md:w-10 md:h-10" 
                             src="{{ asset('assets/upload/img/btn.png') }}" 
                             alt="Connexion">
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Logo connexion (EBE, EME, EDE) -->
    <div class="flex flex-col md:flex-row items-center justify-around gap-6 md:gap-4 py-8 px-4">
        <div class="w-32 h-32 md:w-36 md:h-36 lg:w-40 lg:h-40 rounded-full overflow-hidden cursor-pointer hover:scale-105 transition-transform">
            <a href="ebe" class="block w-full h-full">
                <img src="{{ asset('assets/upload/img/ebe-1.jpeg') }}" 
                     alt="EBE"
                     class="w-full h-full object-cover">
            </a>
        </div>
        
        <div class="w-32 h-32 md:w-36 md:h-36 lg:w-40 lg:h-40 rounded-full overflow-hidden cursor-pointer hover:scale-105 transition-transform">
            <a href="eme" class="block w-full h-full">
                <img src="{{ asset('assets/upload/img/eme-1.jpeg') }}" 
                     alt="EME"
                     class="w-full h-full object-cover">
            </a>
        </div>
        
        <div class="w-32 h-32 md:w-36 md:h-36 lg:w-40 lg:h-40 rounded-full overflow-hidden cursor-pointer hover:scale-105 transition-transform">
            <a href="ede" class="block w-full h-full">
                <img src="{{ asset('assets/upload/img/ede-1.jpeg') }}" 
                     alt="EDE"
                     class="w-full h-full object-cover">
            </a>
        </div>
    </div>

    <!-- Cadre texte -->
    <div class="w-full lg:w-[85%] lg:mx-auto px-4">
        <div id="textBox" 
             class="border-4 border-[#f24c21] p-4 md:p-6 lg:p-8 text-[#686D76] text-xs md:text-sm overflow-hidden transition-all duration-400 max-h-16 md:max-h-20">
            <p class="mb-4">
                Le <strong>CAF Institute of Technology (CITech)</strong> a été créé pour être l'Université de Technologie propre à la Compagnie Académique de Formation (CAF), son pôle d'excellence.
                Il a l'ambition d'être pour le continent africain l'équivalent du MIT américain.
            </p>
            
            <p class="mb-4">
                Bâties sur un modèle pédagogique spécifique qui a prouvé depuis plus d'une décennie son efficacité et sa performance auprès des très grandes institutions universitaires françaises comme africaines, 
                les formations et diplômes proposés par CITech ont pour objectifs principaux :
            </p>
            
            <p class="mb-2">
                Faire atteindre à tous les apprenants, et non seulement à une partie d'entre eux, l'excellence dans les compétences visées.
            </p>
            
            <p class="mb-2">
                Permettre à toutes et à tous, y compris ceux qui travaillent, d'accéder à ce qui se fait de mieux dans la spécialité choisie et cela à toute période de leur vie.
            </p>
            
            <p class="mb-2">
                Sortir de nos formations avec des savoir-faire opérationnels et de niveau international.
            </p>
            
            <p class="mb-2">
                Avoir la capacité de matérialiser le savoir-faire acquis à travers la création de produits, de services et d'entreprises.
            </p>
            
            <p class="mb-4">
                Pour réussir ce défi, nous sommes accompagnés par des équipes d'enseignants d'exception, passionnés et reconnus internationalement parmi les meilleurs dans leurs spécialités.
            </p>
            
            <p class="mb-2">CITech vous propose trois niveaux de formation :</p>
            
            <ul class="list-disc list-inside space-y-1 mb-4 ml-4">
                <li>Executive Bachelor of Engineering – EBE (*)</li>
                <li>Executive Master of Engineering - EME (**)</li>
                <li>Executive Doctorate of Engineering - EDE (**)</li>
            </ul>
            
            <ul class="list-none space-y-1 mb-4 ml-4">
                <li>(*) les titulaires d'un EBE ont accès aux EME</li>
                <li>(**) en double diplomation avec la Grande Ecole d'ingénieurs française ISAE-ISM Paris pour les filières Finance, Logistique et Data.</li>
            </ul>
            
            <p class="mb-4">
                Si vous recherchez l'Excellence, tout en maintenant votre activité sans avoir à quitter votre lieu de résidence, vous êtes au bon endroit !
            </p>
            
            <p class="font-semibold">Professeur Alain RIVIERE, Recteur de CITech</p>
        </div>
        
        <button id="toggleBtn" 
                class="mt-2 px-4 py-2 bg-transparent text-[#686D76] hover:bg-[#2980b9] hover:text-white transition-colors rounded cursor-pointer border-none">
            Suite
        </button>
    </div>

    <!-- Social Media -->
    <div class="mt-8 mb-6">
        <p class="text-center text-[#f24c21] text-base md:text-lg italic mb-4">
            Nous contacter
        </p>

        <div class="flex justify-around items-center px-4 md:px-8 max-w-md mx-auto">
            <div class="w-12 h-12 md:w-16 md:h-16 rounded-full overflow-hidden cursor-pointer hover:scale-110 transition-transform">
                <img src="{{ asset('assets/upload/img/facebook.png') }}" 
                     alt="Facebook"
                     class="w-full h-full object-cover">
            </div>
            
            <div class="w-12 h-12 md:w-16 md:h-16 rounded-full overflow-hidden cursor-pointer hover:scale-110 transition-transform">
                <img src="{{ asset('assets/upload/img/whatsapp.png') }}" 
                     alt="WhatsApp"
                     class="w-full h-full object-cover">
            </div>
            
            <div class="w-12 h-12 md:w-16 md:h-16 rounded-full overflow-hidden cursor-pointer hover:scale-110 transition-transform">
                <img src="{{ asset('assets/upload/img/linkedin.png') }}" 
                     alt="LinkedIn"
                     class="w-full h-full object-cover">
            </div>
        </div>
    </div>
</div>

<script>
    const textBox = document.getElementById("textBox");
    const button = document.getElementById("toggleBtn");

    button.addEventListener("click", () => {
        if (textBox.classList.contains("open")) {
            textBox.style.maxHeight = window.innerWidth < 768 ? "80px" : "60px";
            button.textContent = "Suite";
        } else {
            textBox.style.maxHeight = textBox.scrollHeight + "px";
            button.textContent = "Lire moins";
        }
        
        textBox.classList.toggle("open");
    });

    // Ajuster la hauteur initiale en fonction de la taille d'écran
    window.addEventListener('resize', () => {
        if (!textBox.classList.contains("open")) {
            textBox.style.maxHeight = window.innerWidth < 768 ? "80px" : "60px";
        }
    });
</script>
@endsection