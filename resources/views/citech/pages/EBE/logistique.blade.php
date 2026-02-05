@extends('citech.layouts.app')

@section('title', 'logistique')

@section('content')

<section class="w-full">
    
    <!-- Header Section with Logos -->
    <div class="w-full lg:w-[82%] mx-auto px-4 lg:px-0 mt-6 md:mt-8">
        <div class="flex flex-col md:flex-row justify-between items-center gap-4">
            
            <div class="w-32 md:w-36 lg:w-40">
                <a href="#" class="block hover:opacity-80 transition-opacity">
                    <img class="w-full" 
                         src="{{ asset('assets/upload/img/logo_abl_ok.png') }}" 
                         alt="Logo">
                </a>
            </div>
            
            <div class="text-center flex-1 px-4">
                <div class="text-[#f24c21] text-xl md:text-2xl lg:text-3xl font-bold">
                    BACHELOR 3 LOGISTIQUE
                </div>
                <div class="text-[#0c2b4e] text-xl md:text-2xl lg:text-3xl font-bold mt-2">
                    Responsable Logistique
                </div>
            </div>
            
            <div class="w-32 md:w-36 lg:w-40">
                <a href="#" class="block hover:opacity-80 transition-opacity">
                    <img class="w-full" 
                         src="{{ asset('assets/upload/img/logo_abl_ok.png') }}" 
                         alt="Logo">
                </a>
            </div>
            
        </div>
    </div>

    <!-- Main Section -->
    <div class="w-full lg:w-[85%] mx-auto mt-5 md:mt-8 px-4 lg:px-0">
        <div class="bg-[#f24c21] flex flex-col lg:flex-row items-start lg:items-stretch gap-4 p-4 md:p-6 rounded-lg">
            
            <!-- Box 1 - Espace Auditeurs -->
            <div class="w-full lg:w-auto flex-shrink-0">
                <div class="space-y-3">
                    <div class="text-black text-lg md:text-xl font-bold mb-4">
                        Espace Auditeurs
                    </div>
                    
                    <div class="space-y-2">
                        <label for="identifiant_2" class="block text-white text-sm md:text-base">
                            Identifiant
                        </label>
                        <input type="text" 
                               name="identifiant_2" 
                               id="identifiant_2" 
                               class="w-full md:w-40 px-3 py-2 rounded-md border-2 border-white focus:outline-none focus:ring-2 focus:ring-white"
                               required>
                    </div>
                    
                    <div class="space-y-2">
                        <label for="password_2" class="block text-white text-sm md:text-base">
                            Mot de passe
                        </label>
                        <input type="password" 
                               name="mot_de_passe" 
                               id="password_2" 
                               class="w-full md:w-40 px-3 py-2 rounded-md border-2 border-white focus:outline-none focus:ring-2 focus:ring-white"
                               required>
                    </div>
                    
                    <div class="text-white text-xs md:text-sm font-bold">
                        <p class="text-center">
                            Mot de passe oublié? 
                            <a href="#" class="hover:text-gray-300 transition-colors duration-300 underline">
                                Cliquez ici
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Button -->
            <div class="w-full lg:w-auto flex items-center justify-center lg:justify-start mt-4 lg:mt-0">
                <button type="submit" 
                        class="bg-transparent border-none rounded-full hover:scale-105 transition-transform duration-300 cursor-pointer">
                    <img class="w-16 h-16 md:w-20 md:h-20" 
                         src="{{ asset('assets/upload/img/button-1.png') }}" 
                         alt="Connexion">
                </button>
            </div>
            
            <!-- Box 2 - Video -->
            <div class="w-full lg:flex-1 flex items-center justify-center">
                <div class="w-full max-w-md lg:max-w-none">
                    <iframe class="w-full aspect-video rounded-lg shadow-lg" 
                            src="https://www.youtube.com/embed/JUtx6sfELTo?rel=0&autoplay=1&loop=1&fs=1" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                            allowfullscreen>
                    </iframe>
                </div>
            </div>
            
            <!-- Box 3 - Inscription Buttons -->
            <div class="w-full lg:w-auto space-y-4 mt-4 lg:mt-8">
                <div class="border border-white bg-transparent text-white text-center p-3 rounded hover:text-gray-300 transition-colors duration-500 cursor-pointer">
                    <p class="font-bold">
                        <a href="#">S'inscrire</a>
                    </p>
                </div>
                
                <div class="border border-white bg-[#2f353e] text-white text-center p-3 rounded hover:text-gray-400 transition-colors duration-400 cursor-pointer">
                    <p>
                        <a href="inscription_logistique">
                            BACHELOR 3 LOGISTIQUE<br>
                            Responsable Logistique
                        </a>
                    </p>
                </div>
            </div>
            
        </div>
    </div>

    <!-- Navigation Cards -->
    <div class="w-full flex justify-center mt-6 md:mt-8 px-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3 md:gap-4 max-w-6xl w-full">
            
            <div class="bg-[#2f353e] text-white text-center py-4 px-3 rounded hover:text-[#f24c21] transition-colors duration-400 cursor-pointer">
                <p>
                    <a href="programme_logistique" class="text-sm md:text-base">Programme</a>
                </p>
            </div>
            
            <div class="bg-[#2f353e] text-white text-center py-4 px-3 rounded hover:text-[#f24c21] transition-colors duration-400 cursor-pointer">
                <p>
                    <a href="equipe_logistique" class="text-sm md:text-base">L'Équipe pédagogique</a>
                </p>
            </div>
            
            <div class="bg-[#2f353e] text-white text-center py-4 px-3 rounded hover:text-[#f24c21] transition-colors duration-400 cursor-pointer">
                <p>
                    <a href="conditions_logistique" class="text-sm md:text-base">Conditions</a>
                </p>
            </div>
            
            <div class="bg-[#2f353e] text-white text-center py-4 px-3 rounded hover:text-[#f24c21] transition-colors duration-400 cursor-pointer">
                <p>
                    <a href="modalites_logistique" class="text-sm md:text-base">Modalités</a>
                </p>
            </div>
            
        </div>
    </div>

    <!-- Main Content Card -->
    <div class="w-full lg:w-[85%] mx-auto mt-6 md:mt-8 mb-8 border-4 border-[#f24c21] p-4 md:p-6 lg:p-8 rounded-lg">
        
        <h1 class="text-[#686D76] text-base md:text-lg lg:text-xl font-bold mb-4 md:mb-6">
            Pourquoi un Executive Master of Engineering en Psychologie Sociale Appliquée ?
        </h1>
        
        <div class="space-y-4 text-justify">
            <p class="text-[#686D76] text-xs md:text-sm font-arial leading-relaxed">
                C'est une raison simple et évidente : il n'y a pas un seul secteur de l'activité économique qui n'ait besoin de comprendre et d'utiliser la dimension humaine pour atteindre l'excellence. Actuellement, d'un côté le monde universitaire produit d'excellentes formations théoriques et la recherche en science du comportement a fait elle des progrès remarquables ces dernières décennies. Mais le constat est sans appel, la transmission rigoureuse de l'applicabilité aux activités économiques ne s'est pas faite. C'est l'ambition de ce Master en Ingénierie Comportementale l'Executive Master of Engineering en Psychologie Sociale Appliquée.
            </p>
            
            <div class="pt-2">
                <p class="text-[#686D76] text-xs font-bold">Pr Alain RIVIERE</p>
                <p class="text-[#686D76] text-xs">Recteur de CITech</p>
            </div>
        </div>
        
    </div>

    <!-- Footer Section -->
    <div class="w-full px-4 lg:px-0 mb-8">
        <div class="w-full lg:w-[85%] mx-auto flex flex-col lg:flex-row gap-6">
            
            <!-- Registration Info Grid -->
            <div class="flex-1">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-3 md:gap-4">
                    <!-- Headers -->
                    <div class="border-4 border-[#f24c21] bg-transparent text-[#686D76] text-center py-3 px-2 rounded">
                        <p class="font-semibold text-sm md:text-base">S'inscrire</p>
                    </div>
                    <div class="border-4 border-[#f24c21] bg-transparent text-[#686D76] text-center py-3 px-2 rounded">
                        <p class="font-semibold text-sm md:text-base">Prochaine Rentrée</p>
                    </div>
                    <div class="border-4 border-[#f24c21] bg-transparent text-[#686D76] text-center py-3 px-2 rounded">
                        <p class="font-semibold text-sm md:text-base">Limite candidatures</p>
                    </div>
                    
                    <!-- Content -->
                    <div class="border-2 border-white bg-[#0c2b4e] text-white text-center py-3 px-2 rounded hover:text-[#686D76] transition-colors duration-500">
                        <p class="text-sm md:text-base">
                            <a href="inscription_logistique">
                                BACHELOR 3 LOGISTIQUE<br>
                                Responsable Logistique
                            </a>
                        </p>
                    </div>
                    <div class="border-4 border-[#f24c21] bg-transparent text-[#686D76] text-center py-3 px-2 rounded">
                        <p class="text-sm md:text-base font-semibold">15 avril 2026</p>
                    </div>
                    <div class="border-4 border-[#f24c21] bg-transparent text-[#686D76] text-center py-3 px-2 rounded">
                        <p class="text-sm md:text-base font-semibold">13 avril 2026</p>
                    </div>
                </div>
            </div>

            <!-- Social Media Section -->
            <div class="w-full lg:w-auto">
                <div class="bg-[#f24c21] flex items-center gap-4 p-4 md:p-6 rounded-lg">
                    <div class="text-center">
                        <span class="text-white block mb-2 text-sm md:text-base">Nous contacter</span>
                        <a href="#" class="block hover:opacity-80 transition-opacity">
                            <img class="w-20 md:w-24 mx-auto" 
                                 src="{{ asset('assets/upload/img/wifi.svg') }}" 
                                 alt="Contact">
                        </a>
                    </div>
                    
                    <div class="flex flex-col gap-3">
                        <a href="#" class="hover:scale-110 transition-transform">
                            <img class="w-10 h-10" 
                                 src="{{ asset('assets/upload/img/facebook.png') }}" 
                                 alt="Facebook">
                        </a>
                        <a href="#" class="hover:scale-110 transition-transform">
                            <img class="w-10 h-10" 
                                 src="{{ asset('assets/upload/img/twitter.png') }}" 
                                 alt="Twitter">
                        </a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

</section>

@endsection