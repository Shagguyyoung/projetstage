@extends('citech.layouts.app')

@section('title', 'info')

@section('content')

<section class="w-full">
    
    <!-- Header Section -->
    <div class="w-full lg:w-[85%] mx-auto mt-5 md:mt-8 lg:mt-10 px-4 lg:px-0">
        <div class="bg-[#f24c21] flex flex-col md:flex-row items-center justify-center gap-4 p-6 md:p-8 rounded-lg">
            
            <div class="w-full md:w-auto max-w-md">
                <div class="border border-white bg-transparent text-white text-center py-3 px-6 rounded hover:text-gray-400 transition-colors duration-500 cursor-pointer">
                    <span class="text-base md:text-lg font-medium">S'inscrire</span>
                </div>
            </div>
            
            <div class="w-full md:w-auto max-w-md">
                <div class="border border-white bg-[#2f353e] text-white text-center py-3 px-6 rounded hover:text-gray-400 transition-colors duration-500 cursor-pointer">
                    <a href="inscription_logistique" class="block text-base md:text-lg font-medium">
                        BACHELOR 3 LOGISTIQUE
                        <br>
                        RESPONSABLE LOGISTIQUE
                    </a>
                </div>
            </div>
            
        </div>
    </div>

    <!-- Navigation Cards -->
    <div class="w-full flex justify-center mt-6 md:mt-8 px-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3 md:gap-5 max-w-6xl w-full">
            
            <div class="bg-[#2f353e] text-white text-center py-4 px-3 rounded hover:text-[#f24c21] transition-colors duration-500 cursor-pointer">
                <p>
                    <a href="programme_logistique" class="text-sm md:text-base">Programme</a>
                </p>
            </div>
            
            <div class="bg-[#2f353e] text-white text-center py-4 px-3 rounded hover:text-[#f24c21] transition-colors duration-500 cursor-pointer">
                <p>
                    <a href="equipe_logistique" class="text-sm md:text-base">L'Équipe pédagogique</a>
                </p>
            </div>
            
            <div class="bg-[#2f353e] text-white text-center py-4 px-3 rounded hover:text-[#f24c21] transition-colors duration-500 cursor-pointer">
                <p>
                    <a href="conditions_logistique" class="text-sm md:text-base">Conditions</a>
                </p>
            </div>
            
            <div class="bg-[#2f353e] text-white text-center py-4 px-3 rounded hover:text-[#f24c21] transition-colors duration-500 cursor-pointer">
                <p>
                    <a href="modalites_logistique" class="text-sm md:text-base">Modalités</a>
                </p>
            </div>
            
        </div>
    </div>

    <!-- Main Content Card -->
    <div class="w-full lg:w-[85%] mx-auto mt-6 md:mt-8 mb-8 border-4 border-[#f24c21] p-4 md:p-6 lg:p-8 rounded-lg">
        
        <h1 class="text-[#686D76] text-lg md:text-xl lg:text-2xl font-bold mb-4 md:mb-6">
            CONDITIONS D'ADMISSIBILITÉ
        </h1>
        
        <h2 class="text-[#686D76] text-xs md:text-sm lg:text-base mb-6 md:mb-8">
            <u>Admission en BACHELOR 3 Responsable Logistique</u>
        </h2>
        
        <div class="space-y-4 md:space-y-6 text-justify">
            
            <p class="text-[#686D76] text-xs md:text-sm leading-relaxed font-arial">
                Pour pouvoir candidater vous devez être au moins titulaire d'un Bac+2 donc soit d'une licence 2, d'un BTS ou d'un DUT.
            </p>
            
            <p class="text-[#686D76] text-xs md:text-sm leading-relaxed font-arial">
                Ce Bachelor 3 étant de spécialisation ou de réorientation, il est ouvert à tous les profils.
            </p>
            
            <p class="text-[#686D76] text-xs md:text-sm leading-relaxed font-arial">
                Vous devez renseigner complètement votre dossier en ligne et vous assurer que les pièces jointes nécessaires sont bien téléchargées et lisibles.
            </p>
            
            <p class="text-[#686D76] text-xs md:text-sm leading-relaxed font-arial">
                Vous ne pourrez pas passer le test d'admissibilité si ce n'est pas le cas.
            </p>
            
            <div class="bg-gray-50 border-l-4 border-[#f24c21] p-3 md:p-4 rounded">
                <p class="text-[#686D76] text-xs md:text-sm leading-relaxed font-arial">
                    Si vous êtes titulaire d'un Bac mais que vous n'êtes pas titulaire d'un Bac+2 et que vous avez au moins 3 ans d'expérience professionnelle, vous pouvez quand même candidater grâce à la procédure <strong>VAP (Validation des acquis professionnels)</strong>. Attention le nombre de places par cette procédure est limité.
                </p>
            </div>
            
        </div>
        
    </div>

</section>

@endsection