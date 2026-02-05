@extends('citech.layouts.app')

@section('title', 'info')

@section('content')

<section class="w-full">
    
    <!-- Header Section -->
    <div class="w-full lg:w-[88%] mx-auto mt-5 md:mt-8 lg:mt-10 px-4 lg:px-0">
        <div class="bg-[#f24c21] flex flex-col md:flex-row items-center justify-center gap-4 p-6 md:p-8 rounded-lg">
            
            <div class="w-full md:w-auto max-w-md">
                <div class="border border-white bg-transparent text-white text-center py-3 px-6 rounded hover:text-gray-400 transition-colors duration-500 cursor-pointer">
                    <span class="text-base md:text-lg font-medium">S'inscrire</span>
                </div>
            </div>
            
            <div class="w-full md:w-auto max-w-md">
                <div class="border border-white bg-[#2f353e] text-white text-center py-3 px-6 rounded hover:text-gray-400 transition-colors duration-500 cursor-pointer">
                    <a href="inscription_finance" class="block text-base md:text-lg font-medium">
                        BACHELOR 3 FINANCE
                        <br>
                        ANALYSTE FINANCIER
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
                    <a href="programme" class="text-sm md:text-base">Programme</a>
                </p>
            </div>
            
            <div class="bg-[#2f353e] text-white text-center py-4 px-3 rounded hover:text-[#f24c21] transition-colors duration-500 cursor-pointer">
                <p>
                    <a href="equipe_pedagogique" class="text-sm md:text-base">L'Équipe pédagogique</a>
                </p>
            </div>
            
            <div class="bg-[#2f353e] text-white text-center py-4 px-3 rounded hover:text-[#f24c21] transition-colors duration-500 cursor-pointer">
                <p>
                    <a href="conditions" class="text-sm md:text-base">Conditions</a>
                </p>
            </div>
            
            <div class="bg-[#2f353e] text-white text-center py-4 px-3 rounded hover:text-[#f24c21] transition-colors duration-500 cursor-pointer">
                <p>
                    <a href="modalites" class="text-sm md:text-base">Modalités</a>
                </p>
            </div>
            
        </div>
    </div>

    <!-- Main Content Card -->
    <div class="w-full lg:w-[88%] mx-auto mt-6 md:mt-8 mb-8 border-4 border-[#f24c21] p-4 md:p-6 lg:p-8 rounded-lg">
        
        <h1 class="text-[#686D76] text-xl md:text-2xl lg:text-3xl font-bold mb-4">
            <u>Programme du <strong>BACHELOR 3 FINANCE</strong> - Analyste financier (9 mois)</u>
        </h1>
        
        <h2 class="text-[#686D76] text-lg md:text-xl lg:text-2xl italic mb-6 md:mb-8">
            sous la Direction du Professeur Abdoulaye OUATTARA
        </h2>
        
        <div class="space-y-6 md:space-y-8 text-justify">
            
            <div class="text-[#686D76]">
                <span class="text-lg md:text-xl font-arial block">
                    <strong>Module 1</strong> : Notions de base de la comptabilité
                </span>
            </div>
            
            <div class="text-[#686D76]">
                <span class="text-lg md:text-xl font-arial block">
                    <strong>Module 2</strong> : Maîtriser l'environnement comptable et financier
                </span>
            </div>
            
            <div class="text-[#686D76]">
                <span class="text-lg md:text-xl font-arial block">
                    <strong>Module 3</strong> : Analyser les équilibres financiers
                </span>
            </div>
            
            <div class="text-[#686D76]">
                <span class="text-lg md:text-xl font-arial block">
                    <strong>Module 4</strong> : Évaluer l'activité et la profitabilité
                </span>
            </div>
            
            <div class="text-[#686D76]">
                <span class="text-lg md:text-xl font-arial block">
                    <strong>Module 5</strong> : Faire un diagnostic financier
                </span>
            </div>
            
            <div class="text-[#686D76]">
                <span class="text-lg md:text-xl font-arial block">
                    <strong>Module 6</strong> : Pratique écrite de l'anglais
                </span>
            </div>
            
            <div class="text-[#686D76]">
                <span class="text-lg md:text-xl font-arial block">
                    <strong>Module 7</strong> : Projet
                </span>
            </div>
            
        </div>
        
    </div>

</section>

@endsection